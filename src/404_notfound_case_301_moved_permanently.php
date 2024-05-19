<?php
// redirects from old pages to new pages should return 301 Moved Permanently
// e.g. pages that moved permanently and short URLs that never change
switch ($path) {
	// case statement values MUST be lowercase
	case 'csam-3.0-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2024/05/06/introducing-cybersecurity-asset-management-3-0-with-expanded-discovery-and-cyber-risk-assessment');
	break;
	case 'csam-3.0-video':
	moved_permanently('https://vimeo.com/943062506');
	break;
	case 'mssp-portal-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2024/05/02/qualys-launches-mssp-portal-to-empower-managed-security-service-providers');
	break;
	case 'ncsc-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2024/04/16/how-qualys-supports-the-national-cyber-security-centre-ncscs-vulnerability-management-guidance');
	break;
	case 'training/library/qgs-training':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=qgs');
	break;
	case 'training/library/continuous-monitoring':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=continuous-monitoring');
	break;
	case 'training/library/qualys-api-fundamentals':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=qualys-api-fundamentals');
	break;
	case 'training/library/certview':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=certview');
	break;
	case 'training/library/qualys-flow-qflow':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=qflow');
	break;
	case 'training/library/container-security-deployment-scenarios':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=containersecurity');
	break;
	case 'training/library/vmdr-onboarding':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=vmdr');
	break;
	case 'training/library/how-to-administration':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=administration');
	break;
	case 'training/library/administration':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=administration');
	break;
	case 'training/library/policy-compliance':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=pc');
	break;
	case 'training/library/advanced-policy-compliance':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=pc');
	break;
	case 'training/library/qualys-query-language':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=qql');
	break;
	case 'training/library/qualys-subscription-health':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=subscription-health');
	break;
	case 'training/library/pci-compliance':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=pci');
	break;
	case 'training/library/fim':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=fim');
	break;
	case 'training/library/security-assessment-questionnaire':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=saq');
	break;
	case 'training/library/edr-onboarding':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=how-to-edr');
	break;
	case 'training/library/troubleshooting-scanner-appliance-error-codes':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=scanner-appliance');
	break;
	case 'training/library/how-to-scanning':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=scanning-strategies');
	break;
	case 'training/library/scanning-strategies':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=scanning-strategies');
	break;
	case 'training/library/network-passive-sensor':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=network-passive-sensor');
	break;
	case 'training/library/qualys-scanner-appliance':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=scanner-appliance');
	break;
	case 'training/library/reporting-strategies':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=reporting-strategies');
	break;
	case 'training/library/widget-tutorials':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=reporting-strategies');
	break;
	case 'qscanner/download/v4.0.0/download_qscanner.sh':
	moved_permanently('https://cask.qg1.apps.qualys.com/cs/p/9ltAqa53U4TguJfoqTiiliPUXMxbSNoApzcuGS-iBPUAHsF-L8411CxUv6wv3q1z/n/qualysincgov/b/us01-cask-artifacts/o/cs/qscanner/download_qscanner.sh');
	break;
	case 'qscanner/download/v2.0.0/download_qscanner.sh':
	moved_permanently('https://cask.qg1.apps.qualys.com/cs/p/mQwqy8QGqdl_cwdeZGHOf_6d2Ef2Yj3whJbHN0lfLtQe4Ig0D0RDAM2Qz4zGUaKe/n/qualysincgov/b/gen_cask_artifacts/o/CS/qscanner/QSCANNER-2.0.0-19/download_qscanner.sh');
	break;
	case 'cve-2023-4911-advisory':
	moved_permanently('/2023/10/03/cve-2023-4911/looney-tunables-local-privilege-escalation-glibc-ld-so.txt');
	break;
	case 'apps/vulnerability-management-detection-response/trurisk':
	moved_permanently('/subscriptions/smb/');
	break;
	case 'totalcloud-2-demo':
	moved_permanently('/2024/totalcloud-with-trurisk-insights/');
	break;
	case 'totalcloud-2-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2024/02/07/announcing-totalcloud-2-0-with-trurisk-insights-the-future-of-cloud-and-saas-security');
	break;
	case 'totalcloud-2-video':
	moved_permanently('https://vimeo.com/908849797/694513aaef?share=copy');
	break;
	case 'totalcloud-2-video-deep-dive':
	moved_permanently('https://vimeo.com/910246522/64b4fec742?share=copy');
	break;
	case '2024/01/30/syslog':
	moved_permanently('/2024/01/30/cve-2023-6246/syslog.txt');
	break;
	case '2024/01/30/syslog':
	moved_permanently('/2024/01/30/cve-2023-6246/syslog.txt');
	break;
	case '2024/01/30/qsort':
	moved_permanently('/2024/01/30/qsort.txt');
	break;
	case 'training/library/how-to-totalcloud':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=how-to-totalcloud');
	break;
	case '2023-threat-landscape-blog':
	moved_permanently('https://blog.qualys.com/vulnerabilities-threat-research/2023/12/19/2023-threat-landscape-year-in-review-part-one');
	break;
	case 'find-out-your-ransomware-risk-blog':
	moved_permanently('https://blog.qualys.com/qualys-insights/2023/12/12/an-easy-and-effective-strategy-to-shield-your-business-from-ransomware');
	break;
	case 'docs/qualys-scanner-using-broxy.pdf':
	moved_permanently('/docs/qualys-virtual-scanner-appliance-user-guide.pdf');
	break;
	case 'forms/whitepapers/idc-report-attack-surface-management':
 	moved_permanently('/forms/whitepapers/transform-cybersecurity-from-cost-center-to-business-driver/');
 	break;
	case 'qsc23-americas-livestream':
 	moved_permanently('https://qualys.registration.goldcast.io/events/a5afc16b-4d93-4926-93a8-ecde44615235');
 	break;
	case 'idc-business-value-report':
 	moved_permanently('/');
 	break;
	case 'docs/qualys-cloud-agent-datasheet-230118.pdf':
 	moved_permanently('/docs/qualys-cloud-agent-datasheet.pdf');
 	break;
	case 'forms/whitepapers/gartner-predicts-2022-consolidated-security-platforms-are-the-future':
	case 'forms/whitepapers/implement-risk-based-vulnerability-management-methodology':
	case 'forms/whitepapers/qualys-leads-vulnerability-management-gigaom-radar-continuous':
 	moved_permanently('/resources/');
 	break;
	case 'documentation/jp/qualys_vmdr_2.0_platform_japanese_sept_2023.pdf':
 	moved_permanently('/documentation/jp/qualys-vmdr-v2.0-platform_japanese.pdf');
 	break;
	case 'cve-2023-4911-advisory':
 	moved_permanently('/2023/10/03/cve-2023-4911/looney-tunables-local-privilege-escalation-glibc-ld-so.txt');
 	break;
 	case 'cve-2023-4911':
 	moved_permanently('https://blog.qualys.com/vulnerabilities-threat-research/2023/10/03/cve-2023-4911-looney-tunables-local-privilege-escalation-in-the-glibcs-ld-so');
	case 'docs/qualys-itsm-user-guide.pdf':
	moved_permanently('/docs/qualys-vmdr-servicenow-user-guide.pdf');
	break;
	case 'on-demand':
	moved_permanently('/stream/');
	break;
	case 'docs/qualys-edr-api-user-guide.pdf':
	moved_permanently('https://docs.qualys.com/en/edr/api/#t=getting_started%2Fgetting_started.htm');
	break;
	case 'esg':
	moved_permanently('/company/esg/');
	break;
	case 'reg-qsc':
	moved_permanently('https://reg.rainfocus.com/flow/qualys/qscorlando23/attendeeportal/page/prereg');
	break;
	case 'qsc/call-for-papers':
	moved_permanently('/qsc/call-for-speakers/');
	break;
	case 'webinars':
	moved_permanently('https://www.brighttalk.com/channel/11673/');
	break;
	case 'first-party-app-blog':
	moved_permanently('https://blog.qualys.com/misc/2023/08/03/qualys-expands-cloud-platform-for-first-party-application-risk-detection-and-remediation');
	break;
	case 'first-party-app-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-announces-first-party-software-risk-management-solution/');
	break;
	case 'first-party-app-webinar':
	moved_permanently('https://www.brighttalk.com/webcast/20119/591727?bt_tok={{lead.Id}}&utm_source=website&utm_medium=pressreleases&utm_campaign=global-eventvirtual-firstpartywebinar-6Sep2023');
	break;
	case 'totalcloud-security-insights':
	case 'get/totalcloud-insights':
	moved_permanently('https://www.qualys.com/2023/totalcloud-security-insights/');
	break;
	case 'totalcloud-security-insights-blog-1':
	moved_permanently('https://blog.qualys.com/vulnerabilities-threat-research/2023/08/01/risk-fact-1-cloud-misconfigurations-enable-exploitation-by-attackers');
	break;
	case 'totalcloud-security-insights-blog-2':
	moved_permanently('https://blog.qualys.com');
	break;
	case 'totalcloud-security-insights-blog-3':
	moved_permanently('https://blog.qualys.com');
	break;
	case 'totalcloud-security-insights-blog-4':
	moved_permanently('https://blog.qualys.com');
	break;
	case 'totalcloud-security-insights-blog-5':
	moved_permanently('https://blog.qualys.com');
	break;
	case 'docs/qualys-certview-api-user-guide.pdf':
	moved_permanently('https://docs.qualys.com/en/certview/api/certview_api/ch01/get_started.htm');
	break;
	case '2023/07/virtual-summit/register':
	moved_permanently('2023/07/virtual-summit/#register');
	break;
	case 'renderdoc-blog':
	moved_permanently('https://blog.qualys.com/vulnerabilities-threat-research/2023/06/06/behind-the-screen-three-vulnerabilities-in-renderdoc');
	break;
	case 'apps/cloud-inventory':
	case 'apps/cloud-security-assessment':
	moved_permanently('/apps/cloud-security-posture-management/');
	break;
	case 'apps/extended-detection-response':
	moved_permanently('/apps/endpoint-detection-response/');
	break;
	case 'forms/extended-detection-response':
	moved_permanently('/forms/endpoint-detection-response/');
	break;
	case 'docs/qualys-logo-guidelines.pdf':
	case 'brand-guidelines':
	case 'docs/partners/qualys_brand_guidelines.pdf':
	moved_permanently('https://assets.qualys.com/web/56a928c045047ac/qualys-brand-guidelines/');
	break;
	case 'q1-2023-earnings-release':
	moved_permanently('/company/newsroom/news-releases/usa/2023-05-04-qualys-announces-first-quarter-2023-financial-results/');
	break;
	case 'docs/qualys-container-security-api-guide.pdf':
	moved_permanently('https://docs.qualys.com/en/cs/api/#t=get_started%2Fget_started.htm');
	break;
	case 'docs/qualys-container-runtime-security-api-guide.pdf':
	moved_permanently('https://docs.qualys.com/en/cs/crs-api/#t=Get_Started%2Fget_started.htm');
	break;
	case 'docs/qualys-patch-management-api-user-guide.pdf':
	moved_permanently('https://docs.qualys.com/en/pm/api/#t=get_started%2Fget_started.htm');
	break;
	case 'docs/qualys-sem-enrollment-guide.pdf':
	moved_permanently('/docs/qualys-vmdr-mobile-enrollment-guide.pdf');
	break;
	case 'ondemand':
	moved_permanently('/on-demand/');
	break;
	case '2023/04/virtual-summit/register':
	moved_permanently('https://thedemoforum.com/page/qualys-event-page/register.html');
	break;
	case 'ca-windows-mac-blog':
	moved_permanently('https://blog.qualys.com');
	break;
	case 'run-for-cyber':
	moved_permanently('https://cdn2.qualys.com/docs/qualys-cyber-security-and-importance.pdf');
	break;
	case '2023-trurisk-research-report-pdf':
	moved_permanently('/docs/qualys-2023-trurisk-threat-research-report.pdf');
	break;
	case '2023-trurisk-research-report':
	moved_permanently('/forms/tru-report/');
	break;
	case 'forms/tru-report':
	case 'get/tru-report':
	case 'rsa-2023-happy-hour':
	moved_permanently('/forms/tru-research-report/');
	break;
	case '2023-trurisk-webinar':
	moved_permanently('https://event.on24.com/eventRegistration/EventLobbyServlet?target=reg20.jsp&eventid=4145691&sessionid=1&key=675ED741F4B87B8DE20455D615B3E415&groupId=4588307&sourcepage=register');
	break;
	case '2023-trurisk-blog1':
	moved_permanently('https://blog.qualys.com/vulnerabilities-threat-research/2023/03/28/risk-fact-1-speed-is-the-key-to-out-maneuvering-adversaries');
	break;
	case 'try/cdr':
	moved_permanently('/forms/cloud-detection-response/');
	break;
	case 'cdr':
	moved_permanently('/apps/cloud-detection-response/');
	break;
	case 'docs/qualys-vmdr-trurisk-solution-brief.pdf':
	moved_permanently('/docs/qualys-vmdr-trurisk-datasheet.pdf');
	break;
	case 'vmdr-trurisk':
	moved_permanently('/apps/vulnerability-management-detection-response/trurisk/');
	break;
	case 'etm-preview':
	moved_permanently('/beta-signup/enterprise-trurisk-management/');
	break;
	case 'etm-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2023/02/08/introducing-enterprise-trurisk-management-from-qualys');
	break;
	case 'cloud-threat-db-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2023/02/08/introducing-qualys-ml-based-threat-intelligence');
	break;
	case 'etm-video':
	moved_permanently('https://vimeo.com/796228415/c995aedcb3');
	break;
	case 'vmdr-trurisk-smb-video':
	moved_permanently('https://vimeo.com/795024646');
	break;
	case 'trurisk-smb-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-expands-trurisk-platform-for-both-large-enterprises-and-smbs/');
	break;
	case 'fedramp-high-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2023/01/31/why-fedramp-high-authorization-can-ensure-high-cybersecurity-maturity');
	break;
	case 'blue-hexagon-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-acquires-blue-hexagons-ai-machine-learning-platform/');
	break;
	case 'govcloud-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-introduces-govcloud-a-fedramp-high-ready-cybersecurity-platform/');
	break;
	case 'docs/qualys-cloud-agent-brief.pdf':
	case 'docs/qualys-cloud-agent-brief-pt.pdf':
	moved_permanently('/docs/qualys-cloud-agent-datasheet-230118.pdf');
	break;
	case 'cdr.trial':
	case 'cdr-trial':
	moved_permanently('https://bluehexagon.ai/cloud-security-free-trial-lp/');
	break;
	case 'totalcloud':
	moved_permanently('/apps/totalcloud/');
	break;
	case 'totalcloud-trial':
	moved_permanently('/forms/totalcloud/');
	break;
	case 'totalcloud-video':
	moved_permanently('https://vimeo.com/765771406');
	break;
	case 'totalcloud-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/11/01/introducing-totalcloud-cloud-security-simplified/');
	break;
	case 'totalcloud-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-introduces-totalcloud-with-flexscan-delivering-cloud-native-vmdr/');
	break;
	case 'totalcloud-live':
	moved_permanently('https://event.on24.com/wcc/r/3995533/674DD94F56FED3158045E81452450299');
	break;
	case 'forms/qsc-mumbai-response':
	case 'qualys-dsci-pov':
	moved_permanently('/forms/qualys-dsci-pov/');
	break;
	case 'docs/qualys-vmdr-ot-v220801.pdf':
	moved_permanently('/docs/qualys-vmdr-ot-solution-brief.pdf');
	break;
	case '2022-sc-awards-gigaom-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/08/19/qualys-vmdr-recognized-as-best-vm-solution-by-sc-awards-2022--leader-by-gigaom');
	break;
	case 'cloud-agent-linux':
	moved_permanently('https://blog.qualys.com/product-tech/2022/08/15/qualys-security-updates-cloud-agent-for-linux');
	break;
	case 'was-video':
	case 'web-application-scanning-video':
	case 'web-app-scanning-video':
	moved_permanently('/apps/web-app-scanning/#video');
	break;
	case 'csam-easm-pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-launches-external-attack-surface-management-easm/');
	break;
	case 'csam-easm-video':
	moved_permanently('https://vimeo.com/734877607');
	break;
	case 'csam':
	moved_permanently('/apps/cybersecurity-asset-management/');
	break;
	case 'csam-trial':
	moved_permanently('/forms/cybersecurity-asset-management/');
	break;
	case 'csam-easm-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/08/03/introducing-cybersecurity-asset-management-2-0-with-natively-integrated-external-attack-surface-management');
	break;
	case 'csam-easm-webinar':
	moved_permanently('https://event.on24.com/wcc/r/3893746/25F110029CA6A29C5BA1767C44554066');
	break;
	case 'docs/release-notes/qualys-cloud-platform-10.20.0-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-platform-10.20-release-notes.pdf');
	break;
	case 'docs/qualys-cs-registry-scanning.pdf':
	moved_permanently('/docs/qualys-container-security-user-guide.pdf');
	break;
	case 'apps/vulnerability-management':
	moved_permanently('/apps/vulnerability-management-detection-response/');
	break;
	case 'risk-based-cybersecurity-blog':
	moved_permanently('https://blog.qualys.com/qualys-insights/2022/05/31/transitioning-to-a-risk-based-approach-to-cybersecurity');
	break;
	case 'introducing-vmdr-2':
	moved_permanently('https://blog.qualys.com/product-tech/2022/06/06/introducing-qualys-vmdr-2-0');
	break;
	case 'vmdr-2-press-release':
	moved_permanently('https://www.qualys.com/company/newsroom/news-releases/usa/qualys-launches-vmdr-2-0-with-risk-prioritization-and-automated-workflows');
	break;
	case 'trurisk':
	case 'truerisk':
	moved_permanently('/trurisk/');
	break;
	case 'docs/qualys-cloud-agent-mac-install-guide_donotuse.pdf':
	moved_permanently('/docs/qualys-cloud-agent-macos-install-guide.pdf');
	break;
	case 'partners/vas':
	moved_permanently('partners/var');
	break;
	case 'partners/pci':
	moved_permanently('partners');
	break;
	case 'edr-simple-endpoint-security':
	case 'edr-2022-webinar':
	moved_permanently('https://event.on24.com/wcc/r/3722586/B79E0AD0D2C18830ED08E78C13A37F6E');
	break;
	case 'edr-2022-press-release':
	moved_permanently('https://www.qualys.com/company/newsroom/news-releases/usa/qualys-delivers-multi-vector-edr-2-0-with-enhanced-prioritization/');
	break;
	case 'edr-2022-research-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/03/31/qualys-multi-vector-edr-excels-in-2022-mitre-attck-evaluation');
	break;
	case 'edr-2022-product-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/04/04/edr-is-dead-long-live-multi-vector-edr');
	break;
	case 'cloud-agent-pam':
	moved_permanently('https://success.qualys.com/support/s/article/000006675');
	break;
	case '2021/log4shell-service/%20%E2%80%8B':
	case '2021/log4shell-service%20%E2%80%8B':
	case '2021/log4shell-service â€‹':
	case '2021/log4shell-service/ â€‹':
	moved_permanently('/2021/log4shell-service/');
	break;
	case 'log4j':
	case 'log4shell':
	moved_permanently('/log4shell-cve-2021-44228/');
	break;
	case 'was-log4j-trial':
	case 'was-log4shell-trial':
	case 'was-log4shell-help':
	moved_permanently('/forms/web-application-scanning-log4shell/');
	break;
	case 'was-log4j-webinar':
	case 'was-log4shell-webinar':
	moved_permanently('https://event.on24.com/wcc/r/3573177/2726F26194B10393EE5C52B38BB64A90');
	break;
	case 'log4j-webinar':
	moved_permanently('https://event.on24.com/wcc/r/3570113/314E6730B88B0A0A49C73CDA92CC90F5');
	break;
	case 'log4j-webinar-2':
	moved_permanently('https://event.on24.com/wcc/r/3570144/A46B9E8B90C3E2D7552C7941441609D2');
	break;
	case 'qsc21-day1-recap':
	moved_permanently('https://blog.qualys.com/qsc/2021/11/18/qsc21-day-1-recap-as-threats-intensify-qualys-helps-organizations-shore-up-security');
	break;
	case 'qsc21-day2-recap':
	moved_permanently('https://blog.qualys.com/qsc/2021/11/19/qsc-day-2-recap-innovation-makes-for-better-defense-improves-resilience');
	break;
	case 'patch-management-remediation':
	moved_permanently('https://blog.qualys.com/product-tech/2021/11/16/qualys-brings-advanced-remediation-to-augment-patch-management');
	break;
	case 'edr-holiday-video':
	moved_permanently('https://vimeo.com/443568992');
	break;
	case 'free-60-day-edr':
	moved_permanently('/2021/edr-holiday/');
	break;
	case 'docs/2021/qsc/qsc-bellagio-resort-map.pdf%20':
	moved_permanently('/docs/2021/qsc/qsc-bellagio-resort-map.pdf');
	break;
	case 'iac-security-beta':
	moved_permanently('/beta-signup/infrastructure-as-code/');
	break;
	case 'iac-blog-post':
	moved_permanently('https://blog.qualys.com/product-tech/2021/11/02/cspm-evolution-start-secure-stay-secure');
	break;
	case 'docs/qualys-patch-management-user-guide.pdf':
	moved_permanently('/docs/qualys-patch-management-getting-started-guide.pdf');
	break;
	case 'ransomware':
	case 'ransomeware':
	case 'ransomware-prevention':
	case 'ransomware-risk':
	moved_permanently('/forms/ransomware/');
	break;
	case 'patch-management-free-trial':
	moved_permanently('/forms/patch-management');
	break;
	case 'pci-playbook':
	moved_permanently('/docs/qualys-pci-dss-playbook.pdf');
	break;
	case 'compliance':
	moved_permanently('https://success.qualys.com/support/s/standards');
	break;
	case 'apps/pci-asv-compliance':
	moved_permanently('/apps/pci-compliance/');
	break;
	case 'ca-for-rhcos':
	case 'openshift':
	moved_permanently('/forms/cloud-agent-for-red-hat-coreos-openshift/');
	break;
	case 'ai':
	case 'assetview':
	case 'apps/asset-inventory':
	moved_permanently('/apps/global-assetview/');
	break;
	case 'pfc':
	moved_permanently('/2021/pfc/');
	break;
	case 'tribute':
	moved_permanently('https://www.mykeeper.com/profile/PFC/');
	break;
	case 'assetview-live':
	case 'assetviewlive':
	moved_permanently('https://www.brighttalk.com/webcast/11673/487553');
	break;
	case 'edr-epp':
	moved_permanently('/beta-signup/edr-antimalware/');
	break;
	case 'pm-linux-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2021/04/21/manage-linux-patching-with-qualys-patch-management');
	break;
	case 'pm-linux':
	moved_permanently('/beta-signup/patch-management-linux/');
	break;
	case 'pm':
	case 'patch':
	moved_permanently('/apps/patch-management/');
	break;
	case 'scanner-appliance-user-guide':
	moved_permanently('/docs/qualys-scanner-appliance-user-guide.pdf');
	break;
	case 'proxylogon':
	moved_permanently('/forms/exchange-compromise/');
	break;
	case 'qsc/2021/emea':
	case 'qsc/2020/virtual':
	moved_permanently('/qsc/virtual-events/');
	break;
	case 'vmdr-mobile-devices':
	moved_permanently('/apps/vulnerability-management-detection-response/mobile-devices/');
	break;
	case 'try-vmdr-mobile-devices':
	moved_permanently('/apps/vulnerability-management-detection-response/mobile-devices/#trial');
	break;
	case 'vmdr-mobile-devices-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2021/02/10/qualys-extends-vmdr-to-android-and-ios-ipados-devices');
	break;
	case 'saasdr-webinar':
	moved_permanently('https://www.brighttalk.com/webcast/11673/468042');
	break;
	case 'saasdr-blog-post':
	moved_permanently('https://blog.qualys.com/product-tech/2021/02/03/unified-saas-application-security-detection-and-response');
	break;
	case 'saasdr-press-release':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-introduces-saas-detection-and-response-to-manage-saas-applications/');
	break;
	case 'trysaasdr':
	moved_permanently('/forms/saas-detection-response/');
	break;
	case 'saasdr':
	moved_permanently('/apps/saas-detection-response/');
	break;
	case 'solarwinds-fireeye-advisory-blog-post':
	moved_permanently('https://blog.qualys.com/qualys-insights/2020/12/22/qualys-security-advisory-solarwinds-fireeye');
	break;
	case 'solarwinds-fireeye-webcast':
	moved_permanently('https://www.brighttalk.com/webcast/11673/461480');
	break;
	case 'solarhack':
	moved_permanently('/forms/solarwinds-fireeye/');
	break;
	case 'securing-containers-google-artifact-registry':
	moved_permanently('https://blog.qualys.com/product-tech/2020/11/16/securing-containers-in-google-cloud-artifact-registry-with-qualys');
	break;
	case 'hp-printer-assessment':
	moved_permanently('https://qualys-secure.force.com/discussions/s/article/000006458');
	break;
	case 'container-runtime-security-blog-post':
	moved_permanently('https://blog.qualys.com/product-tech/2020/11/03/built-in-runtime-security-for-containers');
	break;
	case 'docs/qualys-scripts-summary.pdf':
	moved_permanently('https://github.com/Qualys/community');
	break;
	case 'assetview-eol':
	moved_permanently('https://qualys-secure.force.com/discussions/s/article/000006417');
	break;
	case 'webinars/servicenow_cmdb_sync':
	case 'webinars/servicenow-cmdb-sync':
	moved_permanently('https://www.brighttalk.com/webcast/11673/440672');
	break;
	case 'vmdr-integration-ibm-qradar':
	moved_permanently('https://www.brighttalk.com/webcast/11673/434836');
	break;
	case 'edrvideo':
	moved_permanently('https://vimeo.com/443568992');
	break;
	case 'spellsecurity_pr':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-acquires-software-assets-of-spell-security/');
	break;
	case 'spellsecurity':
		moved_permanently('https://www.spellsecurity.com/');
	break;
	case 'try-edr':
	moved_permanently('/forms/endpoint-detection-response/');
	break;
	case 'edr':
	case 'apps/indication-of-compromise':
	moved_permanently('/apps/endpoint-detection-response/');
	break;
	case 'training/library/ioc':
	moved_permanently('/training/#video-library');
	break;
	case 'webinar/secure-remote-workforce':
	moved_permanently('https://www.brighttalk.com/webcast/11673/418667');
	break;
	case 'community-terms-of-use':
	moved_permanently('/company/community-terms-of-use/');
	break;
	case 'github':
	moved_permanently('https://github.com/qualys');
	break;
	case 'false-claims':
	moved_permanently('https://blog.qualys.com/news/2020/04/13/qualys-response-to-rapid7s-false-claims-on-vmdr');
	break;
	case 'response-to-rapid7':
	moved_permanently('https://www.brighttalk.com/webcast/11673/399796');
	break;
	case 'vmdr-shipping':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-vmdr-now-shipping/');
	break;
	case 'webinar/remote':
	moved_permanently('https://zoom.us/webinar/register/4815850080529/WN_rymNusIzTVWgsm1p2Pisag');
	break;
	case 'remotepatching':
	case 'remotepatching/waitinglist':
	case 'remote-endpoint':
	moved_permanently('/forms/remote-endpoint/');
	break;
	case 'vmdr-splash':
	moved_permanently('https://community.qualys.com/vmdr-free-upgrade/');
	break;
	case 'tryvmdr':
	moved_permanently('/forms/vmdr/');
	break;
	case 'vmdr-live-recording':
	moved_permanently('https://qualys.events.cube365.net/qualys/vmdr');
	break;
	case 'ovum':
	moved_permanently('/forms/whitepapers/ovum/');
	break;
	case 'documentation/search':
	moved_permanently('https://community.qualys.com/search/');
	break;
	case 'forms/contact-support':
	moved_permanently('https://qualys-secure.force.com/customer/s/');
	break;
	case 'docs/qualys-scanner-appliance-software-credits.pdf':
	moved_permanently('/docs/qualys-software-credits-scanner-appliance.pdf');
	break;
	case '2019/blackhat/analysts-investors':
	case '2019/blackhat/analysts-investors/confirm':
	case '2019/blackhat/analysts-investors-invite':
	case '2019/blackhat/analysts-investors-invite/confirm':
	case 'analysts-and-investors-day':
	moved_permanently('https://investor.qualys.com/events-presentations');
	break;
	case 'inventory-facts':
	moved_permanently('/docs/global-asset-inventory-customers.pdf');
	break;
	case '2018/gov':
	moved_permanently('/subscriptions/government/');
	break;
	case '2019/06/05/cve-2019-10149/return-wizard-rce-exim-abridged.txt':
	moved_permanently('/2019/06/05/cve-2019-10149/return-wizard-rce-exim.txt');
	break;
	case 'docs/qualys-assetview-brief.pdf':
	moved_permanently('/docs/qualys-asset-inventory-brief.pdf');
	break;
	case 'devops':
	moved_permanently('/solutions/devsecops/');
	break;
	case 'docs/qualys-scanner-appliance-quick-start-guide-3120-a1.pdf':
	moved_permanently('/docs/qualys-scanner-appliance-quick-start-guide-4120-a1.pdf');
	break;
	case 'platform2.36':
	moved_permanently('https://blog.qualys.com/technology/2019/01/29/qualys-cloud-platform-2-36-new-features');
	break;
	case 'platform2.35':
	moved_permanently('https://blog.qualys.com/technology/2018/11/26/qualys-cloud-platform-2-35-new-features');
	break;
	case 'suite2.36':
	moved_permanently('https://blog.qualys.com/technology/2019/01/29/qualys-cloud-platform-2-36-new-features');
	break;
	case 'suite8.17':
	moved_permanently('https://blog.qualys.com/technology/2019/01/25/qualys-cloud-platform-vm-pc-8-17-new-features');
	break;
	case 'suite8.16':
	moved_permanently('https://blog.qualys.com/technology/2019/01/22/qualys-cloud-platform-vm-pc-8-16-new-features');
	break;
	case 'videos/qsc-highlights':
	moved_permanently('https://vimeo.com/241251443');
	break;
	case 'videos/2013/qualysguard/express-lite':
	case 'videos/2013/qualysguard/express-lite/internal-scanning-virtual-scanner':
	case 'videos/2013/qualysguard/express-lite/vulnerability-management':
	case 'videos/2013/qualysguard/express-lite/web-application-scanning':
	case 'videos/2013/qualysguard/express-lite/pci-compliance':
	case 'videos/2013/qualysguard/express-lite/vulnerability-management-reporting':
	moved_permanently('https://lps.qualys.com/getting-started-express-lite.html');
	break;
	case 'qsc22-highlights':
	moved_permanently('/qsc/2022/las-vegas/videos/');
	break;
	case 'about':
	moved_permanently('/company');
	break;
	case 'visibility':
	moved_permanently('https://vimeo.com/298014344');
	break;
	case 'unsubscribe':
	moved_permanently('/communication-preferences/');
	break;
	case 'platform2.34.1':
	moved_permanently('https://blog.qualys.com/technology/2018/09/27/qualys-cloud-platform-2-34-1-new-features');
	break;
	case 'forms/consultant':
	case 'forms/msp-lite':
	moved_permanently('/forms/consulting-edition/');
	break;
	case 'docs/qualys-api-v1-user-guide.pdf':
	case 'docs/qualys-api-v2-user-guide.pdf':
	moved_permanently('/docs/qualys-api-vmpc-user-guide.pdf');
	break;
	case 'suite8.15':
	moved_permanently('https://blog.qualys.com/news/2018/08/08/qualys-cloud-platform-vm-sca-pc-8-15-new-features');
	break;
	case 'platform2.34':
	moved_permanently('https://blog.qualys.com/technology/2018/08/09/qualys-cloud-platform-2-34-new-features');
	break;
	case 'apps/passive-network-sensor':
	case 'passive-network-sensor':
	case 'forms/passive-network-sensor':
	moved_permanently('/passive-scanning-sensor/');
	break;
	case 'communityedition':
	case 'ce':
	moved_permanently('/community-edition');
	break;
	case 'consultingedition':
	case 'consulting-edition':
	moved_permanently('/subscriptions/consultants');
	break;
	case 'docs/qualys-asset-management-tagging-api-user-guide.pdf':
	case 'docs/qualys-asset-management-tagging-api-v1-user-guide.pdf':
	moved_permanently('/docs/qualys-asset-management-tagging-api-v2-user-guide.pdf');
	break;
	case 'suite8.14':
	moved_permanently('https://blog.qualys.com/technology/2018/06/22/qualys-cloud-platform-vm-sca-pc-8-14-new-features');
	break;
	case 'platform2.33':
	moved_permanently('https://blog.qualys.com/technology/2018/05/29/qualys-cloud-platform-2-33-new-features');
	break;
	case 'company/newsroom/news-releases/usa/2015-08-05-qualys-announces-availability-groundbreaking-free-global-asset-inventory-service':
	case 'company/newsroom/news-releases/france/2015-08-05-qualys-annonce-la-disponibilite-dun-service-gratuit-et-revolutionnaire-pour-inventorier-tous-les-actifs-de-lentreprise':
	case 'company/newsroom/news-releases/germany/2015-08-05-qualys-dienst-asset-inventarisierung':
	case 'company/newsroom/news-releases/netherlands/2015-08-05-qualys-asset-inventory-service':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-introduces-new-groundbreaking-app-for-global-it-asset-inventory-and/');
	break;
	case 'sca-intro-video':
	moved_permanently('https://player.vimeo.com/video/271916109');
	break;
	case 'docs/web-application-security-datasheet.pdf':
	moved_permanently('/docs/web-application-scanning-datasheet.pdf'); // fix broken link in email
	break;
	case 'qualys.com/qsc-dubai-community':
	moved_permanently('/qsc-dubai-community'); // fix broken link in email
	break;
	case 'gov':
	moved_permanently('/free-trial/#/government');
	break;
	case 'government':
	moved_permanently('/docs/qualys-gov-platform-brochure.pdf');
	break;
	case 'cloud-inventory-assessment-video':
	case 'cloudview-video':
	moved_permanently('https://vimeo.com/264526986');
	break;
	case 'docs/qualys-cloud-fundamentals-amazon.pdf':
	moved_permanently('/resources/');
	break;
	case 'research/sans-at-risk/2013/week-53':
	moved_permanently('/research/sans-at-risk/2014/week-1/');
	break;
	case 'docs/ch08.pdf':
	case 'docs/qualys-api-network-support.pdf':
	case 'docs/qualys-asset_management-quick-start-guide.pdf':
	case 'docs/qualys-questionnaire-answer-quick-start.pdf':
	case 'docs/qualys-questionnaire-manage-quick-start.pdf':
	case 'docs/qualys-rollout-guide.pdf':
	moved_permanently('/documentation/');
	break;
	case 'company/newsroom/news-releases/benelux':
	moved_permanently('/company/newsroom/news-releases/netherlands/');
	break;
	case 'company/newsroom/news-releases/uk/2016-04-12-petya-decryption-tool-now-available':
	moved_permanently('https://www.google.com/search?q=petya+decryption+tool+now+available');
	break;
	case 'webcasts/7-supercharging-compliance-programs-for-operational-security':
	moved_permanently('/webcasts/7-streamlining-compliance-programs-operational-security/');
	break;
	case 'suite8.13':
	moved_permanently('https://blog.qualys.com/news/2018/03/22/qualys-cloud-platform-vm-pc-8-13-new-features');
	break;
	case 'platform2.32':
	moved_permanently('https://blog.qualys.com/technology/2018/02/20/qualys-platform-suite-2-32-new-features');
	break;
	case 'company/newsroom/news-releases/france/2016-12-21-deutsche-telekom-s-associe-a-qualys-pour-securiser-la-transformation-numerique':
	moved_permanently('/company/newsroom/news-releases/usa/2016-12-19-deutsche-telekom-partners-with-qualys-to-help-secure-the-digital-transformation/');
	break;
	case 'company/newsroom/news-releases/germany/2013-11-11-rsa-executive-ann-johnson-to-join-qualys-as-president-and-chief-operating-officer':
	moved_permanently('/company/newsroom/news-releases/uk/2013-11-11-rsa-executive-ann-johnson-to-join-qualys-as-president-and-chief-operating-officer/');
	break;
	case 'company/newsroom/news-releases/uk/2013-04-24-oisg-group-and-qualys-partner-to-deliver-cloud-it-security-and-compliance-solutions':
	moved_permanently('/company/newsroom/news-releases/uk/2013-04-23-oisg-group-and-qualys-partner-to-deliver-cloud-it-security-and-compliance-solutions/');
	break;
	case 'company/newsroom/news-releases/usa/2012-05-14-frost-sullivan-awards-qualys-global-market-share-leadership-award-in-vulnerability-management-for-second-consecutive-year':
	moved_permanently('/company/newsroom/news-releases/usa/2012-05-08-frost-sullivan-awards-qualys-global-market-share-leadership-award-in-vulnerability-management-for-second-consecutive-year/');
	break;
	case 'company/newsroom/news-releases/usa/2014-03-25-qualys-named-a-finalist-for-four-sc-magazine-europe-awards-including-best-security-company-':
	moved_permanently('/company/newsroom/news-releases/uk/2014-03-25-qualys-named-a-finalist-for-four-sc-magazine-europe-awards-including-best-security-company-/');
	break;
	case 'company/newsroom/news-releases/usa/2017-02-14-ibm-partners-with-qualys-to-expand-its-managed-security-services-mss-portfolio1':
	moved_permanently('/company/newsroom/news-releases/usa/2017-02-14-ibm-partners-with-qualys-to-expand-its-managed-security-services-mss-portfolio/');
	break;
	case 'company/newsroom/news-releases/usa/2017-02-14-qualys-joins-ibm-security-app-exchange-community1':
	moved_permanently('/company/newsroom/news-releases/usa/2017-02-14-qualys-joins-ibm-security-app-exchange-community/');
	break;
	case '$1':
	moved_permanently('/$1/');
	break;
	case 'forms/whitepapers/best-practices-auswahl-web-application-scanning-losung/de':
	moved_permanently('/forms/whitepapers/best-practices-selecting-web-application-scanning-solution/');
	break;
	case 'webcasts/the-practical-realities-of-prioritization-in-a-modern-it-environment':
	moved_permanently('/webcasts/prioritization-vulnerabilities-modern-it-environment');
	break;
	case 'docs/2016-idc-market-shares':
	moved_permanently('/docs/idc-vulnerability-management-market-shares-2016.pdf');
	break;
	case 'lp/azure':
	moved_permanently('/public-cloud/#azure');
	break;
	case 'docs/vm-for-dummies.pdf':
	moved_permanently('/docs/vm-for-dummies-2nd-edition.pdf');
	break;
	case 'docs/eula.pdf':
	case 'docs/master-cloud-service-agreement.pdf':
	moved_permanently('/docs/qualys-master-cloud-services-agreement.pdf');
	break;
	case 'suite8.12':
	moved_permanently('https://blog.qualys.com/technology/2018/01/24/qualys-cloud-suite-8-12-new-features');
	break;
	case 'platform2.31':
	moved_permanently('https://blog.qualys.com/technology/2018/01/05/qualys-cloud-platform-2-31-new-features');
	break;
	case 'qlssc1':
	moved_permanently('/docs/qualys-consultant-scanner-personal-edition-user-guide.pdf');
	break;
	case 'suite8.11.2':
	moved_permanently('https://blog.qualys.com/technology/2017/11/30/qualys-cloud-suite-8-11-2-new-features');
	break;
	case 'suite8.11':
	moved_permanently('https://blog.qualys.com/technology/2017/10/18/qualys-cloud-suite-8-11-new-features');
	break;
	case '2017/09/26/cve-2017-1000253/cve-2017-1000253.txt':
	moved_permanently('/2017/09/26/linux-pie-cve-2017-1000253/cve-2017-1000253.txt');
	break;
	case 'docs/version/8.10/source/qualys-support-sla.pdf':
	moved_permanently('/docs/service-level-agreement.pdf');
	break;
	case 'docs/qualys-cloud-agent-linux-deployment.pdf':
	case 'docs/version/8.10/qualys-cloud-agent-linux-deployment.pdf':
	moved_permanently('/docs/qualys-cloud-agent-linux-install-guide.pdf');
	break;
	case 'docs/qualys-cloud-agent-windows-deployment.pdf':
	case 'docs/version/8.10/qualys-cloud-agent-windows-deployment.pdf':
	moved_permanently('/docs/qualys-cloud-agent-windows-install-guide.pdf');
	break;
	case 'company/newsroom/news-releases/germany/2015-04-23-qualys-cloud-agent-plattform-inventarisierung-sicherheit-compliance-assets':
	moved_permanently('/company/newsroom/news-releases/germany/2015-04-27-qualys-praesentiert-cloud-agent-plattform-fuer-kontinuierliche-inventarisierung/');
	break;
	case 'company/newsroom/news-releases/usa/2015-07-27-qualys-present-upcoming-investor-conferences':
	moved_permanently('/company/newsroom/news-releases/usa/2016-07-27-qualys-present-upcoming-investor-conferences/');
	break;
	case 'platform2.30':
	moved_permanently('https://blog.qualys.com/technology/2017/08/24/qualys-cloud-platform-2-30-new-features');
	break;
	case 'suite8.10.2':
	moved_permanently('https://blog.qualys.com/technology/2017/08/08/qualys-cloud-suite-8-10-2-new-features');
	break;
	case 'research/security-alerts/2004-09-01/microsoft':
	moved_permanently('/research/security-alerts/2004-09-01/oracle/');
	break;
	case 'docs/customers/casestud/geisinger.pdf':
	moved_permanently('/customers/success-stories/geisinger-finds-cure-in-continuous-security-monitoring/');
	break;
	case 'docs/2014/rsac/implementating-risk-based-web-application-security.pdf':
	moved_permanently('/customers/success-stories/reining-in-global-web-application-security-risk-at-microsoft/');
	break;
	case 'solutions/overview':
	moved_permanently('/solutions/');
	break;
	case 'docs/2007/cso-interchange/london/security-consequences-of-greening-it-bob-tarzey-quocirca.pdf':
	moved_permanently('/docs/2007/cso-interchange/london/security-consequences-of-greening-it-background-bob-tarzey-quocirca.pdf');
	break;
	case 'docs/brinks-france-plans-ahead-for-security-audits-with-qualys.pdf':
	moved_permanently('/customers/success-stories/brinks-france-plans-ahead-for-security-audits-with-qualys/');
	break;
	case 'docs/customers/casestud/University_of_Idaho.pdf':
	moved_permanently('/customers/success-stories/it-security-university-of-idaho-raises-grade/');
	break;
	case 'company/newsroom/news-releases/usa/2017-07-24-%20qualys-unveils-certview-to-help-customers-manage-ssl-tls-certificates':
	moved_permanently('/company/newsroom/news-releases/usa/2017-07-24-qualys-unveils-certview-to-help-customers-manage-ssl-tls-certificates/');
	break;
	case 'cio-ciso-ebook':
	moved_permanently('https://view.flipdocs.com/html5/?id=10021961_456633&P=0#0');
	break;
	case 'corporate-brochure':
	moved_permanently('https://view.flipdocs.com/html5/?id=10021961_301108&P=0#0');
	break;
	case 'docs/french-corporate-brochure.pdf':
	case 'docs/qg_suite_brochure.pdf':
	case 'docs/qualys-cloud-security-platform.pdf':
	case 'docs/qualys-continuous-security-global-enterprise.pdf':
	case 'docs/qualys-continuous-security-global-enterprise-pt.pdf':
	case 'docs/qg_suite_brochure_fr.pdf':
	case 'docs/qg_suite_brochure_ru.pdf':
	case 'docs/qg_suite_brochure_it.pdf':
	case 'docs/qg_suite_brochure_ru.pdf':
	case 'docs/qg_suite_brochure_es.pdf':
	case 'docs/qg_suite_brochure_de.pdf':
	case 'docs/qg_suite_brochure_tr.pdf':
	moved_permanently('/docs/corporate-brochure.pdf');
	break;
	case 'asset/image/logo/qualys-shield-shadow.svg':
	moved_permanently('/asset/image/logo/qualys-shield.svg');
	break;
	case 'asset/image/logo/qualys-reverse-tagline.svg':
	moved_permanently('/asset/image/logo/qualys-white-tagline.svg');
	break;
	case 'docs/laws-report.pdf':
	case 'docs/laws_of_vulnerabilities.pdf':
	moved_permanently('/docs/laws-of-vulnerabilities.pdf');
	break;
	case 'docs/laws-presentation.pdf':
	moved_permanently('/docs/laws-of-vulnerabilities-presentation.pdf');
	break;
	case 'docs/laws_2.0.pdf':
	moved_permanently('/docs/laws-of-vulnerabilities-2.0.pdf');
	break;
	case 'patch-tuesday-july-2017':
	moved_permanently('https://blog.qualys.com/laws-of-vulnerabilities/2017/07/11/july-patch-tuesday-19-critical-vulnerabilities-from-microsoft-plus-critical-adobe-patches');
	break;
	case 'platform2.28':
	moved_permanently('https://blog.qualys.com/technology/2017/06/21/qualys-cloud-platform-2-28-new-features');
	break;
	case 'suite8.10.1':
	moved_permanently('https://blog.qualys.com/technology/2017/06/26/qualys-cloud-suite-8-10-1-new-features');
	break;
	case 'platform2.27':
	moved_permanently('https://blog.qualys.com/technology/2017/06/19/qualys-cloud-platform-2-27-new-features');
	break;
	case '2017/06/14/cve-2017-1000367/cve-2017-1000367.txt':
	moved_permanently('/2017/05/30/cve-2017-1000367/cve-2017-1000367.txt');
	break;
	case '2017/06/14/cve-2017-1000367/linux_sudo_cve-2017-1000367.c':
	moved_permanently('/2017/05/30/cve-2017-1000367/linux_sudo_cve-2017-1000367.c');
	break;
	case 'research/top102017-5-9':
	moved_permanently('/research/top10/');
	break;
	case 'research/security-alerts/2014-01':
	moved_permanently('/research/security-alerts/2014-01-14/microsoft/');
	break;
	case 'docs/investor.qualys.com':
	moved_permanently('https://investor.qualys.com');
	break;
	case 'docs/newsroom/reseaux-11-02.pdf':
	moved_permanently('/docs/Qualys_01Reseaux_Securite_1103.pdf');
	break;
	case 'docs/qg_cons_datasheet_german.pdf':
	moved_permanently('/docs/QG_Suite_Brochure_DE.pdf');
	break;
	case 'sitemap.xml.gz':
	moved_permanently('/sitemap.xml');
	break;
	case 'docs/securityalerts/multiple-msft-h323-20040113.pdf':
	moved_permanently('/docs/securityalerts/multiple-h323-20040113.pdf');
	break;
	case 'research/sans-at-risk/2012/week-53':
	moved_permanently('/research/sans-at-risk/2013/week-1/');
	break;
	case 'docs/mktg/pci_compliance_2008_-_wyntk.pdf':
	moved_permanently('/docs/PCI_Compliance_Brief.pdf');
	break;
	case 'blogs/securitylabs/2013/06/25/ssl-labs-deploying-forward-secrecy':
	moved_permanently('https://blog.qualys.com/ssllabs/2013/06/25/ssl-labs-deploying-forward-secrecy');
	break;
	case 'company/newsroom/news-releases/france/qualys-announces-third-quarter-2012-financial-results':
	case 'company/newsroom/news-releases/uk/2012-11-05-qualys-announces-third-quarter-2012-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2012-11-05-qualys-announces-third-quarter-2012-financial-results/');
	break;
	case 'company/newsroom/news-releases/france/qualys-announces-fourth-quarter-and-full-year-2012-financial-results':
	case 'company/newsroom/news-releases/germany/qualys-announces-fourth-quarter-and-full-year-2012-financial-results':
	case 'company/newsroom/news-releases/uk/2013-02-11-qualys-announces-fourth-quarter-and-full-year-2012-financial-results':
	case 'company/newsroom/news-releases/uk/2014-02-10-qualys-announces-fourth-quarter-and-full-year-2013-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2014-02-10-qualys-announces-fourth-quarter-and-full-year-2013-financial-results/');
	break;
	case 'company/newsroom/news-releases/benelux/qualys-announces-first-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/france/qualys-announces-first-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/germany/qualys-announces-first-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/uk/2013-05-06-qualys-announces-first-quarter-2013-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2013-05-06-qualys-announces-first-quarter-2013-financial-results/');
	break;
	case 'company/newsroom/news-releases/benelux/qualys-announces-second-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/france/qualys-announces-second-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/germany/qualys-announces-second-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/uk/2013-08-05-qualys-announces-second-quarter-2013-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2013-08-05-qualys-announces-second-quarter-2013-financial-results/');
	break;
	case 'company/newsroom/news-releases/france/2013-11-04-qualys-announces-third-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/germany/2013-11-04-qualys-announces-third-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/benelux/2013-11-04-qualys-announces-third-quarter-2013-financial-results':
	case 'company/newsroom/news-releases/uk/2013-11-04-qualys-announces-third-quarter-2013-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2013-11-04-qualys-announces-third-quarter-2013-financial-results/');
	break;
	case 'company/newsroom/news-releases/uk/2014-05-05-qualys-announces-first-quarter-2014-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2014-05-05-qualys-announces-first-quarter-2014-financial-results/');
	break;
	case 'company/newsroom/news-releases/uk/2014-08-04-qualys-announces-second-quarter-2014-financial-results':
	moved_permanently('/company/newsroom/news-releases/usa/2014-08-04-qualys-announces-second-quarter-2014-financial-results/');
	break;
	case 'company/newsroom/news-releases/usa/2017-05-19-security-alert-qualys-offers-30-day-free':
	moved_permanently('/company/newsroom/news-releases/usa/2017-05-19-security-alert-qualys-offers-30-day-free-unlimited-service-to-identify-and-track/');
	break;
	case 'research/security-alerts/2004-09-01/microsoft/':
	moved_permanently('/research/security-alerts/2004-09-14/microsoft/');
	break;
	case 'research/security-alerts/2004-04-13/microsoft':
	moved_permanently('/docs/securityalerts/alerts-MSFT-2004-04-13.pdf');
	break;
	case 'research/security-alerts/2004-03-09/microsoft':
	moved_permanently('/docs/securityalerts/Qadvise-Multiple-MSFT-20040309.pdf');
	break;
	case 'research/security-alerts/2017-03-15/microsoft':
	moved_permanently('/research/security-alerts/2017-03-14/microsoft/');
	break;
	case 'research/security-alerts/2017-03-15/adobe':
	moved_permanently('/research/security-alerts/2017-03-14/adobe/');
	break;
	case 'docs/customers/casestud/EarthMover.pdf':
	moved_permanently('/customers/success-stories/earthmover-credit-union-optimizes-vulnerability-management/');
	break;
	case 'docs/newsroom/reseaux-telecom_10-10-2002.pdf':
	case 'company/newsroom/news-releases/france/2017-02-13-qualys-et-bugcrowd-mettent-la-puissance-de-l-automatisation-et-du-crowdsourcing':
	moved_permanently('/company/newsroom/');
	break;
	case 'docs/2014/rsac/qualysguard-web-application-firewall.pdf':
	moved_permanently('/suite/web-application-firewall/');
	break;
	case 'docs/newsroom/mediacoverage/uk/2004-01-04-infosecuritytoday.pdf':
	moved_permanently('/docs/newsroom/mediacoverage/uk/2004-04-01-InfosecurityToday.pdf');
	break;
	case 'docs/customers/casestud/euro_bank.pdf':
	moved_permanently('/customers/success-stories/euro-bank-optimizes-vulnerability-management/');
	break;
	case 'docs/Laws_2.0_PPT.pdf':
	moved_permanently('/docs/Laws_2.0.pdf');
	break;
	case 'docs/newsroom/netcost_10-11-02.pdf':
	moved_permanently('/company/newsroom/');
	break;
	case 'swf/flowplayer.commercial-3.2.0-3b.swf':
	moved_permanently('https://cdnjs.cloudflare.com/ajax/libs/flowplayer/7.0.4/flowplayer.min.js');
	break;
	case 'company/newsroom/newsletter/200403':
	moved_permanently('/company/newsroom/');
	break;
	case 'docs/customers/casestud/fifth_third_bancorp.pdf':
	moved_permanently('/customers/success-stories/automated-vulnerability-management-reaps-dividends/');
	break;
	case 'docs/customers/casestud/cartagena.pdf':
	moved_permanently('/customers/success-stories/cartagena-effective-risk-reduction/');
	break;
	case 'docs/partners':
	case 'docs/partners/qualys_partner_newsletter_-_march_2008.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_november_2007.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_q2_2009.pdf':
	case 'docs/partners/qualys_contact_list_and_sales_reference_sheet_q4_2007.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_august_2007.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_august_2008.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_q1_2009.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_q3_2009.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_q4_2010.pdf':
	case 'docs/partners/qualys_partner_newsletter_-_september_2007.pdf':
	moved_permanently('/partners/');
	break;
	case 'docs/customers/casestud/journal_communications.pdf':
	moved_permanently('/customers/success-stories/journal-communications-gets-scoop-risk-management/');
	break;
	case 'confirm_demo.html':
	moved_permanently('https://lps.qualys.com/request-demo.html');
	break;
	case 'company/events/training-feed.php':
	moved_permanently('https://aqueous-sierra.herokuapp.com/api/v1/classes/fullcalendar');
	break;
	case 'suite8.10.0':
	moved_permanently('https://blog.qualys.com/technology/2017/05/15/qualys-cloud-suite-8-10-new-features');
	break;
	case 'wannacry':
	moved_permanently('https://blog.qualys.com/securitylabs/2017/05/12/how-to-rapidly-identify-assets-at-risk-to-wannacry-ransomware-and-eternalblue-exploit');
	break;
	case 'platform2.26':
	moved_permanently('https://blog.qualys.com/technology/2017/04/20/qualys-cloud-platform-2-26-new-features');
	break;
	case 'rbi':
	moved_permanently('https://blog.qualys.com/technology/2017/04/25/qualys-support-for-reserve-bank-of-india-rbi-cyber-security-guidelines');
	break;
	case 'platform2.25':
	moved_permanently('https://blog.qualys.com/technology/2017/03/27/qualys-cloud-platform-2-25-new-features');
	break;
	case 'docs/cyber-ark_in.pdf':
	moved_permanently('/docs/cyberark-aim-integration-datasheet.pdf');
	break;
	case 'suite8.9.3':
	moved_permanently('https://blog.qualys.com/technology/2017/03/07/qualys-cloud-suite-8-9-3-new-features');
	break;
	case 'docs/qg_fdcc_module_gsg.pdf':
	moved_permanently('/docs/qualys-scap-getting-started-guide.pdf');
	break;
	case 'solutions/fdcc':
	moved_permanently('/solutions/compliance/scap/');
	break;
	case 'platform2.23':
	moved_permanently('https://blog.qualys.com/technology/2017/02/24/qualys-cloud-platform-2-23-new-features');
	break;
	case 'platform-2.23-api':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2017/02/21/qualys-cloud-suite-223-api-notification-1');
	break;
	case '2seconds':
	moved_permanently('/lp/2-second-visibility/');
	break;
	case 'docs/notifications/free-services-platform-maintenance.pdf':
	moved_permanently('/notifications/free-services/');
	break;
	case 'docs/notifications/us-platform-1-maintenance.pdf':
	moved_permanently('/notifications/platform-us1/');
	break;
	case 'docs/notifications/us-platform-2-maintenance.pdf':
	moved_permanently('/notifications/platform-us2/');
	break;
	case 'docs/notifications/us-platform-3-maintenance.pdf':
	moved_permanently('/notifications/platform-us3/');
	break;
	case 'docs/notifications/eu-platform-1-maintenance.pdf':
	moved_permanently('/notifications/platform-eu1/');
	break;
	case 'docs/notifications/eu-platform-2-maintenance.pdf':
	moved_permanently('/notifications/platform-eu2/');
	break;
	case 'docs/notifications/in-platform-1-maintenance.pdf':
	moved_permanently('/notifications/platform-in1/');
	break;
	case 'docs/qg_pci_coverage.pdf':
	moved_permanently('/docs/qualys-pci-dss-requirements-mapping.pdf');
	break;
	case 'suite8.9.2':
	moved_permanently('https://blog.qualys.com/technology/2017/02/01/qualys-cloud-suite-8-9-2-new-features');
	break;
	case 'platform2.21':
	moved_permanently('https://blog.qualys.com/technology/2017/01/19/qualys-cloud-platform-2-21-new-features');
	break;
	case 'platform-2.21-api':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2017/01/17/qualys-cloud-suite-221-api-notification-1');
	break;
	case 'secure2017':
	moved_permanently('/security-compliance-cloud-platform/?utm_source=content_marketing&utm_medium=infographic&utm_campaign=demand-gen&utm_term=top10tips-q1-2017&utm_content=top-10-tips-checklist&leadsource=34455349');
	break;
	case 'forms/webcasts/vulnerability-management-smb-forrester':
	moved_permanently('https://lps.qualys.com/smb-forrester-webcast/');
	break;
	case 'docs/qg_pc_ds_jp.pdf':
	moved_permanently('https://www.qualys.jp/enterprises/qualysguard/policy-compliance/features/');
	break;
	case 'docs/qg_ent_govt_ds.pdf':
	moved_permanently('/solutions/industry/state-local-government-regulations/');
	break;
	case 'docs/qg_mal_ds.pdf':
	moved_permanently('/docs/malware-detection-datasheet.pdf');
	break;
	case 'docs/qg_express_ds.pdf':
	case 'docs/qg_express_ds_fr.pdf':
	case 'docs/qg_express_ds_uk.pdf':
	case 'docs/qg_express_ds_de.pdf':
	moved_permanently('/docs/qualys-express-brief.pdf');
	break;
	case 'docs/consultant-ds.pdf':
	case 'docs/consultantds_me.qxd.pdf':
	moved_permanently('/docs/qualys-consultant.pdf');
	break;
	case 'suite8.9.1':
	moved_permanently('https://blog.qualys.com/technology/2016/12/02/qualys-cloud-suite-8-9-1-new-features');
	break;
	case 'platform2.19':
	moved_permanently('https://blog.qualys.com/technology/2016/12/01/qualys-cloud-platform-2-19-new-features');
	break;
	case 'platform-2.19-api':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2016/11/29/qualys-cloud-suite-219-api-notification-1');
	break;
	case 'suite8.9':
	moved_permanently('https://blog.qualys.com/technology/2016/11/04/qualys-cloud-suite-8-9-new-features');
	break;
	case 'suite8.9-api':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2016/11/08/qualys-cloud-suite-89-notification-2');
	break;
	case 'platform2.18':
	moved_permanently('https://blog.qualys.com/technology/2016/11/04/qualys-cloud-platform-2-18-new-features');
	break;
	case 'docs/qualy-cloud-agent-api-user-guide.pdf':
	case 'docs/qualys-cloud-agent-api-user-guide.pdf':
	case 'docs/qualysapiuserguide.pdf':
	moved_permanently('/docs/qualys-api-v2-user-guide.pdf');
	break;
	case 'docs/qualys-api-v1-quick-reference.pdf':
	case 'docs/qualys-api-v2-quick-reference.pdf':
	moved_permanently('/docs/qualys-api-quick-reference.pdf');
	break;
	case 'docs/version/8.8/qualys-api-v1-quick-reference.pdf':
	case 'docs/version/8.8/qualys-api-v2-quick-reference.pdf':
	moved_permanently('/docs/version/8.8/qualys-api-quick-reference.pdf');
	break;
	case 'docs/qualysguard-scanner-appliance-quick-start-guide.pdf':
	case 'docs/qualys-scanner-appliance-quick-start-guide.pdf':
	moved_permanently('/docs/qualys-scanner-appliance-quick-start-guide-3120-a1.pdf');
	break;
	case 'platform2.17':
	moved_permanently('https://blog.qualys.com/technology/2016/10/07/qualys-cloud-platform-2-17-new-features-2');
	break;
	case 'md2.11':
	moved_permanently('https://blog.qualys.com/technology/2016/09/09/qualys-malware-detection-2-11-time-zone-fix');
	break;
	case 'platform2.16':
	moved_permanently('https://blog.qualys.com/technology/2016/08/25/qualys-cloud-platform-2-16-new-features');
	break;
	case 'platform2.15':
	moved_permanently('https://blog.qualys.com/technology/2016/08/09/qualys-cloud-platform-2-15-new-features');
	break;
	case 'was4.9':
	moved_permanently('https://blog.qualys.com/technology/2016/08/04/was-4-9-introduces-global-exclusion-lists-and-scan-comparison-feature#more-23104');
	break;
	case 'was4.9-and-waf1.18-api':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2016/07/29/qualys-cloud-platform-new-api-notifications-for-was-and-waf');
	break;
	case 'videos/continuous-monitoring':
	moved_permanently('/videos/qualys-continuous-monitoring-perimeter/');
	break;
	case 'videos/qg-pc-new-ui':
	moved_permanently('/videos/platform/compliance-monitoring/');
	break;
	case 'customers/success-stories/geisinger-health-system-bringing-hipaa-compliance':
	moved_permanently('/customers/success-stories/geisinger-finds-cure-in-continuous-security-monitoring/');
	break;
	case 'splunk':
	moved_permanently('/partners/solution-technology/#/partner/splunk');
	break;
	case 'cisco':
	moved_permanently('/partners/solution-technology/#/partner/cisco');
	break;
	case 'docs/docs/idc_vendor_shares_2009.pdf':
	moved_permanently('/docs/idc_vendor_shares_2009.pdf');
	break;
	case 'docs/risk_i-o.pdf':
	moved_permanently('/partners/solution-technology/#kenna-risk-management');
	break;
	case 'suite8.8':
	moved_permanently('https://blog.qualys.com/technology/2016/06/23/qualys-cloud-suite-8-8-new-features');
	break;
	case 'was4.8':
	moved_permanently('https://blog.qualys.com/technology/2016/05/25/was-4-8-features-vulnerability-retest-function-and-finding-severity-customization');
	break;
	case 'was4.8-api1':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2016/05/26/qualys-cloud-platform-new-api-notifications-for-was-and-waf');
	break;
	case 'suite2.14':
	moved_permanently('https://blog.qualys.com/technology/2016/05/27/qualys-cloud-platform-2-14-new-features');
	break;
	case 'suite8.8-api1':
	moved_permanently('https://community.qualys.com/community/developer/notifications-api/blog/2016/05/23/qualys-cloud-suite-88-api-release-notification-1');
	break;
	case 'suite2.13':
	moved_permanently('https://blog.qualys.com/technology/2016/04/21/qualys-cloud-platform-2-13-new-features');
	break;
	case 'ca-client1.4':
	moved_permanently('https://blog.qualys.com/technology/2016/04/21/qualys-cloud-agent-client-1-4-now-available');
	break;
	case 'was4.7':
	moved_permanently('https://blog.qualys.com/technology/2016/04/18/was-4-7-adds-enhanced-support-for-redundant-link-checks');
	break;
	case 'docs/qualys-cloud-agent_proxy_windows.pdf':
	moved_permanently('/cloud-agent/');
	break;
	case 'forms/pci-dss-v3':
	moved_permanently('/suite/pci-compliance/');
	break;
	case 'forms/cisco-iblm':
	moved_permanently('/partners/');
	break;
	case 'azure-news-release':
	moved_permanently('/company/newsroom/news-releases/usa/2016-06-13-qualys-extends-its-cloud-based-security-and-compliance-platform-to-support-microsoft/');
	break;
	case 'saq-news-release':
	moved_permanently('/company/newsroom/news-releases/usa/2016-06-13-qualys-announces-security-assessment-questionnaire-service-saq-release-2-0/');
	break;
	case 'enterprises/qualysguard':
	moved_permanently('/subscriptions/enterprise/');
	break;
	case 'enterprises/qualysguard/continuous-monitoring':
	moved_permanently('/suite/continuous-monitoring/');
	break;
	case 'enterprises/qualysguard/continuous-monitoring/pricing':
	moved_permanently('/suite/continuous-monitoring/pricing/');
	break;
	case 'enterprises/qualysguard/fdcc':
	moved_permanently('/solutions/fdcc/');
	break;
	case 'enterprises/qualysguard/features':
	moved_permanently('/subscriptions/enterprise/features/');
	break;
	case 'enterprises/qualysguard/malware-detection':
	case 'suite/malware-detection-service':
	moved_permanently('/suite/malware-detection/');
	break;
	case 'enterprises/qualysguard/malware-detection/features':
	case 'suite/malware-detection/features':
	moved_permanently('/suite/malware-detection/#features');
	break;
	case 'enterprises/qualysguard/malware-detection/pricing':
	moved_permanently('/suite/malware-detection/pricing/');
	break;
	case 'enterprises/qualysguard/malware-detection/resources':
	moved_permanently('/resources/#/type/all/topic/mds/language/en');
	break;
	case 'enterprises/qualysguard/pci-compliance':
	moved_permanently('/suite/pci-compliance/');
	break;
	case 'enterprises/qualysguard/pci-compliance/pass-fail-criteria':
	moved_permanently('/suite/pci-compliance/pass-fail-criteria/');
	break;
	case 'enterprises/qualysguard/pci-compliance/pricing':
	moved_permanently('/suite/pci-compliance/pricing/');
	break;
	case 'enterprises/qualysguard/pci-compliance/resources':
	moved_permanently('/resources/#/type/all/topic/pci/language/en');
	break;
	case 'enterprises/qualysguard/policy-compliance':
	moved_permanently('/suite/policy-compliance/');
	break;
	case 'enterprises/qualysguard/policy-compliance/features':
	moved_permanently('/suite/policy-compliance/features/');
	break;
	case 'enterprises/qualysguard/policy-compliance/pricing':
	moved_permanently('/suite/policy-compliance/pricing/');
	break;
	case 'enterprises/qualysguard/policy-compliance/resources':
	moved_permanently('/resources/#/type/all/topic/pc/language/en');
	break;
	case 'enterprises/qualysguard/private-cloud':
	case 'subscriptions/private-cloud-platform':
	moved_permanently('/private-cloud/');
	break;
	case 'enterprises/qualysguard/questionnaire':
	case 'suite/security-assessment-questionnaire-service':
	moved_permanently('/suite/security-assessment-questionnaire/');
	break;
	case 'enterprises/qualysguard/questionnaire/pricing':
	moved_permanently('/suite/security-assessment-questionnaire/pricing/');
	break;
	case 'enterprises/qualysguard/secure-seal':
	moved_permanently('/suite/secure-seal/');
	break;
	case 'enterprises/qualysguard/secure-seal/pricing':
	moved_permanently('/suite/secure-seal/pricing/');
	break;
	case 'enterprises/qualysguard/secure-seal/resources':
	moved_permanently('/resources/#/type/all/topic/seal/language/en');
	break;
	case 'enterprises/qualysguard/vulnerability-management':
	moved_permanently('/suite/vulnerability-management/');
	break;
	case 'enterprises/qualysguard/vulnerability-management/features':
	moved_permanently('/suite/vulnerability-management/features/');
	break;
	case 'enterprises/qualysguard/vulnerability-management/pricing':
	moved_permanently('/suite/vulnerability-management/pricing/');
	break;
	case 'enterprises/qualysguard/vulnerability-management/resources':
	moved_permanently('/resources/#/type/all/topic/vm/language/en');
	break;
	case 'enterprises/qualysguard/web-application-firewall':
	moved_permanently('/suite/web-application-firewall/');
	break;
	case 'enterprises/qualysguard/web-application-firewall/pricing':
	moved_permanently('/suite/web-application-firewall/pricing/');
	break;
	case 'enterprises/qualysguard/web-application-firewall/resources':
	moved_permanently('/resources/#/type/all/topic/waf/language/en');
	break;
	case 'enterprises/qualysguard/web-application-scanning':
	moved_permanently('/suite/web-application-scanning/');
	break;
	case 'enterprises/qualysguard/web-application-scanning/pricing':
	moved_permanently('/suite/web-application-scanning/pricing/');
	break;
	case 'enterprises/qualysguard/web-application-scanning/resources':
	moved_permanently('/resources/#/type/all/topic/was/language/en');
	break;
	case 'enterprises/security-compliance-cloud-platform':
	moved_permanently('/security-compliance-cloud-platform/');
	break;
	case 'partners/qualysguard-consultant':
	moved_permanently('/subscriptions/consultant/');
	break;
	case 'qualysguard-subscription-plans':
	case 'suite/continuous-monitoring/pricing':
	case 'suite/malware-detection/pricing':
	case 'suite/pci-compliance/pricing':
	case 'suite/policy-compliance/pricing':
	case 'suite/secure-seal/pricing':
	case 'suite/security-assessment-questionnaire/pricing':
	case 'suite/threatprotect/pricing':
	case 'suite/vulnerability-management/pricing':
	case 'suite/web-application-firewall/pricing':
	case 'suite/web-application-scanning/pricing':
	moved_permanently('/subscriptions/');
	break;
	case 'qualysguard/scanning-accuracy':
	moved_permanently('/scanning-accuracy/');
	break;
	case 'smb/qualysguard/express-lite':
	moved_permanently('/subscriptions/express-lite/');
	break;
	case 'smb/qualysguard/express':
	moved_permanently('/subscriptions/express/');
	break;
	case 'smb/qualysguard/express/features':
	moved_permanently('/subscriptions/express/features/');
	break;
	case 'solutions/suite':
	moved_permanently('/suite/');
	break;
	case 'gartner16':
	moved_permanently('/docs/qualys-gartner-rio-2016-invitation.pdf');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management':
	moved_permanently('/videos/vm-series/introduction-user-interface-vulnerability-management/');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management-discovery-mapping':
	moved_permanently('/videos/vm-series/introduction-mapping/');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management-asset-management-host':
	moved_permanently('/videos/vm-series/assets-overview/');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management-assessment-scanning':
	moved_permanently('/videos/vm-series/introduction-scanning/');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management-reporting':
	moved_permanently('/videos/vm-series/introduction-reporting/');
	break;
	case 'videos/vm-training/qualysguard-vulnerability-management-remediation-ticketing':
	moved_permanently('/videos/vm-series/introduction-remediation/');
	break;
	case 'docs/jellybelly.pdf':
	moved_permanently('/customers/success-stories/jelly-belly-candy-company-qualysguard-sweetens-security/');
	break;
	case 'docs/customers/casestud/phone-factor.pdf':
	moved_permanently('/customers/success-stories/phonefactor-dials-qualysguard-automated-vulnerability-management/');
	break;
	case 'docs/customers/casestud/officemax.pdf':
	moved_permanently('/customers/success-stories/officemax-maximizing-vulnerability-management-regulatory-compliance/');
	break;
	case 'docs/customers/casestud/arval.pdf':
	moved_permanently('/customers/success-stories/arval-shifts-automated-vulnerability-management/');
	break;
	case 'docs/idefenseintsvcqualysguard_datasheet.pdf':
	moved_permanently('/docs/VRSN_iDefense_QualysGuard_DS_20120604.pdf');
	break;
	case 'docs/mc-sdp-brief.pdf':
	case 'docs/qg_pci_ds_uk.pdf':
	case 'airtight':
	case 'core':
	case 'connect':
	case 'docs/qg_pci_connect_ds.pdf':
	moved_permanently('/docs/pci-compliance-datasheet.pdf');
	break;
	case 'docs/customers/casestud/fiducia.pdf':
	case 'docs/fiducia_de.pdf':
	moved_permanently('/customers/success-stories/certified-security-management-benefits-fiducia-customers/');
	break;
	case 'docs/version/7.13/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.0/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.1/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.2/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.3/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.4/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.5/qualys-was-api-user-guide.pdf':
	case 'docs/version/8.6/qualys-was-api-user-guide.pdf':
	moved_permanently('/docs/version/8.7/qualys-was-api-user-guide.pdf');
	break;
	case 'forms/whitepapers/continuous-monitoring-proaktiven-schutz-gesamten-perimeters/de':
	case 'forms/whitepapers/continuous-monitoring-protection-proactive-perimetre-global/fr':
	moved_permanently('/forms/whitepapers/continuous-monitoring-blueprint-achieving-continuous-security-compliance/');
	break;
	case 'suite2.12-api':
	moved_permanently('https://community.qualys.com/community/notifications-api/blog/2016/04/04/qualys-cloud-platform-new-api-notifications-for-was-md-and-am');
	break;
	case 'suite2.12':
	moved_permanently('https://blog.qualys.com/technology/2016/04/04/cloud-platform-adds-default-landing-page-setting');
	break;
	case 'was4.6':
	moved_permanently('https://blog.qualys.com/technology/2016/04/04/qualys-was-4-6-new-features');
	break;
	case 'suite8.7':
	moved_permanently('https://blog.qualys.com/technology/2016/02/23/qualys-cloud-suite-8-7-new-features#more-22808');
	break;
	case 'docs/qg_pc_ds.pdf':
	case 'docs/qg_pc_brief.pdf':
	moved_permanently('/docs/policy-compliance-datasheet.pdf');
	break;
	case 'csc-guide-for-ciso':
	moved_permanently('/forms/whitepapers/automating-20-cis-critical-security-controls/');
	break;
	case 'docs/top-6-security-use-cases-asset-inventory.pdf':
	moved_permanently('/docs/whitepapers/top-6-security-use-cases-asset-inventory.pdf');
	break;
	case 'av2.11':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2016/01/11/qualys-assetview-211-new-features');
	break;
	case 'suite2.11-api':
	moved_permanently('https://community.qualys.com/community/notifications-api/blog/2016/01/11/qualys-cloud-suite-211-api-release-notification-2');
	break;
	case 'was4.5-api1':
	moved_permanently('https://community.qualys.com/community/notifications-api/blog/2015/12/17/qualys-was-45-api-release-notification');
	break;
	case 'was4.5-api2':
	moved_permanently('https://community.qualys.com/community/notifications-api/blog/2016/01/11/qualys-was-45-api-release-notification-2');
	break;
	case 'was4.5':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2016/01/11/qualys-was-45-new-features');
	break;
	case 'md2.8':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2016/01/11/qualys-md-28-new-features');
	break;
	case 'waf2.0':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2016/01/11/qualys-waf-20-new-feature');
	break;
	case 'docs/why_vm.pdf':
	moved_permanently('/forms/whitepapers/best-practices-selecting-vulnerability-management-solution/');
	break;
	case 'docs/bd_qualys_datasheet_final.pdf':
	moved_permanently('/docs/bay-dynamics-qualys-integration-datasheet.pdf');
	break;
	case 'mvm':
	moved_permanently('/forms/mvm/?utm_source=qualys-social&utm_medium=social&utm_campaign=demand-gen&utm_term=mvm-eol&utm_content=trial&leadsource=30619639');
	break;
	case 'asset/image/badge/saq-shine.svg':
	moved_permanently('/asset/image/badge/qs-shine.svg');
	break;
	case 'asset/image/badge/saq-gradient.svg':
	moved_permanently('/asset/image/badge/qs-gradient.svg');
	break;
	case 'asset/image/sprite-questionnaire-form.png':
	moved_permanently('/asset/image/questionnaire-form-330-1x.png');
	break;
	case 'free-tools-trials/security-at-your-fingertips':
	moved_permanently('/free-tools-trials/#freemium');
	break;
	case 'free-tools-trials/security-at-your-fingertips/fr':
	moved_permanently('/free-tools-trials/fr/');
	break;
	case 'free-tools-trials/security-at-your-fingertips/de':
	moved_permanently('/free-tools-trials/de/');
	break;
	case 'asset/image/badge/cm.svg':
	moved_permanently('/asset/image/badge/cm-shine.svg');
	break;
	case 'customers/presentations/qualys_ii':
	case 'customers/presentations/qualys_i':
	moved_permanently('/enterprises/security-compliance-cloud-platform/');
	break;
	case 'research/security-advisories/cve-2015-3245-cve-2015-3246.txt':
	moved_permanently('/2015/07/23/cve-2015-3245-cve-2015-3246/cve-2015-3245-cve-2015-3246.txt');
	break;
	case 'research/security-advisories/roothelper.c':
	moved_permanently('/2015/07/23/cve-2015-3245-cve-2015-3246/roothelper.c');
	break;
	case 'research/security-advisories/ghost-cve-2015-0235.txt':
	case 'research/securityadvisories/ghost-cve-2015-0235.txt':
	case 'research/security-advisies/ghost-cve-2015-0235.txt':
	case 'research/security-advisories/ghost-cve-2015-0235.tx':
	moved_permanently('/2015/01/27/cve-2015-0235/GHOST-CVE-2015-0235.txt');
	break;
	case 'research/security-advisories/exim_ghost_bof.rb':
	moved_permanently('/2015/01/27/cve-2015-0235/exim_ghost_bof.rb');
	break;
	case 'content/shared_vuln_intelligence':
	case 'content/integrated_vulnerability_risk_management':
	case 'content/forrester_cloud_computing':
	moved_permanently('/webcasts/');
	break;
	case 'enterprises/it-grc':
	moved_permanently('/enterprises/qualysguard/policy-compliance/');
	break;
	case 'enterprises/web-applications':
	moved_permanently('/enterprises/qualysguard/web-application-scanning/');
	break;
	case 'docs/qualysguard_5_quick_tour.pdf':
	case 'docs/qualysguard_6.0_release_notes.pdf':
	case 'docs/qweb_fo_4.0_release_notes.pdf':
	case 'docs/qweb_fo_4.5_release_notes.pdf':
	case 'docs/qweb-3-3-release-notes.pdf':
	case 'docs/solutions/qgent/3-4-release/qweb-3-4-release-notes.pdf':
	case 'docs/qualysguard_api_faqs.pdf':
	case 'docs/qualysguard_nam_api.pdf':
	case 'docs/qualysguard_report_share.pdf':
	case 'docs/webservices/qgent/integrations/sesa-qualysguard-integration.pdf':
	moved_permanently('https://community.qualys.com/docs/DOC-4802');
	break;
	case 'why-qualys':
	moved_permanently('/why-choose-qualys/');
	break;
	case 'docs/qualys-continuous-monitoring-protect-global-perimeter.pdf':
	moved_permanently('/docs/continuous-monitoring-blueprint-achieving-continuous-security-compliance.pdf');
	break;
	case 'forms/whitepapers/continuous-monitoring-proactively-protecting-global-perimeter':
	case 'forms/whitepapers/continuous-monitoring-proactively-protecting-global-perimeter/de':
	moved_permanently('/forms/whitepapers/continuous-monitoring-blueprint-achieving-continuous-security-compliance/');
	break;
	case 'continuous-fic':
	moved_permanently('/lp/alertes-ciblees-pas-tonnes-rapports/fr/?leadsource=23096376');
	break;
	case 'docs/qg_faqs_usability.pdf':
	moved_permanently('/support/faq/general/');
	break;
	break;
	case 'gsm-fr':
	moved_permanently('/free-tools-trials/fr/?leadsource=22323580');
	break;
	case 'enterprises/qualysguard/secure-seal/features':
	moved_permanently('/enterprises/qualysguard/secure-seal/#features');
	break;
	case 'forms/guide_210.php':
	case 'forms/guide_220.php':
	case 'forms/trial_248.php':
	case 'docs/sans-critical-security-controls.pdf':
	moved_permanently('/forms/whitepapers/sans-critical-security-controls/');
	break;
	case 'forms/main_trial.php':
	moved_permanently('/free-tools-trials/');
	break;
	case 'enterprises/qualysguard/malware-detection-service':
	case 'enterprises/qualysguard/malware-detection/benefits':
	case 'enterprises/qualysguard/mds':
	case 'forms/dasient':
	case 'malware_detection':
	case 'malware_scan':
	case 'md':
	case 'mds':
	case 'products/qg_suite/malware_detection':
	moved_permanently('/enterprises/qualysguard/malware-detection/');
	break;
	case 'enterprises/qualysguard/malware-detection/features':
	moved_permanently('/enterprises/qualysguard/malware-detection/#features');
	break;
	case 'products/pci':
	case 'products/qgpci':
	case 'products/pci/qgpci':
	case 'pci_compliance':
	case 'pci_compliance/se-g':
	case 'pci_compliance/se-i':
	case 'pci_compliance/se-o':
	case 'pci_compliance/wesem':
	case 'enterprises/qualysguard/pci-compliance/benefits':
	case 'products/qgpci/demo':
	case 'products/demos/pci':
	case 'products/demos/pci/demo.html':
	case 'products/qg_suite/pci':
	case 'enterprises/qualysguard/pci':
	case 'solutions/pci_compliance':
	case 'enterprises/qualysguard/pci-compliance/benefits':
	moved_permanently('/enterprises/qualysguard/pci-compliance/');
	break;
	case 'enterprises/qualysguard/pci-compliance/features':
	moved_permanently('/enterprises/qualysguard/pci-compliance/#features');
	break;
	case 'enterprises/qualysguard/web-application-scanning/learn':
	case 'enterprises/qualysguard/web-application-scanning/features':
	moved_permanently('/enterprises/qualysguard/web-application-scanning/');
	break;
	case 'smb/qualysguard/express-lite/features':
	moved_permanently('/smb/qualysguard/express-lite/');
	break;
	case 'forms/wp/7_steps':
	moved_permanently('/forms/whitepapers/7_steps_to_security_risk_reduction/');
	break;
	case 'forms/wp/compliance':
	moved_permanently('/forms/whitepapers/winning_pci_compliance_battle/');
	break;
	case 'forms/guide_220.php':
	case 'forms/guides/effective_remediation':
	case 'forms/guides/effective_remediation_network_vulnerabilities':
	case 'forms/guides/effective_vm':
	case 'forms/guides/vm_buyers_checklist':
	case 'forms/techwhite_86.html':
	case 'forms/whitepapers/business_enablement_with_vulnerability_management':
	case 'forms/whitepapers/need_for_vulnerability_management':
	moved_permanently('/forms/whitepapers/best-practices-selecting-vulnerability-management-solution/');
	break;
	case 'lp/perimeter-security-perimeter-confidence/fr':
	moved_permanently('/lp/securite-perimetrique-confiance-perimetre/fr/');
	break;
	case 'lp/perimeter-security-perimeter-confidence/fr/confirm':
	moved_permanently('/lp/securite-perimetrique-confiance-perimetre/fr/confirm');
	break;
	case 'lp/perimeter-security-perimeter-confidence/de':
	moved_permanently('/lp/perimetersicherheit-perimetervertrauen/de/');
	break;
	case 'lp/perimeter-security-perimeter-confidence/de/confirm':
	moved_permanently('/lp/perimetersicherheit-perimetervertrauen/de/confirm/');
	break;
	case 'docs/big_shift_cloud_based_security.pdf':
	case 'docs/qualys-big-shift-to-cloud-based-security.pdf':
	moved_permanently('/forms/whitepapers/smb-shift-cloud-security/');
	break;
	case 'resources/german':
	case 'company/contacts/german':
	case 'company/contacts/germany':
	moved_permanently('/resources/#/type/all/topic/all/language/de');
	break;
	case 'videos/laws_of_vulerabilities_bh_2009':
	case 'videos/2009/the-laws-of-vulnerabilities-2.0':
	case 'laws':
	case 'research/vulnlaws/email':
	moved_permanently('https://blog.qualys.com/laws-of-vulnerabilities');
	break;
	case 'products/integrations/ids':
	moved_permanently('/research/opensource/');
	break;
	case 'products/demos/tour':
	case 'products/demos/tour/print':
	moved_permanently('/customers/success-stories/american-state-bank-relies-on-qualysguard/');
	break;
	case 'company/compref/subscribe':
	case 'company/compref':
	case 'company/communication-preferences':
	case 'marketing-communication-subscription-preference':
	moved_permanently('https://lps.qualys.com/subscription-preference.html');
	break;
	case 'sans':
	case 'docs/automating-sans-20-critical-security-controls-with-qualysguard.pdf':
	case 'docs/automating-sans-20-critical-security-controls-with-qualys.pdf':
	case 'forms/whitepapers/automating-sans-20-critical-controls-qualysguard':
	moved_permanently('/forms/whitepapers/automating-20-cis-critical-security-controls/');
	break;
	case 'docs/automating-sans-20-critical-security-controls-with-qualys-de.pdf':
	case 'forms/whitepapers/automating-sans-20-critical-controls-qualysguard/de':
	moved_permanently('/forms/whitepapers/automating-20-cis-critical-security-controls/de/');
	break;
	case 'docs/automating-sans-20-critical-security-controls-with-qualys-fr.pdf':
	case 'forms/whitepapers/automating-sans-20-critical-controls-qualysguard/fr':
	moved_permanently('/forms/whitepapers/automating-20-cis-critical-security-controls/fr/');
	break;
	case 'docs/apiuser_10282003a.pdf':
	moved_permanently('https://community.qualys.com/docs/DOC-4802');
	break;
	case 'compliance/overview':
	moved_permanently('/solutions/compliance/');
	break;
	case 'docs/qg_was_gsg.pdf':
	case 'docs/qg_was_gsg_v1.pdf':
	case 'docs/qg_was_gsg_jp.pdf':
	moved_permanently('/docs/qualys-was-getting-started-guide.pdf');
	break;
	case 'docs/qg_customer_ds.pdf':
	moved_permanently('/docs/qualys-overview-paper.pdf');
	break;
	case 'docs/customers/casestud/sodexo.pdf':
	moved_permanently('/customers/success-stories/sodexo-securing-enterprise-automated-vulnerability-management/');
	break;
	case 'videos/qualys-new-services-black-hat-usa-2011':
	case 'videos/qg-new-ui-preview':
	case 'videos/qg-new-ui-walkthru-3':
	moved_permanently('https://community.qualys.com/community/best_practices/videos');
	break;
	case 'videos/qualys-training-highlights':
	moved_permanently('/videos/2014/qualysguard/training/introduction-to-qualysguard-training-classes/');
	break;
	case 'forms/register-lead':
	moved_permanently('/forms/register-deal/');
	break;
	case 'enterprises/qualysguard/private-cloud/features':
	moved_permanently('/enterprises/qualysguard/private-cloud/#features');
	break;
	case 'docs/asset-management-quick-start-guide.pdf':
	case 'docs/qualysguard-asset-management-quick-start-guide.pdf':
	case 'docs/qualysguard-asset_management-quick-start-guide.pdf':
	moved_permanently('/docs/qualys-asset-management-quick-start-guide.pdf');
	break;
	case 'docs/version/8.1/qualys-asset_management-quick-start-guide.pdf':
	moved_permanently('/docs/version/8.1/qualys-asset-management-quick-start-guide.pdf');
	break;
	case 'cm-trial':
	moved_permanently('/forms/qualysguard/continuous-monitoring/');
	break;
	case 'forms/n2-net-security-assessment':
	case 'forms/tangible-security-assessment':
	moved_permanently('/suite/');
	break;
	case 'customers/casestud':
	case 'customers/casestudies':
	case 'success':
	case 'customers/success':
	case 'customers/success-stories/bank-of-the-west-major-financial-institution-protects-information':
	case 'customers/success-stories/it-security-compliance-foxwoods-not-rolling-dice':
	case 'customers/success-stories/cigna-finds-good-therapy':
	case 'customers/success-stories/sas-mitigating-it-vulnerability-risks-through-rapid-insight':
	moved_permanently('/customers/#success-stories');
	break;
	case 'forms/whitepapers/six-essential-elements-web-application-security/fr':
	moved_permanently('/forms/whitepapers/six-elements-essentiels-securite-applications-web/fr/');
	break;
	case 'forms/whitepapers/six-essential-elements-web-application-security/de':
	moved_permanently('/forms/whitepapers/sechs-kernelemente-der-webanwendungssicherheit/de/');
	break;
	case 'enterprises/qualysguard/policy-compliance/benefits':
	case 'products/qg_suite/policy_compliance':
	case 'enterprises/qualysguard/pc':
	case 'pc':
	case 'solutions/policy_compliance':
	moved_permanently('/enterprises/qualysguard/policy-compliance/');
	break;
	case 'heartbleedemea':
	moved_permanently('/forms/webcasts/heartbleed-emea/');
	break;
	case 'heartbleedwebcast':
	moved_permanently('/forms/webcasts/heartbleed/');
	break;
	case 'heartbleed':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2014/04/15/heartbleed-certificate-report');
	break;
	case 'docs/mds_enterprise_edition_getting_started_guide.pdf':
	moved_permanently('/resources/#/type/all/topic/mds/language/en');
	break;
	case 'enterprises/qualysguard/questionnaire-service':
	case 'qs':
	case 'questionnaire':
	case 'saq':
	moved_permanently('/enterprises/qualysguard/questionnaire/');
	break;
	case 'videos/2013/qualysguard/questionnaire/build-new-template':
	case 'videos/2013/qualysguard/questionnaire/overview':
	case 'videos/2013/qualysguard/questionnaire/designer':
	moved_permanently('https://community.qualys.com/community/qualysguard/qs');
	break;
	case 'forms/dummies':
	case 'forms/ebook/vulnerability_management_dummies/de':
	case 'vmfordummies':
	case 'vm4dummies':
	case 'forms/ebook/vulnerability_management_dummies':
	moved_permanently('/forms/ebook/vulnerability-management-for-dummies/');
	break;
	case 'forms/ebook/vulnerability_management_dummies/confirm':
	moved_permanently('/forms/ebook/vulnerability-management-for-dummies/confirm/');
	break;
	case 'docs/corporate_backgrounder.pdf':
	case 'company/background':
	moved_permanently('/company/');
	break;
	case 'docs/qualys_scanner_appliance.pdf':
	moved_permanently('/docs/qualys-scanner-appliance-user-guide.pdf');
	break;
	case 'lp/schnelles-einfaches-web-application-scanning/exists':
	moved_permanently('/lp/schnelles-einfaches-web-application-scanning/de/exists/');
	break;
	case 'lp/schnelles-einfaches-web-application-scanning/confirm':
	moved_permanently('/lp/schnelles-einfaches-web-application-scanning/de/confirm/');
	break;
	case 'lp/schnelles-einfaches-web-application-scanning':
	case 'lp/fast-simple-web-application-scanning/de':
	moved_permanently('/lp/schnelles-einfaches-web-application-scanning/de/');
	break;
	case 'lp/schnelles-einfaches-schwachstellenmanagement/exists':
	moved_permanently('/lp/schnelles-einfaches-schwachstellenmanagement/de/exists/');
	break;
	case 'lp/schnelles-einfaches-schwachstellenmanagement/confirm':
	moved_permanently('/lp/schnelles-einfaches-schwachstellenmanagement/de/confirm/');
	break;
	case 'lp/gestion-vulnerabilites-rapide-simple/exists':
	moved_permanently('/lp/gestion-vulnerabilites-rapide-simple/fr/exists/');
	break;
	case 'lp/analyse-rapide-simple-applications-web/exists':
	moved_permanently('/lp/analyse-rapide-simple-applications-web/fr/exists/');
	break;
	case 'lp/analyse-rapide-simple-applications-web/confirm':
	moved_permanently('/lp/analyse-rapide-simple-applications-web/fr/confirm/');
	break;
	case 'lp/analyse-rapide-simple-applications-web':
	case 'lp/fast-simple-web-application-scanning/fr':
	moved_permanently('/lp/analyse-rapide-simple-applications-web/fr/');
	break;
	case 'resources/rc_hipaa-hitech_compliance':
	moved_permanently('/solutions/compliance/hipaa-hitech/');
	break;
	case 'resources/rc_pci_dss_compliance':
	moved_permanently('/resources/#/type/all/topic/pci/language/en');
	break;
	case 'top4':
	case 'forms/sans-top-4-security-controls':
	case 'forms/browsercheck-business-edition-sans-top-4-security-controls':
	case 'forms/browsercheck-business-edition-sans-top-4-security-controls/de':
	case 'forms/browsercheck-business-edition-sans-top-4-security-controls/fr':
	moved_permanently('/forms/top-4-security-controls/');
	break;
	case 'top4/fr':
	case 'forms/quatre-controles-securite-majeurs-sans':
	case 'forms/sans-top-4-security-controls/fr':
	moved_permanently('/forms/quatre-controles-securite-majeurs/');
	break;
	case 'top4/de':
	case 'forms/sans-top-4-sicherheitskontrollen':
	case 'forms/sans-top-4-security-controls/de':
	moved_permanently('/forms/top-4-sicherheitskontrollen/');
	break;
	case 'continuous':
	case 'cm':
	moved_permanently('/enterprises/qualysguard/continuous-monitoring/');
	break;
	case 'forms/questionnaires':
	moved_permanently('/forms/qualysguard/questionnaire/');
	break;
	case 'docs/qualysguard_api_user_guide.pdf':
	moved_permanently('/docs/qualysguard-api-v1-user-guide.pdf');
	break;
	case 'docs/qualysguard_api_v2_user_guide.pdf':
	moved_permanently('/docs/qualysguard-api-v2-user-guide.pdf');
	break;
	case 'docs/was_api_user_guide.pdf':
	moved_permanently('/docs/qualysguard-was-api-user-guide.pdf');
	break;
	case 'forms/whitepapers/smb_shift_cloud_security':
	moved_permanently('/forms/whitepapers/smb-shift-cloud-security/');
	break;
	case 'forms/briefs/pci_requirements':
	moved_permanently('/forms/briefs/pci_scanning_requirements/');
	break;
	case 'docs/hipaa_guide.pdf':
	case 'docs/hipaa_security_final_rule_214-2003.pdf':
	case 'forms/briefs/hipaa':
	case 'forms/briefs/hipaa_compliance':
	case 'forms/guides/hipaa':
	moved_permanently('/forms/whitepapers/hipaa-compliance/');
	break;
	case 'responding-to-risk':
	case 'forms/whitepapers/responding_to_risk':
	moved_permanently('/forms/whitepapers/responding-to-risk/');
	break;
	case 'docs/glba_guide.pdf':
	case 'forms/briefs/glba':
	case 'forms/briefs/glba_compliance':
	case 'forms/guides/glba':
	case 'glbaforms/mail_trial.php':
	moved_permanently('/forms/whitepapers/glba-compliance/');
	break;
	case 'forms/guides/fisma':
	moved_permanently('/forms/guides/fisma_compliance/');
	break;
	case 'forms/guides/7_mistakes_of_compliance':
	case 'forms/guides/pass_it_audit':
	case 'docs/narrowing-security-gap-automated-configuration-assessment.pdf':
	moved_permanently('/forms/whitepapers/narrowing-security-gap-automated-configuration-assessment/');
	break;
	case 'products/qgcons':
	case 'partners/qgcon':
	case 'partners/consult':
	case 'consultant':
	case 'partners/consultant':
	case 'docs/qg_con_ds.pdf':
	case 'docs/qg_con_ds_de.pdf':
	case 'docs/qg_con_ds_es.pdf':
	case 'docs/qg_con_ds_fr.pdf':
	case 'docs/qg_con_ds_fr.pdf':
	case 'docs/qg_consultant_faqs.pdf':
	case 'docs/qg_consultant_jp.pdf':
	moved_permanently('/partners/qualysguard-consultant/');
	break;
	case 'partners/qualysguard-consultant/features':
	moved_permanently('/partners/qualysguard-consultant/#cloud-platform');
	break;
	case 'docs/qgnac_ds_mech.pdf':
	case 'docs/dsw.pdf':
	moved_permanently('/partners/');
	break;
	case 'docs/frost-and-sullivan-vm2013-report.pdf':
	moved_permanently('/docs/qualys-frost-sullivan-2013-global-vulnerability-management-market-leadership-award.pdf');
	break;
	case 'docs/qg_pci_gsg.pdf':
	moved_permanently('/docs/qualys-pci-compliance-getting-started-guide.pdf');
	break;
	case 'partners/pci/bepartner':
	case 'partners/bepartner':
	moved_permanently('/forms/become-partner/');
	break;
	case 'support/online/inqform':
	moved_permanently('/forms/contact-support/');
	break;
	case 'company/contacts/contact_form':
	case 'pre-chat':
	case 'forms/contact-sales':
	moved_permanently('/company/contacts/');
	break;
	case 'lumension':
	moved_permanently('/forms/partners/lumension/?leadsource=15511024');
	break;
	case 'docs/bfm.wpl':
	moved_permanently('http://bfmbusiness.bfmtv.com/emission/');
	break;
	case 'docs/crn_germany_pfc-dec2007.jpg':
	moved_permanently('http://www.crn.de/markt/artikel-33598.html');
	break;
	case 'docs/customers/casestud/firstbank.php':
	moved_permanently('/customers/success-stories/first-bank-and-trust/');
	break;
	case 'docs/customers/casestud/rightnow.php':
	moved_permanently('/customers/success-stories/risk-reduction-rightnow-technologies-finds-better-way/');
	break;
	case 'docs/customers/casestud/rrdonnelly.php':
	moved_permanently('/customers/casestudies/view/?id=rrdonnelley');
	break;
	case 'docs/howard_schmidt_announce2.rm':
	case 'docs/howard_schmidt_announce201.rm':
	moved_permanently('https://cdn2.qualys.com/audio/howard-schmidt-joins-qualys-board.mp3');
	break;
	case 'newsroom/rfi_magazinedunet_28_09_2003_03118073.mpa':
	case 'docs/newsroom/rfi_magazinedunet_28_09_2003_03118073.mpa':
	moved_permanently('https://cdn2.qualys.com/audio/2003/09/28/rfi-magazine-du-net-interview-nicolas-appert.mp3');
	break;
	case 'mp3s/qualysnewvpofengineering.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/2008/03/12/ken-okumura-new-vp-of-engineering-at-qualys.mp3');
	break;
	case 'mp3s/qualys093008_pci_dss.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/Qualys093008_PCI_DSS.mp3');
	break;
	case 'mp3s/qualysapr82008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysApr82008.mp3');
	break;
	case 'mp3s/qualysaugust122008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysAugust122008.mp3');
	break;
	case 'mp3s/qualysaugust14.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysAugust14.mp3');
	break;
	case 'mp3s/qualysdec112007.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysDec112007.mp3');
	break;
	case 'mp3s/qualysdecember0908.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysDecember0908.mp3');
	break;
	case 'mp3s/qualysfeb102009.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysFeb102009.mp3');
	break;
	case 'mp3s/qualysfeb122008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysFeb122008.mp3');
	break;
	case 'mp3s/qualysjan132009.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysJan132009.mp3');
	break;
	case 'mp3s/qualysjan82008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysJan82008.mp3');
	break;
	case 'mp3s/qualysjuly082008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysJuly082008.mp3');
	break;
	case 'mp3s/qualysjuly10.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysJuly10.mp3');
	break;
	case 'mp3s/qualysjune102008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysJune102008.mp3');
	break;
	case 'mp3s/qualysmar102009.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysMar102009.mp3');
	break;
	case 'mp3s/qualysmar112008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysMar112008.mp3');
	break;
	case 'mp3s/qualysmay132008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysMay132008.mp3');
	break;
	case 'mp3s/qualysnewvpofengineering.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysNewVPofEngineering.mp3');
	break;
	case 'mp3s/qualysnov132007.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysNov132007.mp3');
	break;
	case 'mp3s/qualysnovember1108.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysNovember1108.mp3');
	break;
	case 'mp3s/qualysocto092007.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysOcto092007.mp3');
	break;
	case 'mp3s/qualysoctober1408.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysOctober1408.mp3');
	break;
	case 'mp3s/qualyssept112007.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysSept112007.mp3');
	break;
	case 'mp3s/qualysseptember92008.mp3':
	moved_permanently('https://cdn2.qualys.com/audio/security-alerts/QualysSeptember92008.mp3');
	break;
	case 'docs/qualysguard_downtime_notification.ics':
	case 'docs/qualysguard_emea_scheduled_downtime.ics':
	case 'docs/qualysguard_eu_scheduled_serivce_downtime.ics':
	case 'docs/qualysguard_scheduled_down_time_notification_-_emea_platform.ics':
	case 'docs/qualysguard_scheduled_downtime_notification_--_us_platform.ics':
	case 'docs/qualysguard_scheduled_service_downtime.ics':
	case 'platform-status':
	moved_permanently('https://status.qualys.com');
	break;
	case 'docs/qualysguard_integration_with_cyberark_-_solution_brief.pptx':
	moved_permanently('/docs/qualysguard-integration-cyber-ark-pim-suite.pdf');
	break;
	case 'docs/csoi_london2007.zip':
	case 'archives/cso-interchange-london-2007-presentations.zip':
	moved_permanently('/2007/11/27/cso-interchange-london-2007-presentations.zip');
	break;
	case 'docs/downloads/detector.exe':
	case 'archives/detector.zip':
	case '2001/09/18/nimda-worm/detector.zip':
	moved_permanently('/2001/09/18/nimda-worm/nimda-worm-detector.zip');
	break;
	case 'form_remoteshell.html':
	case 'forms/remoteshell.html':
	case 'docs/downloads/rst.tgz':
	case 'archives/rst.tgz':
	moved_permanently('/2001/09/05/remote-shell-trojan/rst.tgz');
	break;
	case 'docs/sample-code.zip':
	case 'archives/sample-code.zip':
	case '2007/03/30/qualysguard-msp-api/sample-code.zip':
	moved_permanently('/2009/09/14/qualysguard-api/sample-code.zip');
	break;
	case 'enterprises/qualysguard/pricing':
	case 'smb/qualysguard/express/pricing':
	case 'smb/qualysguard/express-lite/pricing':
	moved_permanently('/qualysguard-subscription-plans/');
	break;
	case 'browsercheckblog':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2013/09/30/browsercheck-20-adds-automatic-daily-scanning-and-improved-macos-support');
	break;
	case 'products/demos/movies/qualys_nomusic.swf':
	case 'videos/2013/qualys-company-overview':
	moved_permanently('/videos/platform/cloud-security-platform/');
	break;
	case 'videos/qualysguard-express-lite-pci-compliance':
	moved_permanently('/videos/2013/qualysguard/express-lite/pci-compliance/');
	break;
	case 'videos/qualysguard-express-lite-vulnerability-management':
	moved_permanently('/videos/2013/qualysguard/express-lite/vulnerability-management/');
	break;
	case 'videos/qualysguard-express-lite-web-application-scanning':
	moved_permanently('/videos/2013/qualysguard/express-lite/web-application-scanning/');
	break;
	case 'success/westminster':
	moved_permanently('/customers/success-stories/university-westminster-maintaining-security-protecting-infrastructure-assets/');
	break;
	case 'lite':
	moved_permanently('/smb/qualysguard/express-lite/');
	break;
	case 'company/events/tradeshows/blackhat11':
	case 'company/events/tradeshows/2012/black-hat':
	case 'company/events/tradeshows/2012/black-hat/agenda':
	case 'company/events/tradeshows/2012/black-hat/invite':
	case 'company/events/tradeshows/2013/blackhat':
	case 'company/events/tradeshows/2013/blackhat/reception':
	case 'company/events/tradeshows/2013/blackhat/reception/confirm':
	case 'company/events/tradeshows/2014/blackhat':
	case 'company/events/tradeshows/2014/blackhat/reception':
	case 'company/events/tradeshows/2014/blackhat/reception/confirm':
	case '2016/blackhat/day1':
	case '2016/blackhat/day2':
	case '2017/blackhat':
	moved_permanently('/blackhat');
	break;
	case 'blogs':
	case 'blog':
	moved_permanently('https://community.qualys.com/blogs');
	break;
	case 'lp/prevent-hackers-breaking-web-applications/de':
	case 'lp/unlimited-application-scanning-cost-effective-solution/de':
	moved_permanently('/lp/hindern-hacker-einzudringen-webanwendungen/de/');
	break;
	case 'lp/quickly-eliminate-security-threats-detailed-remediation-instructions/de':
	moved_permanently('/lp/schnelle-beseitigung-sicherheitsbedrohungen-detaillierten-anweisungen/de/');
	break;
	case 'lp/protect-organization-against-internet-attack-fast-easy/de':
	case 'lp/schützen-unternehmen-internetangriffen-schneller-leichter/de':
	moved_permanently('/lp/schutzen-unternehmen-internetangriffen-schneller-leichter/de/');
	break;
	case 'lp/unlimited-application-scanning-cost-effective-solution/fr':
	case 'lp/prevent-hackers-breaking-web-applications/fr':
	case 'lp/empechez-pirates-d\'accéder-applications-web/fr':
	moved_permanently('/lp/empechez-pirates-dacceder-applications-web/fr/');
	break;
	case 'lp/quickly-eliminate-security-threats-detailed-remediation-instructions/fr':
	case 'lp/éliminez-rapidement-menaces-sécurité-instructions-remédiation-détaillées/fr':
	moved_permanently('/lp/eliminez-rapidement-menaces-securite-instructions-remediation-detaillees/fr/');
	break;
	case 'lp/protect-organization-against-internet-attack-fast-easy/fr':
	case 'lp/protégez-entreprise-contre-attaques-internet-désormais-rapide-simple/fr':
	moved_permanently('/lp/protegez-entreprise-contre-attaques-internet-desormais-rapide-simple/fr/');
	break;
	case 'forms/whitepapers/winning_pci_compliance_battle/fr':
	moved_permanently('/forms/whitepapers/gagner-bataille-conformite-pci/fr/');
	break;
	case 'forms/whitepapers/winning_pci_compliance_battle/de':
	moved_permanently('/forms/whitepapers/gewinnen-kampf-um-pci-compliance/de/');
	break;
	case 'lp/unlimited-application-scanning-cost-effective-solution':
	moved_permanently('/lp/prevent-hackers-breaking-web-applications/');
	break;
	case 'lp/unlimited-application-scanning-cost-effective-solution/uk':
	moved_permanently('/lp/prevent-hackers-breaking-web-applications/uk/');
	break;
	case 'smb':
	moved_permanently('/smb/qualysguard/express-lite/');
	break;
	case 'docs/qualysguard-asset-management-api-user-guide.pdf':
	moved_permanently('/docs/qualys-asset-management-tagging-api-user-guide.pdf');
	break;
	case 'docs/qualysguard_eval.pdf':
	case 'docs/qualysguard_eval_newui.pdf':
	moved_permanently('/docs/qualys-evaluators-guide.pdf');
	break;
	case 'docs/qualysguard_policy_compliance.pdf':
	case 'docs/qualysguard_policy_compliance_newui.pdf':
	moved_permanently('/docs/qualys-policy-compliance-guide.pdf');
	break;
	case 'tour':
	case 'docs/qualysguard_quick_tour.pdf':
	case 'docs/qualysguard_quick_tour_newui.pdf':
	case 'docs/qualysguard-quick-tour.pdf':
	moved_permanently('/docs/qualys-quick-tour.pdf');
	break;
	case 'docs/qualysguard_rollout.pdf':
	case 'docs/qualysguard_rollout_newui.pdf':
	case 'docs/qualys-rollout-guide.pdf':
	moved_permanently('/documentation');
	break;
	case 'docs/archer_in.pdf':
	moved_permanently('/partners/integration/');
	break;
	case 'mod-ssl-bug':
	moved_permanently('https://blog.qualys.com/ssllabs/2019/01/22/mod_ssl-bug-and-ssl-labs-renegotiation-test');
	break;
	case 'images/forms/right_winning.gif':
	moved_permanently('/asset/image/whitepaper/winning-pci-compliance-battle.png');
	break;
	case 'enterprises/qualysguard/web-application-scanning/benefits':
	moved_permanently('/enterprises/qualysguard/web-application-scanning/features/');
	break;
	case 'forms/remoteshellb.html':
	case 'forms/remoteshellb.html.':
	case 'docs/downloads/rstb.tgz':
	case 'research/rstb.tgz':
	case 'archives/rstb.tgz':
	moved_permanently('/2002/01/09/remote-shell-trojan-b/rstb.tgz');
	break;
	case 'company/compref/confirm':
	moved_permanently('/marketing-communication-subscription-preference/confirm/');
	break;
	case 'forms/webcasts/pci_web_applications_scanning':
	case 'forms/webcasts/web2_0_security_threats':
	case 'forms/webcasts/addressing_compliance_challenges':
	case 'forms/webcasts/developing_vulnerability_management_habit':
	case 'forms/webcasts/effective_workflow_fixing_network_vulnerabilities':
	case 'forms/webcasts/how_one_company_conquered_audit_challenge':
	case 'forms/webcasts/on_demand_vulnerability_management':
	case 'forms/webcasts/proactive_vulnerability_management':
	case 'forms/webcasts/tbs_fasttrack_vulnerability_management':
	case 'forms/webcasts/tbs_it_grc':
	case 'forms/webcasts/tbs_pci_compliance_2008':
	case 'forms/webcasts/theres_a_hole_in_your_network':
	case 'forms/webcasts/winning_pci_compliance_battle':
	case 'forms/webcasts/application-security-from-beginning-to-end':
	case 'forms/webcasts/dont_dread_network_audit':
	case 'webcast-archives':
	case 'forms/webcasts/heartbleed':
	case 'forms/webcasts/heartbleed-emea':
	moved_permanently('/webcasts/');
	break;
	case 'news-patching/fr':
	moved_permanently('/company/newsroom/news-releases/france/2010-06-21/');
	break;
	case 'docs/customers/casestud/vgz.pdf':
	moved_permanently('/customers/success-stories/vit-securing-system-vulnerabilities-from-network-to-web/');
	break;
	case 'trials/de':
	moved_permanently('/free-tools-trials/de/');
	break;
	case 'browsercheck/de':
	moved_permanently('/free-tools-trials/browsercheck/de/');
	break;
	case 'secure/de':
	moved_permanently('/free-tools-trials/security-at-your-fingertips/de/');
	break;
	case 'trials/fr':
	moved_permanently('/free-tools-trials/fr/');
	break;
	case 'browsercheck/fr':
	moved_permanently('/free-tools-trials/browsercheck/fr/');
	break;
	case 'secure/fr':
	moved_permanently('/free-tools-trials/security-at-your-fingertips/fr/');
	break;
	case 'community':
	moved_permanently('https://community.qualys.com/welcome');
	break;
	case 'ssl':
	case 'sslaudit':
	case 'ssllabs':
	moved_permanently('https://www.ssllabs.com/ssltest/');
	break;
	case 'suite':
	case 'products':
	case 'enterprises':
	case 'products/qg_suite':
	case 'docs/qg_enterprise_ds.pdf':
	case 'docs/qg_enterprise_ch.pdf':
	case 'docs/qg_enterprise_ds_de.pdf':
	case 'docs/qg_enterprise_ds_fr.pdf':
	case 'docs/qg_enterprise_ds_uk.pdf':
	case 'docs/qg_enterprise_jp.pdf':
	moved_permanently('/enterprises/qualysguard/');
	break;
	case 'pr/release_01_09_02.html':
	case 'pr/release_09_05_01.html':
	moved_permanently('/company/newsroom/news-releases/');
	break;
	case 'company/newsroom/news-releases/usa/2009-06-28':
	moved_permanently('/company/newsroom/news-releases/usa/2009-06-29x/');
	break;
	case 'company/newsroom/news-releases/usa/2008-11-05':
	moved_permanently('/company/newsroom/news-releases/usa/2008-11-05b/');
	break;
	case 'freescan-announcement':
	moved_permanently('/company/newsroom/news-releases/usa/2013-02-25-qualys-expands-its-popular-freescan-service-/');
	break;
	case 'browsercheck-admin-announcement':
	moved_permanently('/company/newsroom/news-releases/usa/2013-02-25-qualys-enhances-browsercheck-to-help-businesses-and-individuals-continuously-monitor-browsers-software-os-settings-and-security-patches-on-users-pcs/');
	break;
	case 'was-30-announcement':
	moved_permanently('/company/newsroom/news-releases/usa/2013-02-25-qualys-announces-web-application-scanning-was-30-/');
	break;
	case 'connector-for-amazon-announcement':
	moved_permanently('/company/newsroom/news-releases/usa/2013-02-25-qualys-extends-vulnerability-management-solution-to-customers-with-qualysguard-connector-for-amazon-web-services/');
	break;
	case 'amazon':
	case 'aws':
	case 'ec2':
	case 'vpc':
	moved_permanently('/enterprises/qualysguard-amazon-ec2-vpc/');
	break;
	case 'was3.0':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2013/02/25/announcing-was-30-with-malware-detection-and-burp-suite-integration');
	break;
	case 'customers/microsoft':
	case 'customers/success-stories/reigning-in-global-web-application-security-risk-at-microsoft':
	moved_permanently('/customers/success-stories/reining-in-global-web-application-security-risk-at-microsoft/');
	break;
	case 'holiday':
	moved_permanently('/forms/qualysguard/secure-seal/?leadsource=2398187');
	case 'seal':
	case 'secure':
	case 'secure-seal':
	moved_permanently('/enterprises/qualysguard/secure-seal/');
	break;
	case 'iviz-partner':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2013/02/13/add-pen-testing-to-web-app-scanning-for-better-security');
	break;
	case 'brinks-anticipe-les-audits-sécurité-du-groupe-avec-qualys':
	moved_permanently('/customers/success-stories/brinks-anticipe-les-audits-securite-du-groupe-avec-qualys/');
	break;
	case 'docs/qualysguard_consultant_virtual_scanner_newui.pdf':
	case 'docs/qualysguard_enterprise_virtual_scanner_newui.pdf':
	case 'docs/qualysguard_consultant_virtual_scanner.pdf':
	case 'docs/qualysguard_enterprise_virtual_scanner.pdf':
	case 'docs/qualysguard_virtual_scanner_amazon.pdf':
	case 'docs/qualysguard_virtual_scanner_vmware.pdf':
	case 'docs/qualysguard-virtual-scanner.pdf':
	moved_permanently('/docs/qualys-virtual-scanner-appliance-user-guide.pdf');
	break;
	case 'forms/ebook/itpcfordummies':
	case 'itpcfordummies':
	case 'itpolicyfordummies':
	case 'pc4dummies':
	case 'pcfordummies':
	moved_permanently('/forms/ebook/it-policy-compliance-for-dummies/');
	break;
	case 'docs/idc_vendor_shares_2009':
	moved_permanently('docs/idc_vendor_shares_2009.pdf');
	break;
	case 'careers/openings':
	case 'company/careers':
	case 'company/careers/admin':
	case 'company/careers/engineering':
	case 'company/careers/it':
	case 'company/careers/marketing':
	case 'company/careers/support':
	moved_permanently('/careers/');
	break;
	case 'forms/asset-tagging':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2012/07/25/introducing-qualysguard-dynamic-asset-tagging-and-management');
	break;
	case 'nac':
	moved_permanently('/docs/QGNAC_DS_MECH.pdf');
	break;
	case 'express':
	case 'docs/expressds_me.qxd.pdf':
	moved_permanently('/smb/qualysguard/express/');
	break;
	case 'investor':
	moved_permanently('https://investor.qualys.com/index.cfm');
	break;
	case 'continuous':
	case 'convergence':
	case 'cybercop':
	case 'form_top20.html':
	case 'form_trial.html':
	case 'forms/maintrial.htm':
	case 'forms/maintrial.html':
	case 'forms/nsguideh_488.php':
	case 'forms/qualysguard/secure-seal':
	case 'forms/secure-seal':
	case 'forms/secureseal':
	case 'forms/secureseal/eu':
	case 'forms/trial.html':
	case 'forms/trial_snmp.html':
	case 'forms/trials/gosecure':
	case 'forms/trials/qg':
	case 'forms/trials/qg/home':
	case 'forms/trials/qualysguard':
	case 'forms/trials/qualysguard/de':
	case 'forms/trials/qualysguard/enterprise':
	case 'forms/trials/qualysguard/express':
	case 'forms/trials/qualysguard/fr':
	case 'forms/trials/qualysguard/lite':
	case 'forms/trials/qualysguard/lite/ru':
	case 'forms/trials/qualysguard_trial':
	case 'forms/trials/qualysguard_trial/fr':
	case 'forms/trials/qualysguard_trial_sas70':
	case 'forms/trials/secure-seal':
	case 'forms/trials/secure_seal':
	case 'forms/trials/secure_seal/de':
	case 'forms/trials/secure_seal/fr':
	case 'forms/trials/suite':
	case 'forms/trials/suite/de':
	case 'forms/trials/suite/fr':
	case 'fr':
	case 'freetrial':
	case 'glba':
	case 'iis':
	case 'products/trials':
	case 'quidscor':
	case 'saastrial':
	case 'support/online/seal4cust':
	case 'testreseau':
	case 'trial/de':
	case 'trial/fr':
	case 'trials':
	case 'worm':
	case 'tryit':
	case 'tryitfree':
	moved_permanently('/free-trial/');
	break;
	case 'forms/threatprotect':
	moved_permanently('/free-trial/#/tp');
	break;
	case 'forms/cloud-agent':
	case 'forms/cloud-agent-platform':
	case 'forms/trials/cloud-agent':
	case 'forms/cloud-agent-platform/de':
	case 'forms/trials/cloud-agent/de':
	case 'forms/trials/cloud-agent/fr':
	moved_permanently('/free-trial/#/ca');
	break;
	case 'forms/qualysguard/continuous-monitoring':
	case 'forms/trials/continuous-monitoring':
	moved_permanently('/free-trial/#/cm');
	break;
	case 'forms/google/pci_trial':
	case 'forms/qualysguard/pci-compliance':
	case 'forms/trials/pci-compliance':
	case 'forms/trials/pci_compliance':
	case 'forms/trials/pci_compliance/de':
	case 'forms/trials/pci_compliance/fr':
	case 'forms/trials/pci_compliance/ru':
	case 'forms/trials/qualysguard_pci_trial':
	case 'forms/trials/qualysguard_pci_trial/ppi':
	case 'forms/wp/pci':
	case 'pci-trial':
	moved_permanently('/free-trial/#/pci');
	break;
	case 'forms/qualysguard/questionnaire':
	case 'forms/trials/security-assessment-questionnaire':
	moved_permanently('/free-trial/#/saq');
	break;
	case 'forms/qualysguard/web-application-firewall':
	case 'forms/trials/web-application-firewall':
	moved_permanently('/free-trial/#/waf');
	break;
	case 'forms/trials/web_application_scanning':
	case 'forms/trials/web_application_scanning/de':
	case 'forms/trials/web_application_scanning/fr':
	case 'forms/was-dec2013':
	case 'forms/was-dec2013/de':
	case 'forms/was-dec2013/fr':
	case 'forms/web-application-firewall':
	case 'trywas':
	moved_permanently('/free-trial/#/was');
	break;
	case 'forms/trials/vulnerability-management-test-network-security/de':
	case 'forms/trials/vulnerability_management/de':
	case 'forms/trials/vulnerability-management-test-network-security/fr':
	case 'forms/trials/vulnerability_management/fr':
	case 'forms/trials/vulnerability-management-test-network-security':
	case 'forms/trials/vulnerability_management':
	moved_permanently('/free-trial/#/vm');
	break;
	case 'forms/trials/stopmalware/fr':
	case 'forms/trials/stopmalware/de':
	case 'stopmalware':
	case 'stopmalware.':
	case 'forms/trials/stopmalware':
	moved_permanently('/free-trial/#/mds');
	break;
	case 'stop-malware':
	moved_permanently('/free-trial/?leadsource=5718449#/mds');
	break;
	case 'forms/trials/policy_compliance/fr':
	case 'forms/trials/policy_compliance/de':
	case 'forms/trials/policy_compliance':
	moved_permanently('/free-trial/#/pc');
	break;
	case 'forms/qualysguard-consultant-edition':
	case 'forms/trials/qualysguard-consultant':
	case 'forms/trials/consultant':
	moved_permanently('/free-trial/#/consultant');
	break;
	case 'forms/asset-inventory':
	case 'lp/rsac-2016-assetview':
	case 'lp/see-search-comp/confirm':
	case 'lp/see-search-comp':
	case 'lp/see-search/confirm':
	case 'lp/see-search':
	moved_permanently('/free-trial/#/ai');
	break;
	case 'avtrial':
	moved_permanently('/free-trial/?utm_source=video&utm_campaign=demand-gen&utm_term=assetview&utm_content=trial&leadsource=344553985#ai');
	break;
	case 'gsm-fr':
	moved_permanently('/free-trial/?utm_source=global_security_mag&utm_medium=display&utm_campaign=demand-gen&utm_term=threatprotect&utm_content=trial&leadsource=34455192#/tp');
	break;
	case 'forms/trials/qualysguard-zero-day':
	moved_permanently('/forms/trials/zero-day/');
	break;
	case 'wannacry-trial':
	case 'wannacry-30days':
	moved_permanently('/forms/trials/wannacry/');
	break;
	case 'try-qualys':
	moved_permanently('/free-trial/?leadsource=1184213#/vm');
	break;
	case 'decisioninformatique':
	moved_permanently('/free-trial/?lsid=6913');
	break;
	case '1tuesday':
	moved_permanently('/free-trial/?utm_source=qualys&utm_medium=event&utm_campaign=demand-gen&utm_content=trial&leadsource=34125371');
	break;
	case 'forms/qualysguard/continuous-monitoring/confirm':
	case 'forms/qualysguard/pci-compliance/confirm':
	case 'forms/qualysguard/questionnaire/confirm':
	case 'forms/qualysguard/secure-seal/confirm':
	case 'forms/qualysguard/web-application-firewall/confirm':
	case 'forms/trials/consultant/confirm':
	case 'forms/trials/pci-compliance/confirm':
	case 'forms/trials/qualysguard-consultant/confirm':
	case 'forms/trials/qualysguard/confirm':
	case 'forms/trials/qualysguard/de/confirm':
	case 'forms/trials/qualysguard/enterprise/confirm':
	case 'forms/trials/qualysguard/express/confirm':
	case 'forms/trials/qualysguard/fr/confirm':
	case 'forms/trials/qualysguard/lite/confirm':
	case 'forms/trials/qualysguard/lite/ru/confirm':
	case 'forms/trials/qualysguard_trial/confirm':
	case 'forms/trials/secure-seal/confirm':
	case 'forms/trials/security-assessment-questionnaire/confirm':
	case 'forms/trials/stopmalware/confirm':
	case 'forms/trials/web-application-firewall/confirm':
	moved_permanently('/free-trial/confirm/');
	break;
	case 'zero-day-offense':
	case 'forms/whitepapers/zero-day-offense-vm':
	moved_permanently('/forms/whitepapers/zero-day-offense-vulnerability-management/');
	break;
	case 'free-audit':
	moved_permanently('/community-edition/?leadsource=5718449#/freescan');
	break;
	case 'free-browsercheck':
	moved_permanently('/forms/browsercheck-business-edition/?leadsource=5718449');
	break;
	case 'free-tools':
	moved_permanently('/free-tools-trials/?leadsource=5718449');
	break;
	case 'rv10':
	moved_permanently('/research/top10/');
	break;
	case 'zero-day':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2012/02/27/using-qualysguard-70-idefense-threat-intelligence-and-zero-day-risk-analyzer');
	break;
	/*
	 * begin redirects for 2012-03-01 site launch
	 */
	case 'resources/datasheets':
	moved_permanently('/resources/#/type/datasheet/topic/all/language/en');
	break;
	case 'resources/guides':
	case 'resources/user_guides':
	moved_permanently('/resources/#/type/guide/topic/all/language/en');
	break;
	case 'docs':
	case 'docs/4_steps_to_automating_it_security_compliance.pdf':
	case 'docs/sb1386_guide_ver_kr5.pdf':
	case 'docs/it_grcm_guide.pdf':
	case 'docs/making_website_safe.pdf':
	case 'docs/nerc-brief.pdf':
	case 'docs/nsguide.pdf':
	case 'docs/patch-acceleration-for-stronger-security.pdf':
	case 'docs/qg_ent_pub_ds.pdf':
	case 'docs/qg_mds_ds.pdf':
	case 'docs/qg_pci_ds.pdf':
	case 'docs/qg_suite_brochure_it.pdf':
	case 'docs/qg_suite_brochure_tr.pdf':
	case 'docs/qg_vm_for_ent_ds.pdf':
	case 'docs/qg_vm_for_exp_ds.pdf':
	case 'docs/qg_was_ds.pdf':
	case 'docs/qg_was_guide.pdf':
	case 'docs/qualys_qgsa_3120_a1_ds.pdf':
	case 'docs/qualys_secure_seal.pdf':
	case 'docs/qualysguard-continuous-management-datasheet.pdf':
	case 'docs/qualysguard-scanner-appliance-qgsa-3120-a1-specifications.pdf':
	case 'docs/top-10-reports.pdf':
	case 'docs/whitepapers/4_steps_to_automating_it_security_compliance.pdf':
	case 'docs/whitepapers/it_grcm_guide.pdf':
	case 'docs/whitepapers/justifying_it_security.pdf':
	case 'docs/whitepapers/keep-your-pcs-safe-while-surfing-the-web.pdf':
	case 'docs/whitepapers/making_website_safe.pdf':
	case 'docs/whitepapers/nerc-brief.pdf':
	case 'docs/whitepapers/patch-acceleration-for-stronger-security.pdf':
	case 'docs/whitepapers/qualys-security-in-the-cloud-eu.pdf':
	case 'docs/whitepapers/qualys-security-in-the-cloud-eu.pdf':
	case 'docs/whitepapers/qualys-security-in-the-cloud.pdf':
	case 'docs/whitepapers/responding_to_risk.pdf':
	case 'events/guides_wp':
	case 'events/webcasts':
	case 'forms/briefs/nerc':
	case 'forms/briefs/nerc_compliance':
	case 'forms/guide_228.php':
	case 'forms/guides/automate_data_compliance_grcm':
	case 'forms/guides/network_security':
	case 'forms/guides/sb1386':
	case 'forms/guides/sb1386_compliance':
	case 'forms/guides/strengthening_network_security_vm':
	case 'forms/guides/top_10_reports':
	case 'forms/guides/top_10_reports_managing_vulnerabilities':
	case 'forms/guides/was_minimize_risk':
	case 'forms/nsguideh_376.php':
	case 'forms/whitepapers/4_key_steps':
	case 'forms/whitepapers/automate-data-compliance-grcm':
	case 'forms/whitepapers/compliance_auditing_cloud':
	case 'forms/whitepapers/database_assessment':
	case 'forms/whitepapers/justifying_it_security':
	case 'forms/whitepapers/keep-your-pcs-safe-while-surfing-web':
	case 'forms/whitepapers/nerc-compliance':
	case 'forms/whitepapers/operationalizing_security_policy_compliance':
	case 'forms/whitepapers/patch-acceleration-for-stronger-security':
	case 'forms/whitepapers/responding-to-risk':
	case 'forms/whitepapers/website_qualys_secure':
	case 'products/datasec/whitepaper':
	case 'forms/nsguideh_439.php':
	case 'docs/Skandia.pdf':
	case 'docs/2005-06-24-chicago-polling-results.pdf':
	case 'enterprises/qualysguard/resources':
	case 'forms/techwhite_133.php':
	case 'forms/guides/vm_buyers_checklist/--q-leadsource--e-156187':
	case 'docs/qg_ent_datasheet_german.pdf':
	case 'docs/qg_msp_datasheet_german.pdf':
	case 'docs/qualys-vernier-solution.pdf':
	case 'docs/vm-compliance-guide.pdf':
	moved_permanently('/resources/');
	break;
	case 'docs/patch-acceleration-for-stronger-security-de.pdf':
	case 'docs/qg_mal_ds_de.pdf':
	case 'docs/qg_pc_ds_de.pdf':
	case 'docs/qg_pci_ds_de.pdf':
	case 'docs/qg_suite_brochure_de.pdf':
	case 'docs/qg_vm_for_ent_ds_de.pdf':
	case 'docs/qg_vm_for_exp_ds_de.pdf':
	case 'docs/qg_was_ds_de.pdf':
	case 'docs/qualys-top-10-reports-vm-de.pdf':
	case 'docs/qualys-was-guide-2011-de.pdf':
	case 'docs/qualys_secure_seal_de.pdf':
	case 'docs/whitepapers/keep-your-pcs-safe-while-surfing-the-web-de.pdf':
	case 'docs/whitepapers/patch-acceleration-for-stronger-security-de.pdf':
	case 'docs/whitepapers/qualys-security-in-the-cloud-de.pdf':
	case 'docs/whitepapers/qualys-top-10-reports-vm-de.pdf':
	case 'docs/whitepapers/qualys-was-guide-2011-de.pdf':
	case 'forms/whitepapers/schneller-patchen-fuer-mehr-sicherheit/de':
	case 'forms/whitepapers/top-10-reports-schwachstellenmanagement/de':
	case 'forms/whitepapers/web-application-scanning-angriffsrisiko-minimieren/de':
	moved_permanently('/resources/#/type/all/topic/all/language/de');
	break;
	case 'docs/patch-acceleration-for-stronger-security-fr.pdf':
	case 'docs/qg_mal_ds_fr.pdf':
	case 'docs/qg_pc_ds_fr.pdf':
	case 'docs/qg_pci_ds_fr.pdf':
	case 'docs/qg_suite_brochure_fr.pdf':
	case 'docs/qg_vm_for_ent_ds_fr.pdf':
	case 'docs/qg_vm_for_exp_ds_fr.pdf':
	case 'docs/qg_was_ds_fr.pdf':
	case 'docs/qualys-top-ten-reports-fr.pdf':
	case 'docs/qualys-was-guide-fr.pdf':
	case 'docs/qualys_secure_seal_fr.pdf':
	case 'docs/whitepapers/keep-your-pcs-safe-while-surfing-the-web-fr.pdf':
	case 'docs/whitepapers/patch-acceleration-for-stronger-security-fr.pdf':
	case 'docs/whitepapers/qualys-security-in-the-cloud-fr.pdf':
	case 'docs/whitepapers/qualys-top-ten-reports-fr.pdf':
	case 'docs/whitepapers/qualys-was-guide-fr.pdf':
	case 'forms/whitepapers/10-principaux-rapports-gerer-vulnerabilites/fr':
	case 'forms/whitepapers/acceleration-deploiement-patch-renforcer-securite/fr':
	case 'forms/whitepapers/analyse-applications-web-minimiser-risques-attaques/fr':
	moved_permanently('/resources/#/type/all/topic/all/language/fr');
	break;
	case 'docs/qg_suite_brochure_jp.pdf':
	case 'docs/qg_vm_for_ent_ds_jp.pdf':
	case 'docs/qg_vm_for_exp_ds_jp.pdf':
	case 'docs/qg_pci_ds_jp.pdf':
	case 'docs/qg_was_ds_jp.pdf':
	moved_permanently('/resources/#/type/all/topic/all/language/ja');
	break;
	case 'docs/qg_suite_brochure_es.pdf':
	case 'docs/qg_vm_for_ent_ds_es.pdf':
	case 'docs/qg_vm_for_exp_ds_es.pdf':
	case 'docs/qg_pc_ds_es.pdf':
	case 'docs/qg_pc_brief_es.pdf':
	case 'docs/qg_pci_ds_es.pdf':
	case 'docs/qg_was_ds_es.pdf':
	moved_permanently('/resources/#/type/all/topic/all/language/es');
	break;
	case 'docs/qg_suite_brochure_pt.pdf':
	case 'docs/qg_vm_for_ent_ds_pt.pdf':
	case 'docs/qg_pc_ds_pt.pdf':
	case 'docs/qg_was_ds_pt.pdf':
	moved_permanently('/resources/#/type/all/topic/all/language/pt');
	break;
	case 'docs/qg_suite_brochure_ru.pdf':
	case 'docs/qg_vm_for_ent_ds_ru.pdf':
	case 'docs/qg_pci_ds_ru.pdf':
	moved_permanently('/resources/#/type/all/topic/all/language/ru');
	break;
	case 'docs/smart-security-for-small-businesses.pdf':
	case 'forms/whitepapers/smart-security-for-small-businesses':
	case 'docs/whitepapers/smart-security-for-small-businesses.pdf':
	case 'docs/qualys-9-steps-fr.pdf':
	case 'forms/whitepapers/securite-intelligente-pour-pme/fr':
	case 'docs/whitepapers/qualys-9-steps-fr.pdf':
	case 'docs/qualys-9-steps-de.pdf':
	case 'forms/whitepapers/massgeschneiderte-sicherheit-fuer-kleine-unternehmen/de':
	case 'docs/whitepapers/qualys-9-steps-de.pdf':
	moved_permanently('/forms/whitepapers/six-steps-stronger-security-smbs/');
	break;
	case 'forms/whitepapers/best_practices_vulnerability_management':
	case 'docs/whitepapers/yankee-whitepaper.pdf':
	case 'yankee':
	case 'docs/yankee-whitepaper.pdf':
	moved_permanently('/forms/whitepapers/best-practices-selecting-vulnerability-management-solution/');
	break;
	case 'news/pr':
	case 'company/newsroom/newsreleases':
	case 'company/newsroom/news-releases/usa/2016-02-25-qualys-welcomes-shail-khiyara-as-chief-marketing-officer':
	moved_permanently('/company/newsroom/news-releases/');
	break;
	case 'company/newsroom/mediacoverage':
	moved_permanently('/company/newsroom/media-coverage/usa/');
	break;
	case 'company/newsroom/mediacontacts':
	case 'media-kit':
	moved_permanently('/company/newsroom/media-contacts/');
	break;
	case 'company/board_of_directors':
	case 'company/advisors':
	moved_permanently('/company/board-of-directors/');
	break;
	case 'company/contacts/france':
	moved_permanently('/company/contacts/#france');
	break;
	case 'company/contacts/portugal':
	moved_permanently('/company/contacts/#france');
	break;
	case 'company/contacts/spain':
	moved_permanently('/company/contacts/#france');
	break;
	case 'partners/qgmsp':
	case 'partners/msps':
	case 'docs/msp-ds.pdf':
	case 'docs/msp_ds_me2.pdf':
	case 'partners/msp':
	moved_permanently('/partners/mssp/');
	break;
	case 'partners/solution-technology/integration/risk-io':
	moved_permanently('/partners/solution-technology/integration/kenna/');
	break;
	case 'partners/vass':
	case 'partners/resellers':
	moved_permanently('/partners/vas/');
	break;
	case 'partners/bepartner/faqs':
	moved_permanently('/partners/faq/');
	break;
	case 'products/arch':
	case 'products/datasec':
	case 'products/datasec/features':
	case 'enterprises/architecture':
	case 'platform':
	case 'docs/webserv_datasecurity.pdf':
	case 'enterprises/security-compliance-platform':
	case 'products/saas_advantage':
	case 'enterprises/saas-advantage':
	case 'docs/saas_debate.pdf':
	case 'saasdebate':
	moved_permanently('/enterprises/security-compliance-cloud-platform/');
	break;
	case 'products/qg_suite/secure_seal':
	case 'enterprises/qualysguard/seal':
	moved_permanently('/enterprises/qualysguard/secure-seal/');
	break;
	case 'products/pci/qgpci/pass_fail_criteria':
	moved_permanently('/enterprises/qualysguard/pci-compliance/pass-fail-criteria/');
	break;
	case 'products/qg_suite/was':
	case 'enterprises/qualysguard/was':
	case 'was':
	case 'solutions/web_application_scanning':
	moved_permanently('/enterprises/qualysguard/web-application-scanning/');
	break;
	case 'products/qgent/demos/movies/overview.html':
	moved_permanently('/products/demos/movies/overview.html');
	break;
	case 'products/qgent/demos/movies/demo.html':
	moved_permanently('/products/demos/movies/demo.html');
	break;
	case 'solutions/overview/guided':
	case 'products/demos':
	case 'products/features':
	case 'products/screens':
	moved_permanently('https://community.qualys.com/docs/DOC-1323');
	break;
	case 'integrations':
	case 'products/integrations':
	case 'partner/ibm-qradar':
	case 'partners/solpartner':
	case 'docs/powerbroker.pdf':
	case 'products/integrations/api':
	moved_permanently('/partners/solution-technology/');
	break;
	case 'products/integrations/sesa':
	moved_permanently('/partners/solution-technology/symantec/');
	break;
	case 'tradeshows':
	case 'tradeshows/secure':
	case 'company/events':
	case 'company/events/tradeshows':
	case 'company/events/tradeshows/2012':
	case 'company/events/tradeshows/2013':
	case 'company/events/tradeshows/2014':
	case 'company/events/tradeshows/2012/qsc':
	case 'company/events/tradeshows/2013/qsc':
	case 'company/events/tradeshows/2014/qsc':
	moved_permanently('/qsc');
	break;
	case 'enterprises/devices':
	case 'enterprises/network-mobile-devices':
	moved_permanently('/enterprises/security-compliance-cloud-platform/ ');
	break;
	case 'events/training':
	case 'training/tcp':
	case 'training-in-person-and-online':
	moved_permanently('/training/');
	break;
	case 'company/support':
	case 'support/online':
	case 'support/telephone':
	case 'support/training':
	case 'support/pgp':
	case 'support/file-upload':
	moved_permanently('/support/');
	break;
	case 'support/online/faqs':
	moved_permanently('/support/faq/general/');
	break;
	case 'support/online/faqs/audits':
	moved_permanently('/support/faq/audits/');
	break;
	case 'support/online/faqs/general':
	moved_permanently('/support/faq/general/');
	break;
	case 'support/online/faqs/malware-detection':
	moved_permanently('/support/faq/mds/');
	break;
	case 'products/pci/qgpci/faqs':
	case 'support/online/faqs/pci':
	case 'support/online/faqs/pci/print':
	case 'suite/pci-compliance/pass-fail-criteria':
	moved_permanently('/support/faq/pci/');
	break;
	case 'support/online/faqs/secure-seal':
	moved_permanently('/support/faq/seal/');
	break;
	case 'support/online/faqs/vulnerability':
	moved_permanently('/support/faq/vulnerability/');
	break;
	case 'support/online/login_trouble':
	moved_permanently('/support/faq/login/');
	break;
	case 'support/online/pgp':
	case 'support/pgp':
	case 'support/online/fileupload':
	case 'support/fileupload':
	moved_permanently('/support/');
	break;
	case 'support/sla/fpm':
	moved_permanently('/support/sla/false-positives/');
	break;
	case 'research/alerts':
	case 'company/newsroom/alerts':
	moved_permanently('/research/security-alerts/');
	break;
	case 'research/security-alerts/2010-07-13/adobe':
	moved_permanently('/research/security-alerts/2010-07-13/oracle/');
	break;
	case 'research/security-alerts/2004-07-02/microsoft':
	moved_permanently('/docs/securityalerts/alert-microsoft-2004-07-02.pdf');
	break;
	case 'events/customer_events':
	case 'events/local_events':
	case 'resources/webcasts':
	case 'company/events/customer_events':
	case 'company/events/local_events':
	case 'date':
	case 'filters':
	case 'view':
	moved_permanently('/company/events/');
	break;
	case 'company/contacts/france/directions':
	case 'company/contacts/france-directions':
	moved_permanently('/company/directions/france/');
	break;
	case 'company/contacts/japan/directions':
	case 'company/contacts/japan-directions':
	moved_permanently('/company/directions/japan/');
	break;
	case 'company/investors':
	case 'investors':
	moved_permanently('https://investor.qualys.com');
	break;
	/*
	 * end redirects for 2012-03-01 site launch
	 */
	case 'waf':
	moved_permanently('/enterprises/qualysguard/web-application-firewall/');
	break;
	case 'research/knowledge/vulncount':
	case 'support/knowledgebase':
	moved_permanently('https://community.qualys.com/community/help');
	break;
	case 'company/events/tradeshows/2012/rsa':
	case 'company/events/tradeshows/2012/rsa/monday':
	case 'company/events/tradeshows/2012/rsa/speakers':
	case 'company/events/tradeshows/2012/rsa/thursday':
	case 'company/events/tradeshows/2012/rsa/tuesday':
	case 'company/events/tradeshows/2012/rsa/wednesday':
	case 'company/events/tradeshows/2013/rsa':
	case 'company/events/tradeshows/2013/rsa/speakers':
	case 'company/events/tradeshows/2014/rsa':
	case 'company/events/tradeshows/2014/rsa/speakers':
	case 'company/events/tradeshows/2015/rsa':
	case 'company/events/tradeshows/2015/rsa/speakers':
	case '2016/rsac':
	case '2018/rsac':
	case '2016/rsac/reception':
	moved_permanently('/');
	break;
	case 'research/rv10':
	moved_permanently('/research/top10/');
	break;
	case 'forms/trials/freemap/matrix':
	case 'forms/trials/freescan':
	case 'forms/trials/freescan/google':
	case 'forms/trials/qualysguard_free_map':
	case 'forms/trials/qualysguard_freescan_landing':
	case 'forms/trials/qualysguard_sans20_scan':
	case 'forms/trials/qualysguard_sans20_scan/it':
	case 'forms/google/free_scan':
	case 'sans20':
	case 'top10scan':
	case 'rv10scan':
	case 'freescan':
	case 'forms/freescan/de':
	case 'forms/freescan/es':
	case 'forms/freescan/fr':
	case 'forms/freescan/ru':
	case 'forms/trials/qualysguard_free_scan/de':
	case 'freescan/de':
	case 'freescan-de':
	case 'freescan-fr':
	case 'freescan/fr':
	case 'patch-tuesday':
	case 'patchtuesday':
	case 'forms/freescan/patch-tuesday/de':
	case 'forms/freescan/patch-tuesday/fr':
	case 'patchtuesday/de':
	case 'patch-tuesday-de':
	case 'patchtuesday/fr':
	case 'patch-tuesday-fr':
	case 'owasp':
	case 'forms/freescan/owasp/de':
	case 'forms/freescan/owasp/fr':
	case 'owasp/fr':
	case 'owasp-fr':
	case 'owasp/de':
	case 'owasp-de':
	case 'scap':
	case 'forms/freescan/scap/de':
	case 'forms/freescan/scap/fr':
	case 'scap/de':
	case 'scap/fr':
	case 'audit':
	case 'forms/freescan/website-scan/de':
	case 'forms/freescan/website-scan/fr':
	case 'audit/de':
	case 'audit-de':
	case 'audit/fr':
	case 'audit-fr':
	case 'forms/freescan/patch-tuesday':
	case 'forms/freescan/owasp':
	case 'forms/freescan/website-scan':
	case 'forms/freescan/scap':
	case 'forms/freescan':
	moved_permanently('/community-edition/#/freescan');
	break;
	case 'dasient':
	moved_permanently('/forms/dasient/?leadsource=2991251');
	break;
	case 'bt-engage':
	moved_permanently('/community-edition/?leadsource=1917159#/freescan');
	break;
	case 'cisco-iblm':
	moved_permanently('/forms/cisco-iblm/?leadsource=1486230');
	break;
	case 'festive':
	moved_permanently('/forms/qualysguard/secure-seal/?leadsource=2469574');
	break;
	case 'secure-seal/keynectis':
	moved_permanently('/forms/secure-seal/?leadsource=1722223');
	break;
	case 'tei':
	moved_permanently('https://community.qualys.com/groups/webcast-the-total-economic-impact-of-qualysguard');
	break;
	case 'newui':
	moved_permanently('https://community.qualys.com/community/qualysguard/newui');
	break;
	case 'browsercheck-business-edition':
	case 'qbcbe':
	moved_permanently('/forms/browsercheck-business-edition/');
	break;
	case 'browser':
	case 'browsercheck':
	case 'browsercheck.':
	moved_permanently('/free-tools-trials/browsercheck/');
	break;
	case 'vm':
	case 'enterprises/qualysguard/vm':
	case 'products/qg_suite/vulnerability_management':
	case 'enterprises/qualysguard/vulnerability-management/benefits':
	case 'solutions/vulnerability_management':
	case 'solutions/vulnerability_management/lifecycle':
	case 'products/overview/checkmark':
	case 'docs/va_treport.pdf':
	moved_permanently('/enterprises/qualysguard/vulnerability-management/');
	break;
	case 'sealguidelines':
	moved_permanently('/docs/Seal_Guidelines.pdf');
	break;
	case 'privacy':
	case 'company/privacy/fr':
	case 'company/privacy/de':
	case 'privacy.html':
	case 'company/privacy/statement':
	moved_permanently('/company/privacy/');
	break;
	case 'renew':
	moved_permanently('https://forms.netsuite.com/app/site/hosting/scriptlet.nl?script=149&deploy=1&compid=626022&h=e2ab7b4e7ef482109ae1');
	break;
	case 'efficient_ciso':
	case 'docs/efficient_ciso.pdf':
	moved_permanently('/forms/whitepapers/efficient_ciso/');
	break;
	case 'slammer':
	moved_permanently('/community-edition/?lsid=507&qualysid=19070#/freescan');
	break;
	case 'efficient_ciso_fr':
	case 'stratégies-rssi-efficace':
	case 'strategies-rssi-efficace':
	case 'rssi-efficace':
	case 'docs/efficient-ciso-fr.pdf':
	moved_permanently('/forms/whitepapers/strategies-efficaces-rssi/fr/');
	break;
	case 'efficient_ciso_de':
	case 'erfolgreichen-ciso-strategien':
	case 'erfolgreichen-ciso':
	case 'docs/efficient-ciso-de.pdf':
	moved_permanently('/forms/whitepapers/strategien-erfolgreicher-ciso/de/');
	break;
	case 'nemean':
	moved_permanently('/company/newsroom/news-releases/usa/2010-10-05/');
	break;
	case 'research/rnd':
	moved_permanently('/research/');
	break;
	case 'company/csoboard':
	moved_permanently('/company/');
	break;
	case 'api':
	case 'documentation/api':
	case 'resources/apis':
	moved_permanently('https://community.qualys.com/community/developer');
	break;
	case 'blindelephant':
	moved_permanently('https://community.qualys.com/community/blindelephant');
	break;
	case 'bcdemo':
	case 'videos/bc_demo.html':
	moved_permanently('https://community.qualys.com/docs/DOC-1311');
	break;
	case 'aurora':
	moved_permanently('/docs/iSEC_Partners_-_Aurora_Response_Recommendations_-_Public_-_QUALYS.pdf');
	break;
	case 'fdcc':
	case 'products/qg_suite/fdcc':
	moved_permanently('/enterprises/qualysguard/fdcc/');
	break;
	case 'search':
	moved_permanently('/company/search/');
	break;
	case 'conficker':
	moved_permanently('https://blog.qualys.com/laws-of-vulnerabilities/2009/03/31/-analysis-with-qualysguard-ids-qids');
	break;
	case 'pci4dummies':
	case 'pcifordummies':
	case 'forms/ebook/pcifordummies':
	moved_permanently('/forms/ebook/pci-compliance-for-dummies/');
	break;
	case 'forms/ebook/pcifordummies/confirm':
	moved_permanently('/forms/ebook/pci-compliance-for-dummies/confirm/');
	break;
	case 'dummy-pci':
	moved_permanently('/forms/ebook/pci-compliance-for-dummies/?leadsource=6711405');
	break;
	case 'dummy-vm':
	moved_permanently('/forms/ebook/vulnerability-management-for-dummies/?leadsource=6711405');
	break;
	case 'dummy-pc':
	moved_permanently('/forms/ebook/it-policy-compliance-for-dummies/?leadsource=6711405');
	break;
	case 'was4dummies':
	case 'wasfordummies':
	case 'forms/ebook/wasfordummies':
	moved_permanently('/forms/ebook/web-application-security-for-dummies/');
	break;
	case 'dummy-was':
	moved_permanently('/forms/ebook/web-application-security-for-dummies/?leadsource=6711405');
	break;
	case 'security':
	case 'threats':
	case 'rnd/top20':
	case 'top20':
	case 'top10':
	case 'rd':
	case 'forms/top20.html':
	moved_permanently('/research/top10/');
	break;
	case 'mes_free_qualys_scan':
	case 'mes_free_scan':
	moved_permanently('https://pci.qualys.com/signup/MeS_Signup.php');
	break;
	case 'gartnervideo':
	moved_permanently('/videos/');
	break;
	case 'newsletter':
	moved_permanently('/company/newsroom/newsletter/');
	break;
	case 'docs/customers/casestud/nybot.php':
	case 'customers/casestud/nybot':
	moved_permanently('/customers/success-stories/nybot-maintaining-business-continuity/');
	break;
	case 'scmagawards':
	case 'products/awards':
	moved_permanently('/customers/awards/');
	break;
	case 'company/newsroom/analysts':
	case 'docs/forrester-wc-pvm.pdf':
	case 'docs/gartner-magic-quadrant-application-security-testing-2015-08-06.pdf':
	case 'docs/gartner-magic-quadrant-application-security-testing.pdf':
	case 'gartner':
	case 'idc-vm-2013-forecast':
	case 'market-scope':
	case 'marketscope2012':
	case 'marketscope2013':
	moved_permanently('/company/newsroom/industry-analyst-reports/');
	break;
	case 'freemium':
	moved_permanently('https://community.qualys.com/blogs/qualys-tech/2010/10/28/qualys-freemium-services');
	break;
	case 'testimony':
	moved_permanently('/docs/Testimony_Gerhard_Eschelbeck.pdf');
	break;
	case 'lp/eloqua_landing_page/js/jquery.tabs.pack.js':
	moved_permanently('/js/jquery.tabs.pack.js');
	break;
	case 'lp/eloqua_landing_page/js/jquery.history_remote.pack.js':
	moved_permanently('/js/jquery.history_remote.pack.js');
	break;
	case 'lp/eloqua_landing_page/js/jquery.getparams.js':
	moved_permanently('https://mathias-bank.de/jQuery/jquery.getUrlParam.js');
	break;
	case 'lp/eloqua_landing_page/js/jquery-1.2.6.pack.js':
	moved_permanently('https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.6.2.min.js');
	break;
	case 'vote':
	moved_permanently('/company/newsroom/news-releases/usa/2007-02-15/');
	break;
	case 'coresecurity':
	moved_permanently('https://www.coresecurity.com/blog/making-the-perfect-pair-%25e2%2580%2593-penetration-testing-and-vulnerability-scanning');
	break;
	case 'docs/@stake':
	case 'docs/%40stake':
	moved_permanently('https://en.wikipedia.org/wiki/@stake');
	break;

	// Whitepapers moved from docs to whitepapers folder
	case 'docs/qualys-new-info-risk-landscape-de.pdf':
	case 'forms/whitepapers/antworten-auf-risiken/de':
	case 'docs/qualys-7-steps-de.pdf':
	case 'forms/whitepapers/7-schritte-zur-minderung-von-sicherheitsrisiken/de':
	case 'docs/qualys-security-in-the-cloud-de.pdf':
	case 'forms/whitepapers/neue-anforderungen-sicherheit-compliance-audits-cloud/de':
	case 'docs/qualys-the-need-for-vm-de.pdf':
	case 'forms/whitepapers/bedeutung-des-schwachstellenmanagements/de':
	case 'docs/urgent-need-rethink-security-using-cloud-de.pdf':
	case 'forms/whitepapers/cloud-security-sicherheitsstrategien-dringend-neu-ueberdenken/de':
	moved_permanently('/resources/#/type/all/topic/all/language/de');
	break;
	case 'docs/qualys-7-steps-fr.pdf':
	case 'forms/whitepapers/7-etapes-vers-reduction-risques-securite/fr':
	case 'docs/qualys-new-info-risk-landscape-fr.pdf':
	case 'forms/whitepapers/faire-face-aux-risques/fr':
	case 'docs/qualys-security-in-the-cloud-fr.pdf':
	case 'forms/whitepapers/nouvelles-exigences-securite-conformite-audit-cloud/fr':
	case 'docs/urgent-need-rethink-security-using-cloud-fr.pdf':
	case 'forms/whitepapers/urgent-repenser-securite-via-cloud/fr':
	moved_permanently('/resources/#/type/all/topic/all/language/fr');
	break;
	case 'docs/qualys-7-common-mistakes-de.pdf':
	moved_permanently('/forms/whitepapers/7-compliance-fehler-vermeiden/de/');
	break;
	case 'docs/7_steps_whitepaper.pdf':
	case 'docs/whitepapers/7_steps_whitepaper.pdf':
	case 'forms/whitepapers/7_steps_to_security_risk_reduction':
	case 'forms/whitepapers/7_steps_to_security_risk_reduction/confirm':
	moved_permanently('/forms/whitepapers/top-5-requirements-prioritizing-vulnerability-remediation/');
	break;
	case 'docs/best-practices-selecting-vulnerability-management-solution-de.pdf':
	moved_permanently('/forms/whitepapers/best-practices-auswahl-schwachstellenmanagement-losung/de/');
	break;
	case 'docs/best-practices-selecting-vulnerability-management-solution-fr.pdf':
	moved_permanently('/forms/whitepapers/meilleures-pratiques-selectionner-solution-gestion-des-vulnerabilites/fr/');
	break;
	case 'docs/best-practices-selecting-vulnerability-management-solution.pdf':
	moved_permanently('/forms/whitepapers/best-practices-selecting-vulnerability-management-solution/');
	break;
	case 'docs/best-practices-selecting-web-application-scanning-solution-de.pdf':
	moved_permanently('/forms/whitepapers/best-practices-auswahl-web-application-scanning-losung/de/');
	break;
	case 'docs/best-practices-selecting-web-application-scanning-solution-fr.pdf':
	moved_permanently('/forms/whitepapers/meilleures-pratiques-selectionner-solution-danalyse-des-applications-web/fr/');
	break;
	case 'docs/best-practices-selecting-web-application-scanning-solution.pdf':
	moved_permanently('/forms/whitepapers/best-practices-selecting-web-application-scanning-solution/');
	break;
	case 'docs/continuous-monitoring-blueprint-achieving-continuous-security-compliance.pdf':
	moved_permanently('/forms/whitepapers/continuous-monitoring-blueprint-achieving-continuous-security-compliance/');
	break;
	case 'docs/discovering-vulnerable-web-applications-de.pdf':
	moved_permanently('/forms/whitepapers/unsichere-webanwendungen-ermitteln/de/');
	break;
	case 'docs/discovering-vulnerable-web-applications-fr.pdf':
	moved_permanently('/forms/whitepapers/decouvrir-vulnerabilites-applications-web/fr/');
	break;
	case 'docs/discovering-vulnerable-web-applications.pdf':
	moved_permanently('/forms/whitepapers/discovering-vulnerable-web-applications/');
	break;
	case 'docs/keep-your-pcs-safe-while-surfing-the-web-de.pdf':
	moved_permanently('/forms/whitepapers/schutzen-sie-ihre-pcs-beim-websurfen/de/');
	break;
	case 'docs/keep-your-pcs-safe-while-surfing-the-web-fr.pdf':
	moved_permanently('/forms/whitepapers/des-postes-de-travail-securises-pour-surfer-sur-le-web/fr/');
	break;
	case 'docs/keep-your-pcs-safe-while-surfing-the-web.pdf':
	moved_permanently('/forms/whitepapers/keep-your-pcs-safe-while-surfing-web/');
	break;
	case 'docs/qg_pci_wp.pdf':
	moved_permanently('/forms/whitepapers/winning_pci_compliance_battle/');
	break;
	case 'docs/qualys-7-common-mistakes-fr.pdf':
	moved_permanently('/forms/whitepapers/eviter-7-erreurs-classiques-conformite-securite-it/fr/');
	break;
	case 'docs/qualys-big-shift-de.pdf':
	moved_permanently('/forms/whitepapers/grosser-wandel-cloud-sicherheit/de/');
	break;
	case 'docs/qualys-big-shift-fr.pdf':
	moved_permanently('/forms/whitepapers/grande-migration-securite-cloud/fr/');
	break;
	case 'docs/qualys-efficient-ciso-de.pdf':
	moved_permanently('/forms/whitepapers/strategien-erfolgreicher-ciso/de/');
	break;
	case 'docs/qualys-efficient-ciso-fr.pdf':
	moved_permanently('/forms/whitepapers/strategies-efficaces-rssi/fr/');
	break;
	case 'docs/qualys-justifying-it-security-de.pdf':
	moved_permanently('/forms/whitepapers/it-sicherheit-rechtfertigen/de/');
	break;
	case 'docs/qualys-justifying-it-security-fr.pdf':
	moved_permanently('/forms/whitepapers/justifier-securite-it/fr/');
	break;
	case 'docs/qualys-pci-battle-de.pdf':
	moved_permanently('/forms/whitepapers/gewinnen-kampf-um-pci-compliance/de/');
	break;
	case 'docs/qualys-pci-battle-fr-2011.pdf':
	moved_permanently('/forms/whitepapers/gagner-bataille-conformite-pci/fr/');
	break;
	case 'docs/qualys-security-in-the-cloud-eu.pdf':
	moved_permanently('/forms/whitepapers/compliance_auditing_cloud/');
	break;
	case 'docs/qualys-security-in-the-cloud.pdf':
	moved_permanently('/forms/whitepapers/compliance_auditing_cloud/');
	break;
	case 'docs/qualys-six-essential-elements-web-application-security-de.pdf':
	moved_permanently('/forms/whitepapers/sechs-kernelemente-der-webanwendungssicherheit/de/');
	break;
	case 'docs/qualys-six-essential-elements-web-application-security-fr.pdf':
	moved_permanently('/forms/whitepapers/six-elements-essentiels-securite-applications-web/fr/');
	break;
	case 'docs/qualys-six-essential-elements-web-application-security.pdf':
	moved_permanently('/forms/whitepapers/six-essential-elements-web-application-security/');
	break;
	case 'docs/responding_to_risk.pdf':
	moved_permanently('/forms/whitepapers/responding-to-risk/');
	break;
	case 'docs/security-based-on-trust-not-fear-de.pdf':
	moved_permanently('/forms/whitepapers/sicherheit-durch-vertrauen-statt-angst/de/');
	break;
	case 'docs/security-based-on-trust-not-fear.pdf':
	moved_permanently('/forms/whitepapers/security-based-on-trust-not-fear/');
	break;
	case 'docs/securosis-qualys-continuous-security-monitoring.pdf':
	moved_permanently('/forms/whitepapers/continuous-security-monitoring/');
	break;
	case 'docs/securosis-vulnerability-management-evolution-de.pdf':
	moved_permanently('/forms/whitepapers/securosis-schwachstellenmanagement-evolution/de/');
	break;
	case 'docs/securosis-vulnerability-management-evolution-fr.pdf':
	moved_permanently('/forms/whitepapers/securosis-evolution-gestion-vulnerabilites/fr/');
	break;
	case 'docs/webappsec_program_v1_qualys.pdf':
	moved_permanently('/forms/whitepapers/building_was_program/');
	break;
	case 'docs/zero-day-offense-vulnerability-management-de.pdf':
	moved_permanently('/forms/whitepapers/zero-day-offense-vulnerability-management/de/');
	break;
	case 'docs/zero-day-offense-vulnerability-management-fr.pdf':
	moved_permanently('/forms/whitepapers/zero-day-offense-vulnerability-management/fr/');
	break;
	case 'docs/zero-day-offense-vulnerability-management.pdf':
	moved_permanently('/forms/whitepapers/zero-day-offense-vulnerability-management/');
	break;
	case 'reportbrowser/reportbrowser.rar':
	moved_permanently('/ReportBrowser/download.php');
	break;
	/* Moving videos */
	case 'videos/2013/qualysguard/web-application-scanning/qualysguard-was-introduction-selenium':
	moved_permanently('/videos/series/web-application-scanning/was-introduction-selenium/');
	break;
	case 'videos/2014/qualysguard/vulnerability-management/amazon-ec2-pre-authorized-scanning':
	moved_permanently('/videos/vm-training/vulnerability-management/amazon-ec2-pre-authorized-scanning/');
	break;
	case 'videos/2013/qualysguard/web-application-scanning/qualysguard-was-authentication-selenium':
	moved_permanently('/videos/series/web-application-scanning/was-authentication-selenium/');
	break;
	case 'videos/2013/qualysguard/web-application-scanning/qualysguard-was-integration-selenium':
	moved_permanently('/videos/series/web-application-scanning/was-integration-selenium/');
	break;
	case 'videos/2013/qualysguard/web-application-scanning/qualysguard-was-crawl-settings-selenium':
	moved_permanently('/videos/series/web-application-scanning/was-crawl-settings-selenium/');
	break;
	case 'customers/presentations/administaff':
	moved_permanently('/customers/presentations/2009/best-practices-for-successful-vm/');
	break;
	case 'customers/presentations/cisco':
	moved_permanently('https://youtu.be/Np9r6OXC5WE');
	break;
	case 'customers/presentations/first_advantage':
	moved_permanently('/customers/presentations/2009/building-a-full-life-cycle-program-for-security-and-compliance/');
	break;
	case 'customers/success/%23university%20of%20idaho':
	moved_permanently('/customers/success-stories/it-security-university-of-idaho-raises-grade/');
	break;
	case 'customers/success/%23clickability':
	moved_permanently('/customers/success-stories/clickability-finds-powerful-simple-security/');
	break;
	case 'customers/success/%23ohio%20dominican%20university':
	moved_permanently('/customers/success-stories/ohio-dominican-university-writes-new-security-curriculum/');
	break;
	case 'partners/solution-technology/find':
	moved_permanently('/partners/solution-technology/#/all');
	break;
	case 'free-tools-trials/assetview':
	moved_permanently('/suite/assetview/');
	break;
	case 'docs/qg_faqs_vulnmgmt.pdf':
	case 'docs/qg_faqs_general.pdf':
	case 'docs/qg_faqs_audits.pdf':
	moved_permanently('/support/faq/general/');
	break;
	case 'partners/solution-technology':
	case 'partners/solution-technology/symantec':
	moved_permanently('/partners/integration/');
	break;
	case 'suite/threatprotect':
	case 'docs/vrsn_idefense_qualysguard_ds_20120604.pdf':
	case 'docs/idefenseexcqualysguard_datasheet.pdf':
	moved_permanently('/apps/threat-protection/');
	break;
	/* this case fixes the occasional URL with right-left whitespace
	 * like this http://www.qualys.com/%E2%80%8E */
	case '':
	case 'docs/qg_nac_ds.pdf':
	case 'gms-fr':
	case 'lp/qualys-partners-best-practice-videos':
	case 'mastercard':
	// Pages removed from new site build
	case 'research':
	case 'research/top10':
	case 'research/top10/2011/02':
	case 'research/top10/2011/05':
	case 'research/top10/2011/08':
	case 'research/top10/2011/11':
	case 'research/top10/2012/05':
	case 'research/top10/2012/08':
	case 'research/top10/2013/02':
	case 'research/top10/2013/08':
	case 'research/top10/2014/07':
	case 'research/top10/2015/02':
	case 'research/top10/2015/07':
	case 'research/exploits':
	case 'research/knowledge':
	case 'research/knowledge/severity':
	case 'research/opensource':
	case 'rpcss':
	case 'tag/tag.js':
	case 'ukacademy':
	moved_permanently('/');
	break;
	case 'suite/policy-compliance/features':
	case 'suite/policy-compliance':
	moved_permanently('/apps/policy-compliance/');
	break;
	case 'suite/vulnerability-management/features':
	case 'suite/vulnerability-management':
	case 'lp/fast-simple-network-security':
	moved_permanently('/apps/vulnerability-management/');
	break;
	case 'apps/web-application-scanning':
	case 'suite/malware-detection':
	case 'suite/web-application-scanning':
	case 'was':
	case 'lp/fast-simple-web-application-scanning':
	case 'support/faq/mds':
	moved_permanently('/apps/web-app-scanning/');
	break;
	case 'careers/slideshow':
	moved_permanently('/careers/');
	break;
	case 'why-choose-qualys':
	moved_permanently('/company/');
	break;
	case 'company/directions':
	case 'company/directions/france':
	case 'company/directions/japan':
	moved_permanently('/company/contacts/');
	break;
	case 'forms/browsercheck-business-edition/de':
	case 'forms/browsercheck-business-edition/de/confirm':
	case 'forms/browsercheck-business-edition/fr':
	case 'forms/browsercheck-business-edition/fr/confirm':
	moved_permanently('/forms/browsercheck-business-edition/');
	break;
	case 'free-tools-trials/browsercheck/de':
	case 'free-tools-trials/browsercheck/fr':
	moved_permanently('/free-tools-trials/browsercheck/');
	break;
	case 'free-tools-trials/browsercheck/business/de':
	case 'free-tools-trials/browsercheck/business/fr':
	moved_permanently('/free-tools-trials/browsercheck/business/');
	break;
	case 'free-tools-trials/browsercheck/personal/de':
	case 'free-tools-trials/browsercheck/personal/fr':
	case 'free-tools-trials/browsercheck/business':
	case 'forms/browsercheck-business-edition':
	moved_permanently('/free-tools-trials/browsercheck/personal/');
	break;
	case 'forms/assetview':
	case 'forms/assetview/confirm':
	case 'forms/assetview/de':
	case 'forms/assetview/de/confirm':
	case 'forms/assetview/fr':
	case 'forms/assetview/fr/confirm':
	case 'forms/mvm':
	case 'forms/mvm/confirm':
	case 'forms/trials/cloud-agent':
	case 'forms/trials/cloud-agent/confirm':
	case 'forms/trials/cloud-agent/de':
	case 'forms/trials/cloud-agent/de/confirm':
	case 'forms/trials/cloud-agent/fr':
	case 'forms/trials/cloud-agent/fr/confirm':
	case 'forms/trials/secure-seal':
	case 'forms/trials/secure-seal/confirm':
	case 'forms/trials/suite':
	case 'forms/trials/suite/confirm':
	case 'forms/trials/suite/de':
	case 'forms/trials/suite/de/confirm':
	case 'forms/trials/suite/fr':
	case 'forms/trials/suite/fr/confirm':
	case 'forms/trials/wannacry':
	case 'forms/trials/wannacry/confirm':
	case 'forms/trials/web-application-firewall':
	case 'forms/trials/web-application-firewall/confirm':
	case 'forms/trials/zero-day':
	case 'forms/trials/zero-day/confirm':
	case 'free-tools-trials/de':
	case 'free-tools-trials/fr':
	moved_permanently('/free-trial/');
	break;
	case 'forms/trials/continuous-monitoring':
	case 'forms/trials/continuous-monitoring/confirm':
	moved_permanently('/free-trial/#/cm');
	break;
	case 'forms/trials/consultant':
	case 'forms/trials/consultant/confirm':
	moved_permanently('/free-trial/#/consultant');
	break;
	case 'forms/trials/enterprise':
	case 'forms/trials/enterprise/confirm':
	moved_permanently('/free-trial/#/enterprise');
	break;
	case 'forms/trials/pci-compliance':
	case 'forms/trials/pci-compliance/confirm':
	moved_permanently('/free-trial/#/pci');
	break;
	case 'forms/trials/security-assessment-questionnaire':
	case 'forms/trials/security-assessment-questionnaire/confirm':
	moved_permanently('/free-trial/#/saq');
	break;
	case 'forms/trials/express-lite':
	case 'forms/trials/express-lite/confirm':
	case 'forms/trials/express-lite/ru':
	case 'forms/trials/express-lite/ru/confirm':
	moved_permanently('/free-trial/#/smb');
	break;
	case 'forms/trials/express':
	case 'forms/trials/express/confirm':
	moved_permanently('/free-trial/#/sme');
	break;
	case 'forms/trials/threatprotect':
	case 'forms/trials/threatprotect/confirm':
	moved_permanently('/free-trial/#/tp');
	break;
	case 'partners/solution-technology/symantec':
	moved_permanently('/partners/integration/');
	break;
	case 'partners/solution-technology/integration/risk-io':
	moved_permanently('/partners/integration/kenna/');
	break;
	case 'partners/pci/quotes':
	moved_permanently('/partners/pci/');
	break;
	case 'company/newsroom/news-releases/france/2017-02-13-google-et-qualys-s-associent-pour-fournir-securite-et-conformite-en-continu':
	case 'enterprises/qualysguard-amazon-ec2-vpc':
	case 'lp/azure':
	case 'public-clouds':
	case 'public-clouds/amazon-web-services':
	case 'public-clouds/google-cloud-platform':
	case 'public-clouds/microsoft-azure':
	case 'solutions/amazon-ec2-vpc':
	case 'solutions/azure':
	moved_permanently('/public-cloud/');
	break;
	case 'solutions/compliance/cag':
	case 'solutions/compliance/cobit':
	case 'solutions/compliance/fisma':
	case 'solutions/compliance/hipaa-hitech':
	case 'solutions/compliance/iso-iec_27002':
	case 'solutions/compliance/nerc-cip':
	case 'solutions/compliance/pci_dss':
	case 'solutions/compliance/sans':
	case 'solutions/compliance/scap':
	case 'solutions/industry':
	case 'solutions/industry/education':
	case 'solutions/industry/energy':
	case 'solutions/industry/federal_government':
	case 'solutions/industry/financial_services':
	case 'solutions/industry/health_care':
	case 'solutions/industry/public_companies':
	case 'solutions/industry/retail':
	case 'solutions/industry/state-local-government-regulations':
	case 'solutions/roles':
	case 'solutions/roles/auditors':
	case 'solutions/roles/executive_management':
	case 'solutions/roles/it_operations':
	case 'solutions/roles/security_consultants':
	case 'solutions/roles/security_professionals':
	case 'solutions/roles/web_app_developers':
	case 'solutions/technology':
	case 'solutions/technology/database':
	case 'solutions/technology/it_compliance':
	case 'solutions/technology/network_security':
	case 'solutions/technology/web_app_security':
	moved_permanently('/solutions/');
	break;
	case 'suite/continuous-monitoring/pricing':
	case 'suite/malware-detection/pricing':
	case 'suite/pci-compliance/pricing':
	case 'suite/policy-compliance/pricing':
	case 'suite/secure-seal/pricing':
	case 'suite/security-assessment-questionnaire/pricing':
	case 'suite/threatprotect/pricing':
	case 'suite/vulnerability-management/pricing':
	case 'suite/web-application-firewall/pricing':
	case 'suite/web-application-scanning/pricing':
	moved_permanently('/subscriptions/');
	break;
	case 'subscriptions/consultant':
	case 'vm-kit':
	moved_permanently('/subscriptions/consultants/');
	break;
	case 'subscriptions/enterprise/features':
	moved_permanently('/subscriptions/enterprise/');
	break;
	case 'subscriptions/express/features':
	case 'subscriptions/express':
	moved_permanently('/subscriptions/sme/');
	break;
	case 'subscriptions/express-lite':
	moved_permanently('/subscriptions/smb/');
	break;
	case 'research/vulnlaws':
	moved_permanently('https://blog.qualys.com/laws-of-vulnerabilities');
	break;
	case 'suite/secure-seal':
	case 'suite':
	case 'security-compliance-cloud-platform':
	moved_permanently('/cloud-platform/');
	break;
	case 'suite/assetview':
	case 'ai':
	case 'inventory':
	case 'lp/it-asset-inventory':
	case 'assetinventory':
	moved_permanently('/apps/asset-inventory/');
	break;
	case 'suite/continuous-monitoring':
	case 'lp/continuous-monitoring-perimeter':
	moved_permanently('/apps/continuous-monitoring/');
	break;
	case 'suite/pci-compliance':
	moved_permanently('/apps/pci-compliance/');
	break;
	case 'suite/security-assessment-questionnaire':
	moved_permanently('/apps/security-assessment-questionnaire/');
	break;
	case 'apps/web-application-firewall':
	case 'suite/web-application-firewall':
	case 'waf':
	moved_permanently('/apps/web-app-firewall/');
	break;
	case 'syn':
	moved_permanently('/apps/cmdb-sync/');
	break;
	case 'ioc':
	moved_permanently('/apps/indication-of-compromise/');
	break;
	case 'cs':
	moved_permanently('/apps/container-security/');
	break;
	case 'fim':
	moved_permanently('/apps/file-integrity-monitoring/');
	break;
	case 'sca':
	moved_permanently('/apps/security-configuration-assessment/');
	break;
	case 'csa':
	moved_permanently('/apps/cloud-security-assessment/');
	break;
	case 'partners/solution-technology/integration/nopsec':
	case 'partners/integration/integration/nopsec':
	moved_permanently('/partners/integration/nopsec/');
	break;
	case 'partners/solution-technology/integration/kenna':
	case 'partners/integration/integration/kenna':
	moved_permanently('/partners/integration/kenna/');
	break;
	case 'partners/solution-technology/integration/brinqa':
	case 'partners/integration/integration/brinqa':
	moved_permanently('/partners/integration/brinqa/');
	break;
	case 'videos/testimonials/agrokor/ivo-pejakovic':
	moved_permanently('https://vimeo.com/album/3576616/video/225502344');
	break;
	case 'videos/testimonials/avg-technologies/jason-gamage':
	moved_permanently('https://vimeo.com/album/3576616/video/225502439');
	break;
	case 'videos/testimonials/catholic-health/michael-arent':
	moved_permanently('https://vimeo.com/album/3576616/video/225502386');
	break;
	case 'videos/testimonials/cengage/david-menard':
	moved_permanently('https://vimeo.com/album/3576616/video/225502260');
	break;
	case 'videos/testimonials/cisco/doug-dexter':
	moved_permanently('https://vimeo.com/album/3576616/video/225502307');
	break;
	case 'videos/testimonials/county-bank/charlie-mcclain':
	moved_permanently('https://vimeo.com/album/3576616/video/225502259');
	break;
	case 'videos/testimonials/darigold/sean-wilson':
	moved_permanently('https://vimeo.com/album/3576616/video/225502240');
	break;
	case 'videos/testimonials/drg/don-sparks':
	moved_permanently('https://vimeo.com/album/3576616/video/225502212');
	break;
	case 'videos/testimonials/drg/forest-mcmahon':
	moved_permanently('https://vimeo.com/album/3576616/video/225502222');
	break;
	case 'videos/testimonials/dupont/robert-pazko':
	moved_permanently('https://vimeo.com/album/3576616/video/225502197');
	break;
	case 'videos/testimonials/ehealth-insurance/david-rickling':
	moved_permanently('https://vimeo.com/album/3576616/video/225502196');
	break;
	case 'videos/testimonials/emf-broadcasting/juan-walker':
	case 'videos/testimonials/emf-broadcasting/juan-walker2':
	moved_permanently('https://vimeo.com/album/3576616/video/225502186');
	break;
	case 'videos/testimonials/eplus/sam-wong':
	moved_permanently('https://vimeo.com/album/3576616/video/225502175');
	break;
	case 'videos/testimonials/first-advantage-credco/shawn-kelly':
	moved_permanently('https://vimeo.com/album/3576616/video/225502155');
	break;
	case 'videos/testimonials/hcl/manmathan-thinakaran':
	moved_permanently('https://vimeo.com/album/3576616/video/225502148');
	break;
	case 'videos/testimonials/heartland/greg-peterson':
	moved_permanently('https://vimeo.com/album/3576616/video/225502146');
	break;
	case 'videos/testimonials/humana/matthew-noh':
	moved_permanently('https://vimeo.com/album/3576616/video/225502415');
	break;
	case 'videos/testimonials/image-quotient/paula-braga':
	moved_permanently('https://vimeo.com/album/3576616/video/225502119');
	break;
	case 'videos/testimonials/infogressive/justin-kalhoff':
	moved_permanently('https://vimeo.com/album/3576616/video/225502138');
	break;
	case 'videos/testimonials/inttra/anthony-costa':
	moved_permanently('https://vimeo.com/album/3576616/video/225502109');
	break;
	case 'videos/testimonials/inttra/joe-lange':
	moved_permanently('https://vimeo.com/album/3576616/video/225502120');
	break;
	case 'videos/testimonials/jacadis/doug-davidson':
	moved_permanently('https://vimeo.com/album/3576616/video/225502105');
	break;
	case 'videos/testimonials/newell-rubbermaid/paul-groisman':
	moved_permanently('https://vimeo.com/album/3576616/video/225502121');
	break;
	case 'videos/testimonials/northern-arizona-university/michael-zimmer':
	moved_permanently('https://vimeo.com/album/3576616/video/225502380');
	break;
	case 'videos/testimonials/ogilvy-mather/parag-baxi':
	moved_permanently('https://vimeo.com/album/3576616/video/225502169');
	break;
	case 'videos/testimonials/oneok/jim-sehon':
	moved_permanently('https://vimeo.com/album/3576616/video/225502068');
	break;
	case 'videos/testimonials/pensco-trust/edward-voss/':
	moved_permanently('https://vimeo.com/album/3576616/video/225502060');
	break;
	case 'videos/testimonials/santa-clara-county/ann-payton':
	moved_permanently('https://vimeo.com/album/3576616/video/225502059');
	break;
	case 'videos/testimonials/sodexo/abdellah-cherkaoui':
	moved_permanently('https://vimeo.com/album/3576616/video/225502097');
	break;
	case 'videos/testimonials/sony/shahriar-azimi':
	moved_permanently('https://vimeo.com/album/3576616/video/225502071');
	break;
	case 'videos/testimonials/sourcefire/richard-park':
	moved_permanently('https://vimeo.com/album/3576616/video/225501977');
	break;
	case 'videos/testimonials/standard-bank/manoel-barbosa':
	moved_permanently('https://vimeo.com/album/3576616/video/225501999');
	break;
	case 'videos/testimonials/steak-n-shake/rick-lesh':
	moved_permanently('https://vimeo.com/album/3576616/video/225501951');
	break;
	case 'videos/testimonials/sun-microsystems/warren-belfer':
	moved_permanently('https://vimeo.com/album/3576616/video/225501931');
	break;
	case 'videos/testimonials/telecommunications-systems/braden-walters':
	moved_permanently('https://vimeo.com/album/3576616/video/225501923');
	break;
	case 'videos/testimonials/thousandeyes/alexander-anoufriev':
	moved_permanently('https://vimeo.com/album/3576616/video/225502352');
	break;
	case 'videos/testimonials/time/roy-cohn':
	moved_permanently('https://vimeo.com/album/3576616/video/225501921');
	break;
	case 'videos/testimonials/transunion/david-r-griffin':
	moved_permanently('https://vimeo.com/album/3576616/video/225501912');
	break;
	case 'videos/testimonials/transunion/robert-wagner':
	moved_permanently('https://vimeo.com/album/3576616/video/225501904');
	break;
	case 'videos/testimonials/unify/stefan-beck':
	moved_permanently('https://vimeo.com/album/3576616/video/225501998');
	break;
	case 'videos/testimonials/university-san-francisco/roberto-montoya':
	moved_permanently('https://vimeo.com/album/3576616/video/225501836');
	break;
	case 'videos/testimonials/university-san-francisco/walter-petruska':
	moved_permanently('https://vimeo.com/album/3576616/video/225501873');
	break;
	case 'videos/testimonials/verisign/tyson-whitten':
	moved_permanently('https://vimeo.com/album/3576616/video/225501826');
	break;
	case 'videos/testimonials/visto/sam-chen':
	moved_permanently('https://vimeo.com/album/3576616/video/225501810');
	break;
	case 'videos/testimonials/west-lotto/arne-fischer':
	moved_permanently('https://vimeo.com/album/3576616/video/225501846');
	break;
	case 'videos/testimonials/williams-natural-gas/jodi-pruitt':
	moved_permanently('https://vimeo.com/album/3576616/video/225501775');
	break;
	case 'videos/testimonials/pan-american-health-org/henry-munoz':
	case 'videos/testimonials/soundbites':
	case 'customers/quotes':
	case 'customers/customers':
	case 'docs/axa-im.pdf':
	case 'docs/mazu-qualys.pdf':
	case 'videos/testimonials/fujitsu/tetsuo-shiozaki':
	case 'customers/presentations/2010/implementing-a-full-vulnerability-management-lifecycle-with-qualysguard':
	case 'docs/alban_muller_international.pdf':
	case 'docs/ash.pdf':
	case 'docs/automating-security-it-risk-management-miami-beach.pdf':
	case 'docs/axway-secures-cloud-services.pdf':
	case 'docs/bank_of_west.pdf':
	case 'docs/banque_nsmd_abn-amro_case_study.pdf':
	case 'docs/brinks-anticipe-les-audits-securite-du-groupe-avec-qualys.pdf':
	case 'docs/bskyb-fixing-security-vulnerabilities-complying-industry-standards-payment-protection.pdf':
	case 'docs/caixabank-relies-qualys-deal-security-threats-strengthen-customer-trust.pdf':
	case 'docs/casestudy_nybot.pdf':
	case 'docs/drg.pdf':
	case 'docs/dtring-de.pdf':
	case 'docs/ebay.pdf':
	case 'docs/ema_security-as-a-service-2010_cisco.pdf':
	case 'docs/enterpriseds_me.qxd.pdf':
	case 'docs/floridadoh.pdf':
	case 'docs/geisinger.pdf':
	case 'docs/le_groupe_geodis.pdf':
	case 'docs/mcdonalds-fr.pdf':
	case 'docs/ofgem-deploying-security-measures-enabling-compliance-multi-faceted-organisation.pdf':
	case 'docs/pakistan-telecommunication-adopts-approach-securing-it-assets-security-posture.pdf':
	case 'docs/reigning-in-global-web-application-security-risk-qualys.pdf':
	case 'docs/rtl-nederland-strengthens-defences-against-hackers-disruption.pdf':
	case 'docs/sodexho_fr.pdf':
	case 'docs/sodexo-automatiser-gestion-vulnerabilites-securiser-entreprise-denvergure-mondiale-premiercase-ordre.pdf':
	case 'docs/sodexo-securing-enterprise-automated-vulnerability-management.pdf':
	case 'docs/sodexo_fr.pdf':
	case 'docs/tower_records.pdf':
	case 'docs/ucmc_cs.pdf':
	case 'docs/university-westminster-maintaining-security-protecting-infrastructure-assets.pdf':
	moved_permanently('/customers/');
	break;
	// redirect for research notes docs
	case 'docs/research-notes/qualys-8912-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-8912-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-agent-linux-1.5-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-agent-linux-1.5-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-agent-linux-mac-1.6-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-agent-linux-mac-1.6-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-agent-windows-1.5.5-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-agent-windows-1.5.5-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.15-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.15-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.15-waf-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.15-waf-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.15-was-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.15-was-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.15-was-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.15-was-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.16-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.16-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.16-waf-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.16-waf-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.16.1-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.16.1-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.17-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.17-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8-update-2.18-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8-update-2.18-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.8.4-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.8.4-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-update-2.19-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-update-2.19-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-update-2.19-waf-1.22-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-update-2.19-waf-1.22-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-update-2.19-was-4.13-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-update-2.19-was-4.13-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9-update-2.19.02-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9-update-2.19.02-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.1-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.1-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.1-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.1-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.1.1-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.1.1-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.1.2-update-2.20-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.1.2-update-2.20-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.2-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.2-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-8.9.2.1-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-8.9.2.1-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-update-2.21-api-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-update-2.21-api-release-notes.pdf');
	break;
	case 'docs/research-notes/qualys-cloud-suite-update-2.21-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-suite-update-2.21-release-notes.pdf');
	break;
	case 'docs/qualys-asset-management-quick-start-guide.pdf':
	case 'docs/version/8.1/qualys-asset-management-quick-start-guide.pdf':
	moved_permanently('https://community.qualys.com/docs/DOC-4802');
	break;
	case 'docs/qualys-api-limits-810.pdf':
	case 'docs/version/8.10/qualys-api-limits-810.pdf':
	moved_permanently('/docs/qualys-api-limits.pdf');
	break;
	case 'qsc-berlin-dinner':
	moved_permanently('https://docs.google.com/forms/d/1pn68bgtb8hbedl4Q1hI081bkyzR75-8EmM0NvRscoX0/viewform');
	break;
	case 'forms/whitepapers/automating-20-cis-critical-security-controls':
	case 'forms/whitepapers/automating-20-cis-critical-security-controls/de':
	case 'forms/whitepapers/automating-20-cis-critical-security-controls/fr':
	moved_permanently('/forms/whitepapers/qualys-guide-automating-cis-20-critical-controls/');
	break;
	break;
	case 'forms/whitepapers/gartner-magic-quadrant-application-security-testing':
	case 'forms/whitepapers/gartner-magic-quadrant-application-security-testing/confirm':
	moved_permanently('https://www.gartner.com/doc/reprints?id=1-3UKD88K&ct=170301&st=sb');
	break;
	case 'videos/series/web-application-firewall/security-policy-creation':
	case 'videos/series/web-application-firewall/appliances-portal-configuration':
	case 'videos/series/web-application-firewall/appliances-ec2-deployment':
	case 'videos/series/web-application-firewall/appliances-ovf-deployment':
	case 'videos/series/web-application-firewall/applications-basic-configuration':
	case 'videos/series/web-application-firewall/applications-adding-ssl':
	case 'videos/series/web-application-firewall/events':
	case 'videos/2014/web-application-firewall':
	case 'videos/2014/web-application-firewall/waf-creation-deployment-appliances':
	case 'videos/2014/web-application-firewall/waf-creation-protection-web-applications':
	case 'videos/2014/web-application-firewall/waf-introduction-overview':
	case 'videos/2014/web-application-firewall/waf-standard-security-policy-creation':
	moved_permanently('https://community.qualys.com/community/web-application-firewall');
	break;
	case 'docs/qg_tne_brief.pdf':
	moved_permanently('https://community.qualys.com/community/developer');
	break;
	case 'qualys-for-oracle-cloud':
	moved_permanently('https://www.qualys.com');
	break;
	case 'certview-free':
	moved_permanently('/certview/');
	break;
	case 'cloudview-free':
	case 'cloudview':
	moved_permanently('/forms/totalcloud/');
	break;
	case 'docs/qualys-was-iviz-solution-brief.pdf':
	moved_permanently('/resources/');
	break;
	case 'company/newsroom/news-releases/usa/2013-02-13-iviz-partners-with-qualys-to-deliver-comprehensive-cloud-based-web-application-security':
	moved_permanently('/company/newsroom/news-releases/usa/');
	break;
	case 'company/newsroom/news-releases/uk/2013-02-13-iviz-partners-with-qualys-to-deliver-comprehensive-cloud-based-web-application-security':
	moved_permanently('/company/newsroom/news-releases/uk/');
	break;
	case 'company/newsroom/news-releases/france/iviz-sassocie-qualys-pour-fournir-une-scurit-complte-des-applications-web-dans-le-cloud-':
	moved_permanently('/company/newsroom/news-releases/france/');
	break;
	case 'videos/series/web-application-scanning':
	case 'videos/series/web-application-scanning/creating-web-applications':
	case 'videos/series/web-application-scanning/discovery-cataloging':
	case 'videos/series/web-application-scanning/overview':
	case 'videos/series/web-application-scanning/report-templates':
	case 'videos/series/web-application-scanning/reporting':
	case 'videos/series/web-application-scanning/scanning':
	case 'videos/series/web-application-scanning/was-authentication-selenium':
	case 'videos/series/web-application-scanning/was-crawl-settings-selenium':
	case 'videos/series/web-application-scanning/was-integration-selenium':
	case 'videos/series/web-application-scanning/was-introduction-selenium':
	moved_permanently('https://vimeo.com/album/4294110');
	break;
	case 'docs/qualysguard-integration-cyber-ark-pim-suite.pdf':
	moved_permanently('/docs/cyberark-aim-integration-datasheet.pdf');
	break;
	case 'support/faq/seal':
	moved_permanently('/support/faq/');
	break;
	case 'azure-stack':
	moved_permanently('/public-cloud/#azure');
	break;
	case 'suite8.15.1':
	moved_permanently('https://blog.qualys.com/technology/2018/09/10/qualys-cloud-platform-8-15-1-new-features');
	break;
	case 'suite8.15.2':
	moved_permanently('https://blog.qualys.com/technology/2018/09/18/qualys-cloud-platform-8-15-2-new-features');
	break;
	case '2018/qsc/dubai':
	case '2019/qsc/dubai':
	moved_permanently('/qsc/2019/dubai/');
	break;
	case '2018/qsc/mumbai':
	moved_permanently('/qsc/2019/mumbai/');
	break;
	case '2018/qsc/register/dubai':
	case '2018/qsc/register/dubai/confirm':
	moved_permanently('/qsc/register/#dubai');
	break;
	case '2018/qsc/register/mumbai':
	case '2018/qsc/register/mumbai/confirm':
	moved_permanently('/qsc/register/#mumbai');
	break;
	case 'trial':
	moved_permanently('/free-services/');
	break;
	case '2018/qsc':
	case 'qsc/2019/san-francisco':
	moved_permanently('/qsc/');
	break;
	case 'qsc':
	moved_permanently('/qsc/');
	break;
	case '2018/qsc/register':
	case '2018/qsc/register/confirm':
	moved_permanently('/qsc/register/');
	break;
	case '2018/qsc/get-notified':
	case '2018/qsc/get-notified/confirm':
	moved_permanently('/qsc/get-notified/');
	break;
	case '2018/qsc/las-vegas':
	moved_permanently('/qsc/2018/las-vegas/');
	break;
	case '2018/qsc/berlin':
	moved_permanently('/qsc/2018/berlin/');
	break;
	case '2018/qsc/paris':
	moved_permanently('/qsc/2018/paris/');
	break;
	case '2018/qsc/london':
	moved_permanently('/qsc/2018/london/');
	break;
	case '2018/qsc/register/investor':
	case '2018/qsc/register/investor/confirm':
	case '2018/qsc/register/investor/livestream':
	case '2018/qsc/register/investor/livestream/confirm':
	moved_permanently('https://investor.qualys.com/');
	break;
	case '2019/rsac/reception':
	case '2019/rsac/reception/confirm':
	case '2019/cio-ciso-dinner':
	case '2019/cio-ciso-dinner/confirm':
	moved_permanently('/qsc/');
	case '2019/analysts-investors':
	moved_permanently('https://investor.qualys.com/events/event-details/analysts-investors-event');
	break;
	case 'lp/fast-simple-vulnerability-management':
	case 'lp/fast-simple-pci-compliance':
	case 'lp/analyze-prioritize-mitigate-security-risks-real-time':
	case 'lp/fast-simple-vulnerability-management/confirm':
	case 'lp/fast-simple-pci-compliance/confirm':
	case 'lp/analyze-prioritize-mitigate-security-risks-real-time/confirm':
	moved_permanently('/free-trial/');
	break;
	case 'lp/schnelles-einfaches-schwachstellenmanagement/de':
	case 'lp/schnelles-einfaches-schwachstellenmanagement/de/confirm':
	case 'lp/schnelle-einfache-pci-compliance/de':
	case 'lp/schnelle-einfache-pci-compliance/de/confirm':
	case 'lp/fast-simple-pci-compliance/de':
	case 'lp/schnelles-einfaches-schwachstellenmanagement':
	case 'lp/fast-simple-vulnerability-management/de':
	moved_permanently('/lp/free-trial/de/');
	break;
	case 'lp/fast-simple-pci-compliance/fr':
	case 'lp/gestion-vulnerabilites-rapide-simple/fr':
	case 'lp/gestion-vulnerabilites-rapide-simple/fr/confirm':
	case 'lp/conformite-pci-rapide-simple/fr':
	case 'lp/conformite-pci-rapide-simple/fr/confirm':
	case 'lp/gestion-vulnerabilites-rapide-simple':
	case 'lp/fast-simple-vulnerability-management/fr':
	moved_permanently('/lp/free-trial/fr/');
	break;
	case 'cbc-poodle':
	moved_permanently('https://blog.qualys.com/technology/2019/04/03/zombie-poodle-and-goldendoodle-vulnerabilities');
	break;
	case 'forms/out-of-band-configuration-assessment':
	case 'forms/out-of-band-configuration-assessment/confirm':
	moved_permanently('/apps/out-of-band-configuration-assessment/');
	break;
	case 'solutions/devsecops':
	moved_permanently('/solutions/devops/');
	break;
	case 'leadership-update':
	moved_permanently('https://blog.qualys.com/qualys-insights/2021/03/22/qualys-leadership-update-moving-forward-together');
	break;
	case 'docs/qualys-cloud-agent-mac-install-guide.pdf':
	moved_permanently('/docs/qualys-cloud-agent-macos-install-guide.pdf');
	break;
	case 'docs/qualys_securing_google_cloud_platform.pdf':
	moved_permanently('/docs/qualys-securing-google-cloud-platform.pdf');
	break;
	case 'docs/qualys-cloud-agent-rhel-coreos-install-guide.pdf':
	moved_permanently('/docs/qualys-cloud-agent-redhat-openshift-coreos-install-guide.pdf');
	break;
	case 'apps/pci-compliance':
	moved_permanently('/solutions/pci-compliance/');
	break;
	case 'company/newsroom/news-release/usa/qualys-launches-ransomware-risk-assessment-service':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-launches-ransomware-risk-assessment-service/');
	break;
	case 'training/course/advanced-scanning':
	moved_permanently('/training/course/scanning-strategies/');
	break;
	case 'training/course/advanced-reporting':
	moved_permanently('/training/course/reporting-strategies/');
	break;
	case 'training/library/vmdr':
	moved_permanently('/training/library/vmdr-onboarding/');
	break;
	case 'training/library/assetview-threatprotection':
	moved_permanently('/training/library/csam-onboarding/');
	break;
	case 'vulnerability-remediation-not-just-patching':
	moved_permanently('https://blog.qualys.com/product-tech/2022/02/01/vulnerability-remediation-its-not-just-patching/');
	break;
	case 'context-xdr':
	moved_permanently('https://www.qualys.com/apps/extended-detection-response/');
	break;
	case 'context-xdr-trial':
	moved_permanently('https://www.qualys.com/forms/extended-detection-response/');
	break;
	case 'context-xdr-blog':
	moved_permanently('https://blog.qualys.com/product-tech/2022/02/08/introducing-qualys-context-xdr-the-difference-between-chaos-clarity');
	break;
	case 'context-xdr-live':
	moved_permanently('https://event.on24.com/wcc/r/3640485/C501C4A846DEE5D1BB32316D09251BF6');
	break;
	case 'xdr':
	moved_permanently('/apps/extended-detection-response/');
	break;
	case 'docs/qualys-xdr-zerodayenablement-guide.pdf':
	moved_permanently('/docs/qualys-xdr-dayzeroenablement-guide.pdf');
	break;
	case 'docs/qualys-xdr-zerooneenablement-guide.pdf':
	moved_permanently('/docs/qualys-xdr-dayoneenablement-guide.pdf');
	break;
	case 'docs/qualys-aws-security-hub-integration-api-user-guide.pdf':
	moved_permanently('/docs/qualys-aws-cloud-integration-api-user-guide.pdf');
	break;
	case 'car':
	moved_permanently('/apps/custom-assessment-remediation/');
	break;
	case 'car-2022-press-release':
	moved_permanently('/company/newsroom/news-releases/usa/qualys-launches-custom-assesment-and-remediation-solution/');
	break;
	case 'car-trial':
	moved_permanently('/forms/custom-assessment-remediation/');
	break;
	case 'car-2022-webinar':
	moved_permanently('https://event.on24.com/wcc/r/3798424/695764C6E2F7350FB88421650EA824BE/3821471?partnerref=redirect-pr');
	break;
	case 'vmdr-live':
	moved_permanently('https://event.on24.com/wcc/r/3812626/597A1B07681292DA38D39B3BEEFA37EA');
	break;
	case 'forms/industrial-control-security':
	moved_permanently('/forms/vmdr-ot/');
	break;
	case 'forms/ebook/web-application-security-for-dummies':
	case 'forms/ebook/web-application-security-for-dummies/confirm':
	case 'forms/ebook/vulnerability-management-for-dummies':
	case 'forms/ebook/vulnerability-management-for-dummies/confirm':
	case 'forms/ebook/it-policy-compliance-for-dummies':
	case 'forms/ebook/it-policy-compliance-for-dummies/confirm':
	case 'forms/ebook/pci-compliance-for-dummies':
	case 'forms/ebook/pci-compliance-for-dummies/confirm':
	case 'docs/was-for-dummies.pdf':
	case 'docs/vm-for-dummies-2nd-edition.pdf':
	case 'docs/it_policy_compliance_for_dummies.pdf':
	case 'docs/pci-for-dummies.pdf':
	moved_permanently('/resources/');
	break;
	case 'docs/qualys-vulnerability-analysis-jenkins-plugin-guide.pdf':
	moved_permanently('/docs/qualys-container-scanning-connector-jenkins-plugin-user-guide.pdf');
	break;
	case 'docs/qualys-vulnerability-analysis-bamboo-plugin-guide.pdf':
	moved_permanently('/docs/qualys-container-scanning-connector-bamboo-plugin-guide.pdf');
	break;
	case 'docs/qualys-vmdr-itsm-user-guide.pdf':
	moved_permanently('/docs/qualys-itsm-user-guide.pdf');
	break;
	case 'docs/qualys-ics-getting-started-guide.pdf':
	moved_permanently('/docs/qualys-vmdr-ot-getting-started-guide.pdf');
	break;
	case 'training/library/endpoint-detection-and-response':
	moved_permanently('/training/library/edr-onboarding/');
	break;
	case 'docs/release-notes/qualys-cloud-platform-10.21.0-release-notes.pdf':
	moved_permanently('/docs/release-notes/qualys-cloud-platform-10.21-release-notes.pdf');
	break;
    case 'training/library/global-assetview':
	moved_permanently('/training/library/csam-training/');
	break;
	case 'glossary/endpoint-protection':
	moved_permanently('/fundamentals/endpoint-protection/');
	break;
	case 'glossary/endpoint-detection-and-response':
	moved_permanently('/fundamentals/endpoint-detection-and-response/');
	break;
	case 'what-is-vulnerability-management-detection-response':
	moved_permanently('/fundamentals/what-is-vulnerability-management-detection-response/');
	break;
	case 'docs/qualys-vmdr-2-checklist-_essential-vm-must-haves-220708.pdf':
	moved_permanently('/docs/qualys-vmdr-checklist-essential-vm-must-haves-condensed-230113.pdf');
	break;
	case 'training/library/csam-onboarding':
	case 'training/library/csam-training':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=csam-onboarding');
	break;
	case 'training/library/custom-assessment-and-remediation-car':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=custom-assessment-remediation');
	break;
	case 'training/library/cloudview':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=totalcloud-onboarding');
	break;
	case 'training/library/how-to-connectors':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=how-to-totalcloud');
	break;
	case '2024/02/cyber-risk-series':
	moved_permanently('https://qualys.brighttalk.com/');
	break;
	case 'training/library/was':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=was');
	break;
	case 'training/library/how-to-was':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=how-to-was');
	break;
	case 'cloud-platform':
	case 'trurisk-platform':
	moved_permanently('/enterprise-trurisk-platform/');
	break;
	case 'training/library/how-to-container-security':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=how-to-containersecurity');
	break;
	case 'training/library/container-security':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=containersecurity');
	break;
	case 'training/library/vulnerability-management':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=vmdr');
	break;
	case 'training/library/patch-management':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=patch-management');
	break;
	case 'training/library/how-to-external-attack-surface-management':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=easm-onboarding');
	break;
	case 'qualys-vs-tenable':
	moved_permanently('/compare/qualys-vs-tenable/');
	break;
	case 'training/library/global-it-asset-inventory':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=csam-onboarding');
	break;
	case 'subscriptions/consultants':
	case 'subscriptions/consultants/confirm':
	case 'support/faq/consultant':
	case 'forms/consultant-inquiry':
	case 'forms/consultant-inquiry/confirm':
	case 'forms/consulting-edition':
	case 'forms/consulting-edition/confirm':
	case 'lp/embed-security-managed-services':
	case 'lp/embed-security-managed-services/confirm':
	case 'lp/switch-to-qualys':
	case 'lp/switch-to-qualys/confirm':
	moved_permanently('/partners/');
	break;
	case 'training/library/cybersecurity-asset-management':
	moved_permanently('https://success.qualys.com/customersupport/s/video-library?product=csam-onboarding');
	break;
	// by default, do nothing and continue
	default:
	break;
}

?>