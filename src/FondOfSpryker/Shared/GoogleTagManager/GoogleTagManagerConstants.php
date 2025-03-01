<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace FondOfSpryker\Shared\GoogleTagManager;

interface GoogleTagManagerConstants
{
    public const CONTAINER_ID = '';
    public const ENABLED = false;

    public const ATTRIBUTE_SPECIAL_PRICE = 'ATTRIBUTE_SPECIAL_PRICE';
    public const ATTRIBUTE_SPECIAL_PRICE_FROM = 'ATTRIBUTE_SPECIAL_PRICE_FROM';
    public const ATTRIBUTE_SPECIAL_PRICE_TO = 'ATTRIBUTE_SPECIAL_PRICE_TO';

    public const PAGE_TYPE_CATEGORY = "category";
    public const PAGE_TYPE_CART = "cart";
    public const PAGE_TYPE_HOME = "home";
    public const PAGE_TYPE_ORDER = "order";
    public const PAGE_TYPE_OTHER = "other";
    public const PAGE_TYPE_PRODUCT = "product";
    public const PAGE_TYPE_DEFAULT = 'default';
    public const PAGE_TYPE_QUOTE = 'quote';

    public const TRANSACTION_ENTITY_QUOTE = 'QUOTE';
    public const TRANSACTION_ENTITY_ORDER = 'ORDER';

    public const PRODUCT_ID = 'productId';
    public const PRODUCT_SKU = 'productSku';
    public const PRODUCT_NAME = 'productName';
    public const PRODUCT_PRICE = 'productPrice';
    public const PRODUCT_PRICE_EXCLUDING_TAX = 'productPriceExcludingTax';
    public const PRODUCT_TAX = 'productTax';
    public const PRODUCT_TAX_RATE = 'productTaxRate';

    public const TRANSACTION_PRODUCT_ID = 'id';
    public const TRANSACTION_PRODUCT_SKU = 'sku';
    public const TRANSACTION_PRODUCT_NAME = 'name';
    public const TRANSACTION_PRODUCT_PRICE = 'price';
    public const TRANSACTION_PRODUCT_PRICE_EXCLUDING_TAX = 'priceexcludingtax';
    public const TRANSACTION_PRODUCT_TAX = 'tax';
    public const TRANSACTION_PRODUCT_TAX_RATE = 'taxrate';
    public const TRANSACTION_PRODUCT_QUANTITY = 'quantity';

    public const CATEGORY_ID = 'categoryId';
    public const CATEGORY_NAME = 'categoryName';
    public const CATEGORY_SIZE = 'categorySize';
    public const CATEGORY_PRODUCTS = 'categoryProducts';

    public const PRODUCTS = 'products';

    public const TRANSACTION_ENTITY = 'transactionEntity';
    public const TRANSACTION_ID = 'transactionId';
    public const TRANSACTION_DATE = 'transactionDate';
    public const TRANSACTION_AFFILIATION = 'transactionAffiliation';
    public const TRANSACTION_TOTAL = 'transactionTotal';
    public const TRANSACTION_WITHOUT_SHIPPING_AMOUNT = 'transactionTotalWithoutShippingAmount';
    public const TRANSACTION_SUBTOTAL = 'transactionSubtotal';
    public const TRANSACTION_TAX = 'transactionTax';
    public const TRANSACTION_SHIPPING = 'transactionShipping';
    public const TRANSACTION_PAYMENT = 'transactionPayment';
    public const TRANSACTION_CURRENCY = 'transactionCurrency';
    public const TRANSACTION_PRODUCTS = 'transactionProducts';
    public const TRANSACTION_PRODUCTS_SKUS = 'transactionProductsSkus';

    public const CUSTOMER_EMAIL = 'customerEmail';
}
