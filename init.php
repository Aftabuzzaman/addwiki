<?php

/**
 * This file is main route into the framework
 * @author Addshore
 **/

//Set the include path
$IP = dirname(__FILE__) . '/';

//Include all files in /includes
include $IP . 'includes/Globals.php';
include $IP . 'includes/General.php';
include $IP . 'includes/Registry.php';
include $IP . 'includes/Http.php';
include $IP . 'includes/Family.php';
include $IP . 'includes/Site.php';
include $IP . 'includes/ApiResult.php';
include $IP . 'includes/SiteFactory.php';
include $IP . 'includes/User.php';
include $IP . 'includes/UserLogin.php';
include $IP . 'includes/Page.php';
include $IP . 'includes/Category.php';
include $IP . 'includes/Entity.php';
include $IP . 'includes/Mysql.php';
include $IP . 'includes/WikitextParser.php';

Globals::$Sites = new SiteFactory();

Globals::$regex['langs'] = '(nostalgia|ten|aa|ab|ace|af|ak|als|am|an|ang|ar|arc|arz|as|ast|av|ay|az|ba|bar|'.
			'bat-smg|bcl|be|be-x-old|bg|bh|bi|bjn|bm|bn|bo|bpy|br|bs|bug|bxr|ca|cbk-zam|cdo|ce|ceb|ch|cho|chr|chy|ckb|'.
			'co|cr|crh|cs|csb|cu|cv|cy|da|de|diq|dsb|dv|dz|ee|el|eml|en|eo|es|et|eu|ext|fa|ff|fi|fiu-vro|fj|fo|fr|frp|frr'.
			'|fur|fy|ga|gag|gan|gd|gl|glk|gn|got|gu|gv|ha|hak|haw|he|hi|hif|ho|hr|hsb|ht|hu|hy|hz|ia|id|ie|ig|ii|ik|ilo|'.
			'io|is|it|iu|ja|jbo|jv|ka|kaa|kab|kbd|kg|ki|kj|kk|kl|km|kn|ko|koi|kr|krc|ks|ksh|ku|kv|kw|ky|la|lad|lb|lbe|lez'.
			'|lg|li|lij|lmo|ln|lo|lt|ltg|lv|map-bms|mdf|mg|mh|mhr|mi|min|mk|ml|mn|mo|mr|mrj|ms|mt|mus|mwl|my|myv|mzn|na|nah'.
			'|nap|nds|nds-nl|ne|new|ng|nl|nn|no|nov|nrm|nso|nv|ny|oc|om|or|os|pa|pag|pam|pap|pcd|pdc|pfl|pi|pih|pl|pms|pnb'.
			'|pnt|ps|pt|qu|rm|rmy|rn|ro|roa-rup|roa-tara|ru|rue|rw|sa|sah|sc|scn|sco|sd|se|sg|sh|si|simple|sk|sl|sm|sn|so|'.
			'sq|sr|srn|ss|st|stq|su|sv|sw|szl|ta|te|tet|tg|th|ti|tk|tl|tn|to|tpi|tr|ts|tt|tum|tw|ty|udm|ug|uk|ur|ve|vec|vep'.
			'|vi|vls|vo|wa|war|wo|wuu|xal|xh|xmf|yi|yo|za|zea|zh|zh-classical|zh-min-nan|zh-yue|zu)';
Globals::$regex['sites'] = '(wikipedia|wiki|wikivoyage)';
