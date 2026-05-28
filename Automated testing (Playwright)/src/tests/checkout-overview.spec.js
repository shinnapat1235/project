import { expect } from "@playwright/test";
import { test } from "./pages/base";

async function openCheckoutOverviewWithTwoItems(
    loginPage,
    productPage,
    cartPage,
    checkoutInformationPage,
    checkoutOverviewPage
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

    return selectedItems;
}

test.describe("CHECKOUT OVERVIEW PAGE FUNCTION", () => {
    test("The cart badge should display the correct number of items currently in the cart", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
    }) => {
        await openCheckoutOverviewWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage
        );

        expect(await checkoutOverviewPage.getCartBadgeCount()).toBe(2);
    });

    test("Item name and price in checkout overview should match selected items from product page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
    }) => {
        const selectedItems = await openCheckoutOverviewWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage
        );

        const overviewItems = await checkoutOverviewPage.getOverviewItems();
        expect(overviewItems).toEqual(selectedItems);
    });

    test("Should correctly calculate item total, tax, and grand total", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
    }) => {
        await openCheckoutOverviewWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage
        );

        const overviewItems = await checkoutOverviewPage.getOverviewItems();
        const subtotalFromItems = overviewItems.reduce((sum, item) => sum + item.price, 0);

        const displayedSubtotal = await checkoutOverviewPage.getSubtotal();
        const displayedTax = await checkoutOverviewPage.getTax();
        const displayedTotal = await checkoutOverviewPage.getTotal();

        expect(displayedSubtotal).toBeCloseTo(subtotalFromItems, 2);
        expect(displayedTotal).toBeCloseTo(displayedSubtotal + displayedTax, 2);
    });

    test("When clicking Cancel, should navigate back to the product page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
    }) => {
        await openCheckoutOverviewWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage
        );

        await checkoutOverviewPage.clickCancel();
        expect(checkoutOverviewPage.isOnInventoryPage()).toBe(true);
    });

    test("When clicking Finish, should proceed to the checkout complete page", async ({
        loginPage,
        productPage,
        cartPage,
        checkoutInformationPage,
        checkoutOverviewPage,
    }) => {
        await openCheckoutOverviewWithTwoItems(
            loginPage,
            productPage,
            cartPage,
            checkoutInformationPage,
            checkoutOverviewPage
        );

        await checkoutOverviewPage.clickFinish();
        expect(checkoutOverviewPage.isOnCheckoutCompletePage()).toBe(true);
    });
});
