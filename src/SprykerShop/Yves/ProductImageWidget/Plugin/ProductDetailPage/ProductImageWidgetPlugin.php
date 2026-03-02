<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductImageWidget\Plugin\ProductDetailPage;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductDetailPage\Dependency\Plugin\ProductImageWidget\ProductImageWidgetPluginInterface;

/**
 * @deprecated Use molecule('simple-carousel') instead.
 */
class ProductImageWidgetPlugin extends AbstractWidgetPlugin implements ProductImageWidgetPluginInterface
{
    public function initialize(ProductViewTransfer $productViewTransfer): void
    {
        $this->addParameter('product', $productViewTransfer);
    }

    public static function getName(): string
    {
        return static::NAME;
    }

    public static function getTemplate(): string
    {
        return '@ProductImageWidget/views/image-slider/image-slider.twig';
    }
}
