import { expect } from "@playwright/test";
import { test } from "./pages/base";

async function openCheckoutInformationWithTwoItems(
    loginPage,
    productPage,
    cartPage,
    checkoutInformationPage
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
}

test.describe("CHECKOUT INFORMATION PAGE FUNCTION", () => {
    test("When clicking Cancel, should navigate back to the cart page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
    }) => {
        await openCheckoutInformationWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage
        );

        await checkoutInformationPage.clickCancel();
        expect(checkoutInformationPage.isOnCartPage()).toBe(true);
    });

    test("When clicking Continue without any client information, should display an error message", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
    }) => {
        await openCheckoutInformationWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage
        );

        await checkoutInformationPage.clickContinue();

        const errorMessage = await checkoutInformationPage.getErrorMessage();
        expect(errorMessage).toContain("Error");
        expect(checkoutInformationPage.isOnCheckoutInformationPage()).toBe(true);
    });

    test("When clicking Continue with some client information, should display an error message", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
    }) => {
        await openCheckoutInformationWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage
        );

        await checkoutInformationPage.fillClientInformation({ firstName: "Emily" });
        await checkoutInformationPage.clickContinue();

        const errorMessage = await checkoutInformationPage.getErrorMessage();
        expect(errorMessage).toContain("Error");
        expect(checkoutInformationPage.isOnCheckoutInformationPage()).toBe(true);
    });

    test("When clicking Continue with all client information, should proceed to checkout overview page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
    }) => {
        await openCheckoutInformationWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage
        );

        await checkoutInformationPage.fillClientInformation({
            firstName: "Emily",
            lastName: "Harrison",
            postalCode: "90210",
        });
        await checkoutInformationPage.clickContinue();

        expect(checkoutInformationPage.isOnCheckoutOverviewPage()).toBe(true);
    });
});
