<?php
//Configure::write('Intuit.simplesaml_path',  'PLEASE FILL IN'); // SIMPLESAML_PATH
//Configure::write('Intuit.simpleoauth_path',  'PLEASE FILL IN'); // SIMPLEOAUTH_PATH

Configure::write('Intuit.oauth_consumer_key', 'qyprdfN2sDxv9D7Yi32pW6UUy9Fz5W'); // OAUTH_CONSUMER_KEY
Configure::write('Intuit.oauth_shared_secret', 'vTIzpYhWihBYDHSm1uBFPBssHMk01tz3sEsMX0cI'); // OAUTH_SHARED_SECRET

Configure::write('Intuit.saml_identity_provider_id', 'zerobound.171356.cc.dev-intuit.ipp.prod'); // SAML_IDENTITY_PROVIDER_ID
Configure::write('Intuit.saml_x509_cert_path', 'PLEASE FILL IN'); // SAML_X509_CERT_PATH
Configure::write('Intuit.saml_x509_private_key_path', 'PLEASE FILL IN'); // SAML_X509_PRIVATE_KEY_PATH
Configure::write('Intuit.saml_name_id', 'PLEASE FILL IN');  // SAML_NAME_ID Up to you; just "keep track" of what you use

Configure::write('Intuit.oauth_saml_url', 'https://oauth.intuit.com/oauth/v1/get_access_token_by_saml');
Configure::write('Intuit.financial_feed_post', 'financialdatafeed.platform.intuit.com');
Configure::write('Intuit.financial_feed_url', 'https://financialdatafeed.platform.intuit.com/');

App::import('Vendor', 'Intuit.Simplesamlphp/lib/xmlseclibs.php');
App::import('Vendor', 'Intuit.Simplesamlphp/lib/SimpleSAML/Utilities.php');
//require_once(SIMPLEOAUTH_PATH . "/OAuthSimple.php");

