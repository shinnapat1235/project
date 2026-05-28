import { removeSlashUrl } from "./utils";

export class CheckoutCompletePage {
    checkoutCompleteUrl = "https://www.saucedemo.com/checkout-complete.html";
    inventoryUrl = "https://www.saucedemo.com/inventory.html";

    locatorCartBadge = ".shopping_cart_badge";
    locatorCompleteHeader = '[data-test="complete-header"]';
    locatorCompleteText = '[data-test="complete-text"]';
    locatorBackHomeButton = '[data-test="back-to-products"]';

    /**
     *
     * @param {import('@playwright/test').Page} page
     */
    constructor(page) {
        this.page = page;
    }

    isOnCheckoutCompletePage() {
        return removeSlashUrl(this.page.url()) === this.checkoutCompleteUrl;
    }

    isOnInventoryPage() {
        return removeSlashUrl(this.page.url()) === this.inventoryUrl;
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

    async getCompleteHeader() {
        return (
            (await this.page.locator(this.locatorCompleteHeader).textContent()) || ""
        ).trim();
    }

    async getCompleteText() {
        return ((await this.page.locator(this.locatorCompleteText).textContent()) || "").trim();
    }

    async clickBackHome() {
        await this.page.click(this.locatorBackHomeButton);
    }
}
