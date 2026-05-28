import { test as base } from "@playwright/test";
import { LoginPage } from "./login.page";
import { ProductPage } from "./product.page";
import { CartPage } from "./cart.page";
import { CheckoutInformationPage } from "./checkout-information.page";
import { CheckoutOverviewPage } from "./checkout-overview.page";
import { CheckoutCompletePage } from "./checkout-complete.page";

type baseFixtures = {
    loginPage: LoginPage,
    productPage: ProductPage,
    cartPage: CartPage,
    checkoutInformationPage: CheckoutInformationPage,
    checkoutOverviewPage: CheckoutOverviewPage,
    checkoutCompletePage: CheckoutCompletePage,
}

export const test = base.extend<baseFixtures>({
    loginPage: async ({ page }, use) => {
        await use(new LoginPage(page));
    },
    productPage: async ({ page }, use) => {
        await use(new ProductPage(page));
    },
    cartPage: async ({ page }, use) => {
        await use(new CartPage(page));
    },
    checkoutInformationPage: async ({ page }, use) => {
        await use(new CheckoutInformationPage(page));
    },
    checkoutOverviewPage: async ({ page }, use) => {
        await use(new CheckoutOverviewPage(page));
    },
    checkoutCompletePage: async ({ page }, use) => {
        await use(new CheckoutCompletePage(page));
    },
})
