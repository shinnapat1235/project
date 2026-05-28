import { removeSlashUrl } from "./utils";

function parseCurrencyValue(text = "") {
    const matched = text.match(/(\d+\.\d{2})/);
    return matched ? Number(matched[1]) : 0;
}

export class CheckoutOverviewPage {
    checkoutOverviewUrl = "https://www.saucedemo.com/checkout-step-two.html";
    inventoryUrl = "https://www.saucedemo.com/inventory.html";
    checkoutCompleteUrl = "https://www.saucedemo.com/checkout-complete.html";

    locatorCartBadge = ".shopping_cart_badge";
    locatorOverviewItems = ".cart_item";
    locatorItemName = ".inventory_item_name";
    locatorItemPrice = ".inventory_item_price";
    locatorSubtotal = '[data-test="subtotal-label"]';
    locatorTax = '[data-test="tax-label"]';
    locatorTotal = '[data-test="total-label"]';
    locatorCancelButton = '[data-test="cancel"]';
    locatorFinishButton = '[data-test="finish"]';

    /**
     *
     * @param {import('@playwright/test').Page} page
     */
    constructor(page) {
        this.page = page;
    }

    isOnCheckoutOverviewPage() {
        return removeSlashUrl(this.page.url()) === this.checkoutOverviewUrl;
    }

    isOnInventoryPage() {
        return removeSlashUrl(this.page.url()) === this.inventoryUrl;
    }

    isOnCheckoutCompletePage() {
        return removeSlashUrl(this.page.url()) === this.checkoutCompleteUrl;
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

    async getOverviewItems() {
        const items = [];
        const overviewItems = this.page.locator(this.locatorOverviewItems);
        const itemCount = await overviewItems.count();

        for (let i = 0; i < itemCount; i += 1) {
            const item = overviewItems.nth(i);
            const name = (await item.locator(this.locatorItemName).textContent()) || "";
            const priceText = (await item.locator(this.locatorItemPrice).textContent()) || "0";

            items.push({
                name: name.trim(),
                price: parseCurrencyValue(priceText),
            });
        }

        return items;
    }

    async getSubtotal() {
        const text = (await this.page.locator(this.locatorSubtotal).textContent()) || "";
        return parseCurrencyValue(text);
    }

    async getTax() {
        const text = (await this.page.locator(this.locatorTax).textContent()) || "";
        return parseCurrencyValue(text);
    }

    async getTotal() {
        const text = (await this.page.locator(this.locatorTotal).textContent()) || "";
        return parseCurrencyValue(text);
    }

    async clickCancel() {
        await this.page.click(this.locatorCancelButton);
    }

    async clickFinish() {
        await this.page.click(this.locatorFinishButton);
    }
}
