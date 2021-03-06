<?php defined('MW_PATH') || exit('No direct script access allowed');

/**
 * HTMLPurifier_URIFilter_HostCustomFieldTagPost
 *
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com>
 * @link https://www.mailwizz.com/
 * @copyright 2013-2018 MailWizz EMA (https://www.mailwizz.com)
 * @license https://www.mailwizz.com/license/
 * @since 1.3.6.1
 */

class HTMLPurifier_URIFilter_HostCustomFieldTagPost extends HTMLPurifier_URIFilter
{
    public $name = 'HostCustomFieldTagPost';

    public $post = true;

    public function filter(&$uri, $config, $context)
    {
        return true;
    }
}