import { removeSlashUrl } from "./utils";

export class CheckoutInformationPage {
    checkoutInformationUrl = "https://www.saucedemo.com/checkout-step-one.html";
    cartUrl = "https://www.saucedemo.com/cart.html";
    checkoutOverviewUrl = "https://www.saucedemo.com/checkout-step-two.html";

    locatorFirstName = '[data-test="firstName"]';
    locatorLastName = '[data-test="lastName"]';
    locatorPostalCode = '[data-test="postalCode"]';
    locatorContinueButton = '[data-test="continue"]';
    locatorCancelButton = '[data-test="cancel"]';
    locatorErrorMessage = '[data-test="error"]';

    /**
     *
     * @param {import('@playwright/test').Page} page
     */
    constructor(page) {
        this.page = page;
    }

    isOnCheckoutInformationPage() {
        return removeSlashUrl(this.page.url()) === this.checkoutInformationUrl;
    }

    isOnCartPage() {
        return removeSlashUrl(this.page.url()) === this.cartUrl;
    }

    isOnCheckoutOverviewPage() {
        return removeSlashUrl(this.page.url()) === this.checkoutOverviewUrl;
    }

    async fillClientInformation({ firstName = "", lastName = "", postalCode = "" } = {}) {
        await this.page.locator(this.locatorFirstName).fill(firstName);
        await this.page.locator(this.locatorLastName).fill(lastName);
        await this.page.locator(this.locatorPostalCode).fill(postalCode);
    }

    async clickContinue() {
        await this.page.click(this.locatorContinueButton);
    }

    async clickCancel() {
        await this.page.click(this.locatorCancelButton);
    }

    async getErrorMessage() {
        try {
            return (
                (await this.page
                    .locator(this.locatorErrorMessage)
                    .textContent({ timeout: 1000 })) || ""
            );
        } catch (e) {}

        return "";
    }
}
