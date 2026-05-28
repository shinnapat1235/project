import { expect } from "@playwright/test";
import { test } from "./pages/base";

test.describe("PRODUCT PAGE FUNCTION", () => {
    test.beforeEach(async ({ loginPage, productPage }) => {
        await loginPage.goto();
        await loginPage.fillUserPassword("standard_user", "secret_sauce");
        await loginPage.clickLogin();

        expect(productPage.isOnInventoryPage()).toBe(true);
    });

    test("Adding and removing all products should update cart correctly", async ({
        productPage,
    }) => {
        const totalProducts = await productPage.getVisibleProductCount();
        const addedItems = await productPage.addAllItemsToCart();

        expect(addedItems).toBe(totalProducts);
        expect(await productPage.getCartBadgeCount()).toBe(totalProducts);

        const removedItems = await productPage.removeAllItemsFromCart();

        expect(removedItems).toBe(totalProducts);
        expect(await productPage.getCartBadgeCount()).toBe(0);
    });

    test("Product should correctly sort items from A to Z", async ({
        productPage,
    }) => {
        await productPage.sortBy("az");
        const productNames = await productPage.getProductNames();
        const expectedNames = [...productNames].sort((a, b) =>
            a.localeCompare(b)
        );

        expect(productNames).toEqual(expectedNames);
    });

    test("Product should correctly sort items from Z to A", async ({
        productPage,
    }) => {
        await productPage.sortBy("za");
        const productNames = await productPage.getProductNames();
        const expectedNames = [...productNames].sort((a, b) =>
            b.localeCompare(a)
        );

        expect(productNames).toEqual(expectedNames);
    });

    test("Product should correctly sort items from price low to high", async ({
        productPage,
    }) => {
        await productPage.sortBy("lohi");
        const productPrices = await productPage.getProductPrices();
        const expectedPrices = [...productPrices].sort((a, b) => a - b);

        expect(productPrices).toEqual(expectedPrices);
    });

    test("Product should correctly sort items from price high to low", async ({
        productPage,
    }) => {
        await productPage.sortBy("hilo");
        const productPrices = await productPage.getProductPrices();
        const expectedPrices = [...productPrices].sort((a, b) => b - a);

        expect(productPrices).toEqual(expectedPrices);
    });

    test("Should navigate to the cart page when clicking the cart icon", async ({
        productPage,
    }) => {
        await productPage.clickCartIcon();
        expect(productPage.isOnCartPage()).toBe(true);
    });
});
