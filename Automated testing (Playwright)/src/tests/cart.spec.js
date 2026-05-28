import { expect } from "@playwright/test";
import { test } from "./pages/base";

async function openCartWithTwoItems(loginPage, productPage, cartPage) {
    await loginPage.goto();
    await loginPage.fillUserPassword("standard_user", "secret_sauce");
    await loginPage.clickLogin();
    expect(productPage.isOnInventoryPage()).toBe(true);

    const selectedItems = await productPage.addFirstNItemsToCart(2);
    expect(selectedItems).toHaveLength(2);
    expect(await productPage.getCartBadgeCount()).toBe(2);

    await productPage.clickCartIcon();
    expect(cartPage.isOnCartPage()).toBe(true);

    return selectedItems;
}

test.describe("CART PAGE FUNCTION", () => {
    test("The cart badge should display the correct number of items in the cart", async ({
        loginPage,
        productPage,
        cartPage,
    }) => {
        await openCartWithTwoItems(loginPage, productPage, cartPage);

        expect(await cartPage.getCartBadgeCount()).toBe(2);
    });

    test("Cart item name and price should match selected items from product page", async ({
        loginPage,
        productPage,
        cartPage,
    }) => {
        const selectedItems = await openCartWithTwoItems(
            loginPage,
            productPage,
            cartPage
        );
        const cartItems = await cartPage.getCartItems();

        expect(cartItems).toEqual(selectedItems);
    });

    test("Should remove selected item from cart and update cart badge", async ({
        loginPage,
        productPage,
        cartPage,
    }) => {
        const selectedItems = await openCartWithTwoItems(
            loginPage,
            productPage,
            cartPage
        );

        await cartPage.removeItemAt(0);
        const cartItems = await cartPage.getCartItems();

        expect(cartItems).toHaveLength(selectedItems.length - 1);
        expect(cartItems.map((item) => item.name)).not.toContain(selectedItems[0].name);
        expect(await cartPage.getCartBadgeCount()).toBe(1);
    });

    test("When clicking Continue Shopping, should navigate back to product page", async ({
        loginPage,
        productPage,
        cartPage,
    }) => {
        await openCartWithTwoItems(loginPage, productPage, cartPage);

        await cartPage.clickContinueShopping();
        expect(cartPage.isOnInventoryPage()).toBe(true);
    });

    test("When clicking Checkout, should proceed to checkout information page", async ({
        loginPage,
        productPage,
        cartPage,
    }) => {
        await openCartWithTwoItems(loginPage, productPage, cartPage);

        await cartPage.clickCheckout();
        expect(cartPage.isOnCheckoutInformationPage()).toBe(true);
    });
});
