import { expect } from "@playwright/test";
import { test } from "./pages/base";

async function openCheckoutCompleteWithTwoItems(
    loginPage,
    productPage,
    cartPage,
    checkoutInformationPage,
    checkoutOverviewPage,
    checkoutCompletePage
) {
    await loginPage.goto();
    await loginPage.fillUserPassword("standard_user", "secret_sauce");
    await loginPage.clickLogin();
    expect(productPage.isOnInventoryPage()).toBe(true);

    const selectedItems = await productPage.addFirstNItemsToCart(2);
    expect(selectedItems).toHaveLength(2);
    expect(await productPage.getCartBadgeCount()).toBe(2);

    await productPage.clickCartIcon();
    expect(cartPage.isOnCartPage()).toBe(true);

    await cartPage.clickCheckout();
    expect(checkoutInformationPage.isOnCheckoutInformationPage()).toBe(true);

    await checkoutInformationPage.fillClientInformation({
        firstName: "Emily",
        lastName: "Harrison",
        postalCode: "90210",
    });
    await checkoutInformationPage.clickContinue();
    expect(checkoutOverviewPage.isOnCheckoutOverviewPage()).toBe(true);

    await checkoutOverviewPage.clickFinish();
    expect(checkoutCompletePage.isOnCheckoutCompletePage()).toBe(true);
}

test.describe("CHECKOUT COMPLETE PAGE FUNCTION", () => {
    test("The cart badge number should be removed", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
        checkoutCompletePage,
    }) => {
        await openCheckoutCompleteWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage,
            checkoutCompletePage
        );

        expect(await checkoutCompletePage.getCartBadgeCount()).toBe(0);
    });

    test("Should display the complete message correctly", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
        checkoutCompletePage,
    }) => {
        await openCheckoutCompleteWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage,
            checkoutCompletePage
        );

        expect(await checkoutCompletePage.getCompleteHeader()).toBe(
            "Thank you for your order!"
        );
        expect(await checkoutCompletePage.getCompleteText()).toBe(
            "Your order has been dispatched, and will arrive just as fast as the pony can get there!"
        );
    });

    test("When clicking Back Home, should navigate back to the product page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
        checkoutCompletePage,
    }) => {
        await openCheckoutCompleteWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage,
            checkoutCompletePage
        );

        await checkoutCompletePage.clickBackHome();
        expect(checkoutCompletePage.isOnInventoryPage()).toBe(true);
    });
});
