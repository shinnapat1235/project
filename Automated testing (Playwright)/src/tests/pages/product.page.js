import { removeSlashUrl } from "./utils";

export class ProductPage {
    inventoryUrl = "https://www.saucedemo.com/inventory.html";
    cartUrl = "https://www.saucedemo.com/cart.html";

    locatorSortDropdown = '[data-test="product-sort-container"]';
    locatorInventoryItem = ".inventory_item";
    locatorProductNames = ".inventory_item_name";
    locatorProductPrices = ".inventory_item_price";
    locatorAddToCartButtons = 'button[data-test^="add-to-cart"]';
    locatorRemoveButtons = 'button[data-test^="remove"]';
    locatorCartBadge = ".shopping_cart_badge";
    locatorCartIcon = ".shopping_cart_link";

    /**
     *
     * @param {import('@playwright/test').Page} page
     */
    constructor(page) {
        this.page = page;
    }

    isOnInventoryPage() {
        return removeSlashUrl(this.page.url()) === this.inventoryUrl;
    }

    isOnCartPage() {
        return removeSlashUrl(this.page.url()) === this.cartUrl;
    }

    async getVisibleProductCount() {
        return await this.page.locator(this.locatorProductNames).count();
    }

    async addAllItemsToCart() {
        const addButtons = this.page.locator(this.locatorAddToCartButtons);
        let addedItems = 0;

        while ((await addButtons.count()) > 0) {
            await addButtons.first().click();
            addedItems += 1;
        }

        return addedItems;
    }

    async addFirstNItemsToCart(itemCount = 2) {
        const inventoryItems = this.page.locator(this.locatorInventoryItem);
        const totalItems = await inventoryItems.count();
        const selectedItems = [];

        for (let i = 0; i < Math.min(itemCount, totalItems); i += 1) {
            const item = inventoryItems.nth(i);
            const name = (await item.locator(this.locatorProductNames).textContent()) || "";
            const priceText =
                (await item.locator(this.locatorProductPrices).textContent()) || "0";

            await item.locator('button[data-test^="add-to-cart"]').click();

            selectedItems.push({
                name: name.trim(),
                price: Number(priceText.replace("$", "").trim()),
            });
        }

        return selectedItems;
    }

    async removeAllItemsFromCart() {
        const removeButtons = this.page.locator(this.locatorRemoveButtons);
        let removedItems = 0;

        while ((await removeButtons.count()) > 0) {
            await removeButtons.first().click();
            removedItems += 1;
        }

        return removedItems;
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

    async sortBy(sortValue) {
        await this.page.selectOption(this.locatorSortDropdown, sortValue);
    }

    async getProductNames() {
        return await this.page.locator(this.locatorProductNames).allTextContents();
    }

    async getProductPrices() {
        const priceTexts = await this.page
            .locator(this.locatorProductPrices)
            .allTextContents();

        return priceTexts.map((priceText) =>
            Number(priceText.replace("$", "").trim())
        );
    }

    async clickCartIcon() {
        await this.page.click(this.locatorCartIcon);
    }
}
