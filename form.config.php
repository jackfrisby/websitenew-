<?php namespace JF;
/**

Copyright 2017 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-a40f61
Date:    2017-10-03 16:06:14
Version: v2.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-a40f61",
    "email": {
        "to": "gdev@frisby.online",
        "cc": "",
        "bcc": "",
        "subject": "DVA From {f1}",
        "template": "",
        "sendmail_from": "theminecraftshow10@gmail.com"
    },
    "admin": {
        "users": "admin:cc944",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "http:\/\/192.168.1.123\/sb\/dvc",
        "message": "Thanks {f1}",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "smtp",
    "smtp": {
        "host": "smtp.gmail.com",
        "user": "theminecraftshow10@gmail.com",
        "password": "Yogscast1",
        "port": "465",
        "security": "ssl"
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "green"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Roleplay Username",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "John Doe",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Roblox Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "fa fa-fax"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f4",
            "cid": "c27"
        },
        {
            "label": "Discord Name",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "fa fa-laptop"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f5",
            "cid": "c32"
        },
        {
            "label": "Do You Own Any Cars Currently?",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": true
                    },
                    {
                        "label": "Yes",
                        "checked": false,
                        "value": "Y"
                    },
                    {
                        "label": "No",
                        "checked": false,
                        "value": "N"
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f6",
            "cid": "c37"
        },
        {
            "label": "Are You Employed",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": [

                ],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f10",
            "cid": "c59"
        },
        {
            "label": "Criminal Convictions - Do You Have Any?",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [

                    ],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "rightIcon": "",
                    "leftIcon": "fa fa-male"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f11",
            "cid": "c64"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "Send My Application",
                "icon": "glyphicon glyphicon-ok",
                "checkRequiredFields": "All Fields Are Required"
            },
            "id": "f0",
            "cid": "c0"
        }
    ]
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class