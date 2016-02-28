<?php

/**
 * Serious, legitimate Simplified Chinese locale.
 */
final class PhutilSimplifiedChineseLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'zh_CN';
  }

  public function getLocaleName() {
    return pht('简体中文');
  }

  public function getFallbackLocaleCode() {
    return 'en_US';
  }

}
