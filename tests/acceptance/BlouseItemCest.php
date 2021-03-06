<?php

class BlouseItemCest
{
    /**
     * Проверить наличие товара Blouse и открытие модального окна с этим товаром
     */
  
    // tests
    public function Blouse(AcceptanceTester $I)
    {
        $BlouseItemInPageCSS = '#homefeatured > li:nth-child(2) h5';
        $BlouseItemInPageXPath = '//ul[@id="homefeatured"]/li[2]//h5';
        $QuickViewButtonCSS = '#homefeatured > li:nth-child(2) a.quick-view > span';
        $QuickViewButtonXPath = '//ul[@id="homefeatured"]/li[2]//a[@class="quick-view"]/span';
        $ItemFrameCSS = '.fancybox-wrap'; 
        $ItemFrameXPath = '//div[contains(@class,"fancybox-wrap")]';
        $BlouseTextInFrameCSS = '#product h1';
        $BlouseTextInFramXPath = '//h1';
        
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->waitForElementVisible($QuickViewButtonCSS);
        $I->click($QuickViewButtonXPath);
        $I->waitForElement('.fancybox-wrap');
        $I->switchToIFrame(".fancybox-iframe");
    }
}
