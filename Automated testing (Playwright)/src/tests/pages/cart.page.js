import { removeSlashUrl } from "./utils";

export class CartPage {
    cartUrl = "https://www.saucedemo.com/cart.html";
    inventoryUrl = "https://www.saucedemo.com/inventory.html";
    checkoutInformationUrl = "https://www.saucedemo.com/checkout-step-one.html";

    locatorCartBadge = ".shopping_cart_badge";
    locatorCartItems = ".cart_item";
    locatorCartItemName = ".inventory_item_name";
    locatorCartItemPrice = ".inventory_item_price";
    locatorRemoveButtons = 'button[data-test^="remove"]';
    locatorContinueShoppingButton = '[data-test="continue-shopping"]';
    locatorCheckoutButton = '[data-test="checkout"]';

    /**
     *
     * @param {import('@playwright/test').Page} page
     */
    constructor(page) {
        this.page = page;
    }

    isOnCartPage() {
        return removeSlashUrl(this.page.url()) === this.cartUrl;
    }

    isOnInventoryPage() {
        return removeSlashUrl(this.page.url()) === this.inventoryUrl;
    }

    isOnCheckoutInformationPage() {
        return removeSlashUrl(this.page.url()) === this.checkoutInformationUrl;
    }

    async getCartBadgeCount() {
        try {
            const badgeText = await this.page
                .locator(this.locatorCartBadge)
                .textContent({ timeout: 1000 });

            return Number(badgeText || 0);
        } catch (e) {}

        return 0;
    }

    async getCartItems() {
        const cartItems = this.page.locator(this.locatorCartItems);
        const itemCount = await cartItems.count();
        const items = [];

        for (let i = 0; i < itemCount; i += 1) {
            const item = cartItems.nth(i);
            const name = (await item.locator(this.locatorCartItemName).textContent()) || "";
            const priceText =
                (await item.locator(this.locatorCartItemPrice).textContent()) || "0";

            items.push({
                name: name.trim(),
                price: Number(priceText.replace("$", "").trim()),
            });
        }

        return items;
    }

    async removeItemAt(index = 0) {
        await this.page.locator(this.locatorRemoveButtons).nth(index).click();
    }

    async clickContinueShopping() {
        await this.page.click(this.locatorContinueShoppingButton);
    }

    async clickCheckout() {
        await this.page.click(this.locatorCheckoutButton);
    }
}
