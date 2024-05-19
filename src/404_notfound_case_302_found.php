<?php
// redirects to URLs that will be updated periodically
// e.g. short URLs and annual events
switch ($path) {
	// case statement values MUST be lowercase
	// short URLs that were never actual pages
	case 'cloud/meet-expert':
	found('https://calendly.com/d/3rv-c72-j4q/cloud-security-workshop');
	break;
	case 'blackhat-1':
	found('https://www.qualys.com/apps/totalcloud/?utm_source=qrcode1&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-2':
	found('https://www.qualys.com/2023/totalcloud-security-insights?utm_source=qrcode2&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-3':
	found('https://www.qualys.com/2023/black-hat-usa/?utm_source=qrcode3&utm_medium=zoom&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-4':
	found('https://www.qualys.com/forms/easm-report/?utm_source=qrcode4&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-5':
	found('https://www.qualys.com/2023/totalcloud-security-insights?utm_source=qrcode5&utm_medium=booth&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-6':
	found('https://www.qualys.com/forms/easm-report/?utm_source=qrcode6&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-7':
	found('https://www.qualys.com/forms/easm-report/?utm_source=qrcode7&utm_medium=booth&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-8':
	found('https://www.qualys.com/2023/totalcloud-security-insights?utm_source=qrcode8&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'blackhat-9':
	found('https://www.qualys.com/forms/easm-report/?utm_source=qrcode9&utm_medium=signage&utm_campaign=na-event-blackhat-august2023&leadsource=344573357');
	break;
	case 'crs':
	case 'cyber-risk-summit':
	case 'cyber-risk-series':
	found('https://qualys.brighttalk.com/');
	break;
	case 'tru':
	found('https://blog.qualys.com/vulnerabilities-threat-research');
	break;
	case 'qsc22-las-vegas-register':
	found('/qsc/2022/las-vegas/register/');
	break;
	case 'conferences':
	found('/forms/vmdr/');
	break;
	case 'email-banner':
	found('/qsc/2022/las-vegas/');
	break;
	case 'platform-banner':
	found('https://blog.qualys.com/product-tech/2024/03/07/qualys-updates-login-page-to-improve-user-experience-and-highlight-latest-qualys-news');
	break;
	case 'gift':
	found('https://qualys.orderpromos.com/');
	break;
	case 'edr-live':
	found('https://www.brighttalk.com/webcast/11673/427089');
	break;
	case 'remote-endpoint-blog':
	found('https://blog.qualys.com/technology/2020/03/24/secure-your-global-remote-workforce');
	break;
	case 'docs/whitepapers/qualys-guide-automating-cis-20-critical-controls.pdf':
	found('/docs/qualys-guide-automating-cis-20-critical-controls.pdf');
	break;
	case 'vmdrlive':
	found('/2020/vmdr-live/');
	break;
	case 'vmdr':
	case 'subscriptions/vmdr':
	found('/apps/vulnerability-management-detection-response/');
	break;
	case 'qradar':
	found('/forms/qradar/');
	break;
	case 'asset-inventory':
	found('/lp/it-asset-inventory/');
	break;
	case 'meetup':
	found('/2019/meet-team/');
	break;
	case 'investor-track-agenda':
	found('/2018/qsc/investor/');
	break;
	case 'qsc18-las-vegas-post-event-videos':
	found('/2018/qsc/las-vegas/videos/');
	break;
	case 'investor-track':
	found('/emails/2018/qsc/register/las-vegas/investor-track/');
	break;
	case 'ignite':
	found('2018/ignite');
	break;
	case 'reinvent':
	found('/2018/reinvent');
	break;
	case 'picnic':
	found('https://docs.google.com/forms/d/e/1FAIpQLSeiLjaJcPt4mQZQ06cSAH6Psge43uZxWJz5-MrpPDPGgMUTZA/viewform');
	break;
	case 'was-burp':
	found('https://blog.qualys.com/webappsec/2019/10/21/new-improved-qualys-was-burp-extension-now-available');
	break;
	case 'forms/whitepapers/devsecops-securing-software-pipeline-enabling-digital-transformation':
	found('/solutions/devsecops/');
	break;
	case 'qsc-cirque':
	case 'qsc-dinner':
	found('/2018/qsc/las-vegas/cirque-du-soleil/');
	break;
	case 'qsc-agenda':
	found('/qsc/2020/san-francisco/#agenda');
	break;
	case 'qsc19-training':
	found('/qsc/2019/las-vegas/#training');
	break;
	case 'qsc-las-vegas':
	found('/qsc/2019/las-vegas/');
	break;
	case 'qsc-london':
	found('/qsc/2023/london/');
	break;
	case 'qsc-munich':
	found('/qsc/2020/munich/');
	break;
	case 'qsc-paris':
	found('/qsc/2020/paris/');
	break;
	case 'qsc-register-london':
	found('/qsc/register/#london');
	break;
	case 'qsc-register-munich':
	found('/qsc/register/#munich');
	break;
	case 'qsc-register-paris':
	found('/qsc/register/#paris');
	break;
	case 'qsc-register-berlin':
	case 'qsc-register':
	case 'qsc/register':
	case 'company/events/tradeshows/2016/qsc/munich':
	case 'company/events/tradeshows/2016/qsc/london':
	case 'company/events/tradeshows/2016/qsc/paris':
	found('/qsc/register/');
	break;
	case 'qsc2021':
	found('/qsc/2021/las-vegas/');
	break;
	case 'beta-signup':
	found('/free-trial/');
	break;
	case 'company/events':
	found('/');
	break;
	case 'assessrisk':
	found('https://lps.qualys.com/SAQ.html');
	break;
	case 'gdpr':
	found('/lp/2018/gdpr/');
	break;
	case 'login':
	found('https://community.qualys.com/docs/DOC-4172-identify-your-qualys-platform');
	break;
	case 'market-leader':
	found('/docs/qualys-frost-sullivan-2017-global-vulnerability-management-market-leadership-award.pdf');
	break;
	case 'oneclick':
	found('https://lps.qualys.com/OneClick.html');
	break;
	case '2017securitytrends':
	found('/forms/whitepapers/sans-cyber-security-trends-increase-security-2017/?utm_source=content-marketing&utm_medium=infographic&utm_campaign=demand-gen&utm_term=sans-trends-q1-2017&utm_content=whitepaper&leadsource=344554012');
	break;
	case 'struts':
	found('/forms/trials/suite/');
	break;
	case 'threatprotect':
	case 'tp':
	found('/suite/threatprotect/');
	break;
	case 'trial':
	case 'trial-enterprise':
	found('/forms/trials/qualysguard/enterprise/');
	break;
	case 'trial-express':
	found('/forms/trials/qualysguard/express/');
	break;
	case 'trial-lite':
	found('/forms/trials/qualysguard/lite/');
	break;
	case 'assetview':
	case 'av':
	case 'free-tools-trials/assetview':
	found('/suite/assetview/');
	break;
	case 'vm-dummies':
	found('/forms/ebook/vulnerability_management_dummies/?utm_source=press&utm_medium=press-release&utm_campaign=awareness&utm_term=vm&utm_content=dummies&leadsource=26158083');
	break;
	case 'cloudagent':
	found('/forms/trials/cloud-agent/');
	break;
	case 'agents':
	found('/cloud-agent/');
	break;
	case 'sd':
	found('/docs/service-description.pdf');
	break;
	case 'sla':
	found('/docs/service-level-agreement.pdf');
	break;
	case 'free':
	case 'freesecurity':
	case 'freesecurityeu':
	case 'forms/trials/vulnerability_management_110207':
	found('/free-tools-trials/');
	break;
	case 'party':
	found('https://docs.google.com/forms/d/e/1FAIpQLSewuvkgcotS4r6aezYVf4fWSlXFkk9NOU68U4VBI9A_N2MyFQ/viewform');
	break;
	case 'advocate':
	found('https://docs.google.com/forms/d/18Opge4yX6suXKevmfekm6zVhmNOBXmt5Rbu8Cobm174/viewform');
	break;
	case 'splunk-app-blog':
	found('https://community.qualys.com/blogs/qualys-tech/2015/10/07/new-qualys-app-for-splunk-enterprise');
	break;
	case 'servicenow-signup':
	found('/partners/solution-technology/#/partner/servicenow');
	break;
	case 'servicenow-blog':
	found('https://blog.qualys.com/technology/2016/02/29/new-certified-qualys-app-for-servicenow-cmdb');
	break;
	// annual events
	case 'qsc-survey':
	found('https://docs.google.com/forms/d/e/1FAIpQLSf4Gdi421NSfyiA4gGswv8KwLx0vbXwfaGFpucWRqX0DXW_DQ/viewform');
	break;
	case 'qsc-dubai':
	case 'qsc-mumbai':
	found('/qsc/get-notified/');
	break;
	case 'qsc-dubai-community':
	found('https://community.qualys.com/groups/qsc18-dubai');
	break;
	case 'qsc-mumbai-community':
	found('https://community.qualys.com/groups/qsc18-mumbai');
	break;
	case 'qsc-community':
	found('https://discussions.qualys.com/groups/qsc19');
	break;
	case 'qsc-community-munich':
	found('https://community.qualys.com/groups/qsc16-munich');
	break;
	case 'qsc-dinner-munich':
	found('https://lps.qualys.com/qsc-dinner-munich.html');
	break;
	case 'qsc-feedback':
	found('https://docs.google.com/a/qualys.com/forms/d/15Ygq9DQR3zqo4AA3VIqy3Z2mBpkdPcFfE7ymchd5unY/viewform');
	break;
	case 'rsa':
	case 'rsac':
	case 'qscsf':
	found('/qsc/2020/san-francisco/');
	break;
	case 'see-search-secure':
	found('/lp/see-search/?leadsource=33231538');
	break;
	case 'rsac-reception':
	found('/2019/rsac/reception/');
	break;
	case 'bh':
	case 'blackhat':
	case 'blackhat-booth':
	case '2016/blackhat':
	case '2017/blackhat':
	case '2018/blackhat':
	case '2019/blackhat':
	case 'bh':
	found('/2023/black-hat-usa/');
	break;
	case 'blackhat-reception':
	case 'blackhatparty':
	found('/emails/2017/blackhat/reception/');
	break;
	case 'infosec':
	case 'infosecurity':
	case 'company/events/tradeshows/2012/infosec':
	case 'company/events/tradeshows/2013/infosec':
	case 'company/events/tradeshows/2014/infosec':
	case 'company/events/tradeshows/2015/infosec':
	case '2017/infosec':
	case '2018/infosec':
	found('/2019/infosec/');
	break;
	case 'qsc-community-berlin':
	found('/2018/qsc/berlin/#agenda');
	break;
	case 'qsc-community-london':
	found('/2018/qsc/london/#agenda');
	break;
	case 'qsc-community-paris':
	found('/2018/qsc/paris/#agenda');
	break;
	// temporarily retired the fr and german version of top-4
	// demand-gen team wants to bring them back later, 2016-04-07
	// if/when brought back, please update URLs to include language code
	case 'forms/quatre-controles-securite-majeurs':
	found('/forms/top-4-security-controls/');
	break;
	case 'forms/top-4-sicherheitskontrollen':
	found('/forms/top-4-security-controls/');
	break;
	case 'partners/solution-technology':
	case 'partners/solution-technology/symantec':
	found('/partners/integration/');
	break;
	// TODO move the remainder of the short URLs in 301 Moved Permanently section into the 302 Found section and use found() instead
}

?>