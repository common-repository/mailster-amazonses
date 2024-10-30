<?php

namespace Mailster\Aws3\Aws\SesV2;

use Mailster\Aws3\Aws\AwsClient;
/**
 * This client is used to interact with the **Amazon Simple Email Service** service.
 * @method \Aws\Result batchGetMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetMetricDataAsync(array $args = [])
 * @method \Aws\Result createConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetAsync(array $args = [])
 * @method \Aws\Result createConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method \Aws\Result createContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactAsync(array $args = [])
 * @method \Aws\Result createContactList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContactListAsync(array $args = [])
 * @method \Aws\Result createCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \Aws\Result createDedicatedIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDedicatedIpPoolAsync(array $args = [])
 * @method \Aws\Result createDeliverabilityTestReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeliverabilityTestReportAsync(array $args = [])
 * @method \Aws\Result createEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEmailIdentityAsync(array $args = [])
 * @method \Aws\Result createEmailIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEmailIdentityPolicyAsync(array $args = [])
 * @method \Aws\Result createEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEmailTemplateAsync(array $args = [])
 * @method \Aws\Result createImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImportJobAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetAsync(array $args = [])
 * @method \Aws\Result deleteConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method \Aws\Result deleteContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactAsync(array $args = [])
 * @method \Aws\Result deleteContactList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContactListAsync(array $args = [])
 * @method \Aws\Result deleteCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \Aws\Result deleteDedicatedIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDedicatedIpPoolAsync(array $args = [])
 * @method \Aws\Result deleteEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailIdentityAsync(array $args = [])
 * @method \Aws\Result deleteEmailIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailIdentityPolicyAsync(array $args = [])
 * @method \Aws\Result deleteEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEmailTemplateAsync(array $args = [])
 * @method \Aws\Result deleteSuppressedDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSuppressedDestinationAsync(array $args = [])
 * @method \Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \Aws\Result getBlacklistReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlacklistReportsAsync(array $args = [])
 * @method \Aws\Result getConfigurationSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetAsync(array $args = [])
 * @method \Aws\Result getConfigurationSetEventDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method \Aws\Result getContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactAsync(array $args = [])
 * @method \Aws\Result getContactList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContactListAsync(array $args = [])
 * @method \Aws\Result getCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \Aws\Result getDedicatedIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDedicatedIpAsync(array $args = [])
 * @method \Aws\Result getDedicatedIpPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDedicatedIpPoolAsync(array $args = [])
 * @method \Aws\Result getDedicatedIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDedicatedIpsAsync(array $args = [])
 * @method \Aws\Result getDeliverabilityDashboardOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliverabilityDashboardOptionsAsync(array $args = [])
 * @method \Aws\Result getDeliverabilityTestReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeliverabilityTestReportAsync(array $args = [])
 * @method \Aws\Result getDomainDeliverabilityCampaign(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainDeliverabilityCampaignAsync(array $args = [])
 * @method \Aws\Result getDomainStatisticsReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainStatisticsReportAsync(array $args = [])
 * @method \Aws\Result getEmailIdentity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailIdentityAsync(array $args = [])
 * @method \Aws\Result getEmailIdentityPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailIdentityPoliciesAsync(array $args = [])
 * @method \Aws\Result getEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEmailTemplateAsync(array $args = [])
 * @method \Aws\Result getImportJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImportJobAsync(array $args = [])
 * @method \Aws\Result getSuppressedDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSuppressedDestinationAsync(array $args = [])
 * @method \Aws\Result listConfigurationSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfigurationSetsAsync(array $args = [])
 * @method \Aws\Result listContactLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContactListsAsync(array $args = [])
 * @method \Aws\Result listContacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContactsAsync(array $args = [])
 * @method \Aws\Result listCustomVerificationEmailTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomVerificationEmailTemplatesAsync(array $args = [])
 * @method \Aws\Result listDedicatedIpPools(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDedicatedIpPoolsAsync(array $args = [])
 * @method \Aws\Result listDeliverabilityTestReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeliverabilityTestReportsAsync(array $args = [])
 * @method \Aws\Result listDomainDeliverabilityCampaigns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainDeliverabilityCampaignsAsync(array $args = [])
 * @method \Aws\Result listEmailIdentities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEmailIdentitiesAsync(array $args = [])
 * @method \Aws\Result listEmailTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEmailTemplatesAsync(array $args = [])
 * @method \Aws\Result listImportJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImportJobsAsync(array $args = [])
 * @method \Aws\Result listRecommendations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecommendationsAsync(array $args = [])
 * @method \Aws\Result listSuppressedDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSuppressedDestinationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putAccountDedicatedIpWarmupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method \Aws\Result putAccountDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountDetailsAsync(array $args = [])
 * @method \Aws\Result putAccountSendingAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountSendingAttributesAsync(array $args = [])
 * @method \Aws\Result putAccountSuppressionAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountSuppressionAttributesAsync(array $args = [])
 * @method \Aws\Result putAccountVdmAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAccountVdmAttributesAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetDeliveryOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetDeliveryOptionsAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetReputationOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetReputationOptionsAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetSendingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetSendingOptionsAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetSuppressionOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetSuppressionOptionsAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetTrackingOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method \Aws\Result putConfigurationSetVdmOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putConfigurationSetVdmOptionsAsync(array $args = [])
 * @method \Aws\Result putDedicatedIpInPool(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDedicatedIpInPoolAsync(array $args = [])
 * @method \Aws\Result putDedicatedIpPoolScalingAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDedicatedIpPoolScalingAttributesAsync(array $args = [])
 * @method \Aws\Result putDedicatedIpWarmupAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method \Aws\Result putDeliverabilityDashboardOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDeliverabilityDashboardOptionAsync(array $args = [])
 * @method \Aws\Result putEmailIdentityConfigurationSetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityConfigurationSetAttributesAsync(array $args = [])
 * @method \Aws\Result putEmailIdentityDkimAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityDkimAttributesAsync(array $args = [])
 * @method \Aws\Result putEmailIdentityDkimSigningAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityDkimSigningAttributesAsync(array $args = [])
 * @method \Aws\Result putEmailIdentityFeedbackAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityFeedbackAttributesAsync(array $args = [])
 * @method \Aws\Result putEmailIdentityMailFromAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putEmailIdentityMailFromAttributesAsync(array $args = [])
 * @method \Aws\Result putSuppressedDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSuppressedDestinationAsync(array $args = [])
 * @method \Aws\Result sendBulkEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBulkEmailAsync(array $args = [])
 * @method \Aws\Result sendCustomVerificationEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCustomVerificationEmailAsync(array $args = [])
 * @method \Aws\Result sendEmail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendEmailAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testRenderEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testRenderEmailTemplateAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateConfigurationSetEventDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 * @method \Aws\Result updateContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \Aws\Result updateContactList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateContactListAsync(array $args = [])
 * @method \Aws\Result updateCustomVerificationEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCustomVerificationEmailTemplateAsync(array $args = [])
 * @method \Aws\Result updateEmailIdentityPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmailIdentityPolicyAsync(array $args = [])
 * @method \Aws\Result updateEmailTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEmailTemplateAsync(array $args = [])
 */
class SesV2Client extends AwsClient
{
}
