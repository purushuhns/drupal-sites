<div id="page" class="page" xmlns="http://www.w3.org/1999/html">

  <?php include ($directory."/templates/partials/menu.php"); ?>
<div class="api-documents-page container">

<?php
if (user_has_role(DRUPAL_AUTHENTICATED_RID)) {
                           ?>

<div id="api-documentation" class="api-navigation col-md-4">

  <div class="new-inner">
  <h2>Overview</h2>

<p>
    <a href="#_Toc458500044">Use of this Document</a>
</p>
<p>
    <a href="#_Toc458500045">Transaction Flow</a>
</p>
<p>
    <a href="#_Toc458500045_c3">c3 Technology</a>
</p>

    <h2>Interface Setup</h2>

<p>
    <a href="#_Toc458500047">Product Selection and Setup</a>
</p>
<p>
    <a href="#_Toc458500048">Integration</a>
</p>
<p>
    <a href="#_Toc458500049">Testing</a>
</p>
<p>
    <a href="#_Toc458500050">Connectivity</a>
</p>

    <h2>Summary of Capabilities</h2>

<p>
    <a href="#_Toc458500052">Payment Processing</a>
</p>
<p>
    <a href="#_Toc458500053">Transaction Capabilities</a>
</p>
<p>
    <a href="#_Toc458500054">Policy Fulfillment – Proof of Insurance</a>
</p>
<p>
    <a href="#_Toc458500055">Performance</a>
</p>
<p>
    <a href="#_Toc458500056">Data Validations</a>
</p>


    <h2>Message Structure</h2>


<p>
    <a href="#_Toc458500058">Language and Character Encoding</a>
</p>
<p>
    <a href="#_Toc458500059">Data Formats</a>
</p>
<p>
    <a href="#_Toc458500060">Requests</a>
</p>


    <h2>Data Elements and Sample XMLs</h2>


<p>
    <a href="#_Toc458500062">Common Types</a>
</p>
<p>
    <a href="#_Toc458500082">Quote Request</a>
</p>
<p>
    <a href="#_Toc458500085">Quote Response</a>
</p>
<p>
    <a href="#_Toc458500089">Sell Request</a>
</p>
<p>
    <a href="#_Toc458500092">Sell Response</a>
</p>
<p>
    <a href="#_Toc458500095">Cancellation Request*</a>
</p>
<p>
    <a href="#_Toc458500098">Cancellation Response</a>
</p>
    <h2>Appendix</h2>
<p>
    <a href="#_Toc458500102">Required XSDs</a>
</p>
<p>
    <a href="#_Toc458500103">Payment Types</a>
</p>
<p>
    <a href="#_Toc458500104">Error and Warning Codes</a>
</p>
  </div>


</div>

<div class="api-content col-md-8">

<div class="statement well">
  <p class="title"><strong>Statement of Confidentiality</strong></p>

  <p class="description">All information expressed in this document is the confidential and exclusive intellectual property of Travel Guard. No external party is authorized to
    discuss, disclose or receive any portion of this document without the express written permission of Travel Guard Worldwide, Inc.
</p>
</div>

<h1>
  <a name="_Toc458500043">Overview</a>
</h1>
<p>
  <strong></strong>
</p>
<p>
  Travel Guard’s integration technology utilizes simplified and flexible methods to collect transaction specific data from our partners. This technology
  allows customers to utilize one XML format for multiple countries and multiple products. Further, Travel Guard provides a unique product selection service
  allowing our partners to provide Travel Guard product offerings without having to develop the functionality. Travel Guard’s product selection technology
  will utilize the basic trip and traveler information to select and quote the appropriate product for that customer.
</p>
<p>
  Essentially, Travel Guard’s integration technology requires less IT development time and cost for our partners. Travel Guard’s goal is to provide a
  seamless integration resulting in robust policy processing options.
</p>
<h2>
  <a name="_Toc458500044"></a>
  <a name="_Toc382211571"></a>
  <a name="_Toc382211514"></a>
  <a name="_Toc382211418">Use of this Document</a>
</h2>
<p>
  This document is intended to provide initial technical specifications to our partners for development purposes. This document should be used as a guideline
  throughout the integration process and can be referenced to find the data and formatting requirements to complete a general integration. The intended
  audience of this document is development staff and XML integration specialists.
</p>
<p>
  The XML examples outlined within this document are intended to provide the baseline for integration with Travel Guard. The XML requirements may change
  depending on product selection, payment options, or partner distribution countries. Travel Guard recommends that our partners wait to begin their formal
  technical integration until a Travel Guard XML Integration Specialist has been consulted.
  <s>
  </s>
</p>
<h2>
  <a name="_Toc458500045"></a>
  <a name="_Toc382211572"></a>
  <a name="_Toc382211515"></a>
  <a name="_Toc382211419">Transaction Flow</a>
</h2>
<p>
  **Fulfillment = Email containing link to proof of insurance.
</p>

<h2>
  <a name="_Toc458500045_c3">
  C<sup>3</sup>
  Technology
  </a>
</h2>

<p>
  Maximizing ancillary income is clearly a priority in selecting an insurance partner. We understand this priority and present to you
</p>
<p>
  <strong>C<sup>3</sup> </strong>
  – AIG Travel’s comprehensive suite of technology solutions, designed to help you <u>C</u>onnect, <u>C</u>ustomize and <u>C</u>onvert
</p>


<p>Maximizing ancillary income is clearly a priority in selecting an insurance partner. We understand this priority and present to you C<sup>3</sup>  – AIG Travel’s comprehensive suite of technology solutions, designed to help you Connect, Customize and Convert travel insurance sales with ease and efficiency. C<sup>3</sup> enables you to maximize your ancillary revenue, not only by optimizing sales results, but also by streamlining and reducing the operational effort required to run the program.</p>

<p>While developing this industry leading solution, we remained focused on ensuring that C<sup>3</sup> is:</p>
<ul style="list-style: inherit">
  <li>Easy to integrate and easy to use;</li>
  <li>Reliable and includes around-the-clock support to maximize your revenue results;</li>
  <li>A positive experience for both you and your customers.</li>
</ul>
<p>When you partner with AIG Travel through the proprietary and web-based technologies available in C<sup>3</sup>, you receive the benefit
of our connections to all the major travel distribution systems and supplier channels; more than 45,000 fully integrated points of sale worldwide.
We are not limited by geography, which means you and your customers benefit from our global connections.</p>

<p>Through a single source of connectivity, we bring you the freedom to sell locally relevant products in local currencies, as well as expand without undergoing major technical work each time you add a new country or channel to your portfolio.</p>

<img src="sites/all/themes/npr/images/content/g3technology.png" alt="C3 Technology">

<p>Travel Guard’s integration technology utilizes simplified and flexible methods to collect transaction specific data from our partners. This technology allows customers to utilize one XML format for multiple countries and multiple products. Further, Travel Guard provides a unique product selection service allowing our partners to provide Travel Guard product offerings without having to develop the functionality. Travel Guard’s product selection technology will utilize the basic trip and traveler information to select and quote the appropriate product for that customer.</p>

<p>Essentially, Travel Guard’s integration technology requires less IT development time and cost for our partners. Travel Guard’s goal is to provide a seamless integration resulting in robust policy processing options.</p>

<h1>
  <a name="_Toc458500046"></a>
  <a name="_Toc382211583"></a>
  <a name="_Toc382211526"></a>
  <a name="_Toc382211430">Interface Setup – Requirements and Flow of Events</a>
</h1>
<h2>
  <a name="_Toc458500047"></a>
  <a name="_Toc382211584"></a>
  <a name="_Toc382211527"></a>
  <a name="_Toc382211431">Product Selection and Setup</a>
</h2>
<p>
  The initial step in a Partner Integration is the selection of products. A Travel Guard Account Manager will work with the Partner to obtain the product
  requirements and pass them to Travel Guard’s IT department. Once the products are successfully created within Travel Guard’s internal applications, the
  Partner specific XML strings are created and tested by a Travel Guard XML specialist.
</p>
<h2>
  <a name="_Toc458500048"></a>
  <a name="_Toc382211585"></a>
  <a name="_Toc382211528"></a>
  <a name="_Toc382211432">Integration</a>
</h2>
<p>
  A Travel Guard XML Specialist will work with the Partner to provide the specific XML strings required for policy quote, sale, and cancellation. The XML
  strings created by the Travel Guard XML Specialist are specific to the Partner and should supersede any of the sample XML strings outlined in this
  document.
</p>
<p>
  A complete list of potential Tag/Data Elements displayed in a grid format is available in the    <a href="#_Data_Elements_and">Data Elements and Sample XMLs</a> section below. The grid provides details such as field requirement information including a
  required column where “Y” is equal to Required and “N” is equal to Not Required. Some fields are marked “C”, for conditional, implying the field is
  required if certain product types are purchased. Under each grid there are example XML strings provided for each request and response.*
</p>
<p>
  <em> </em>
</p>
<p>
  <em>*Depending on the type of product, the type of Partner, and their location, the required XML data elements may vary. </em>
</p>
<p>
  <strong><u></u></strong>
</p>
<h2>
  <a name="_Toc458500049"></a>
  <a name="_Toc382211586"></a>
  <a name="_Toc382211529"></a>
  <a name="_Toc382211433">Testing</a>
</h2>
<p>
  Testing for the success of integration is required. The Travel Guard XML Specialist and Account Manager will work with the Partner to complete successful
  integration and testing. Specific testing responsibilities are as follows:
</p>
<p>
  · Partners are responsible for testing the correct application of all business rules set up on the submitting (Partner) website.
</p>
<p>
  · Travel Guard will test for the success of integration on our own technology including Product Rules, Errors, Fulfillment, and Policy Issuance.
</p>
<h2>
  <a name="_Toc458500050"></a>
  <a name="_Toc382211587"></a>
  <a name="_Toc382211530"></a>
  <a name="_Toc382211434">Connectivity</a>
</h2>
<p>
  Testing Environment URL – <a href="https://lite.uat.travelguard.com">U </a>https://lite.uat2.travelguard.biz/sml
</p>
<p>
  Production/Live Environment URL – will be provided to partner within the testing phase.
</p>
<p>
  Security: HTTPS is our primary security protocol and provides encrypted data transfer.
</p>
<p>
  Content Types – Text and XML
</p>
<h1>
  <a name="_Toc458500051"></a>
  <a name="_Toc382211573"></a>
  <a name="_Toc382211516"></a>
  <a name="_Toc382211420">Summary of Capabilities</a>
</h1>
<h2>
  <a name="_Toc458500052"></a>
  <a name="_Toc382211574"></a>
  <a name="_Toc382211517"></a>
  <a name="_Toc382211421">Payment Processing</a>
</h2>
<p>
  Travel Guard can support integration with both Merchant and Non Merchant partners. However, the integration varies between the two processing types. This
  means that the partner must specify during the requirements gathering process if Travel Guard will act as the Merchant and process payments received for
  policies.
</p>
<p>
  <strong>Merchant Transactions:</strong>
</p>
<p>
  o Travel Guard is the acting Merchant for payment transactions. This must be set up prior to the testing phase of integration. The Partner will send the
  appropriate payment type and corresponding information (i.e. credit card type and card numbers) for Travel Guard to use and process policy payments.
</p>
<p>
  <strong>Non Merchant Transactions:</strong>
</p>
<p>
  · Travel Guard is not the acting Merchant for payment transactions. Payment Type will always be Non-Merchant (NR) and the Partner will process the policy
  payments.
</p>
<h2>
  <a name="_Toc458500053"></a>
  <a name="_Toc382211575"></a>
  <a name="_Toc382211518"></a>
  <a name="_Toc382211422">Transaction Capabilities</a>
</h2>
<p>
  The Global XML system was designed to accommodate most partner needs:
</p>
<p>
  · Quote – initial API call to retrieve a price for a selected product
</p>
<p>
  · Purchase / Sale (Issuance) – API call to complete the sale and issue a policy
</p>
<p>
  · Cancellation – API call to cancel an effective policy
</p>
<p>
  <strong><u>Note:</u></strong>
  Cancellations are not supported for policies issued within United States of America or Canada.
</p>
<h2>
  <a name="_Toc458500054"></a>
  <a name="_Toc382211576"></a>
  <a name="_Toc382211519"></a>
  <a name="_Toc382211423">Policy Fulfillment – Proof of Insurance</a>
</h2>
<p>
  Upon successful policy issuance, Travel Guard offers the following policy fulfillment options to a partner (assuming Travel Guard is the Merchant of
  Record):
</p>
<p>
  · Fulfillment maintained by the partner – this is not the preferred method
</p>
<ul>
  <li>
    Fulfillment maintained by Travel Guard
  </li>
</ul>
<p>
  o Email fulfillment (insured email address is required)
</p>
<p>
  § Fulfillment is triggered automatically after policy issuance
</p>
<p>
  o A web service call is available to obtain the policy certificate any time after the policy is issued; the url
</p>
<p>
  for the policy lookup is provided in the sell response XML
</p>
<h2>
  <a name="_Toc458500055">Performance</a>
</h2>
<p>
  <u>Response Time</u>
  : The Average processing time after being received by the Travel Guard system is 2 seconds.
</p>
<p>
  <em>
    **Note: Transaction completion time will be impacted by network latency. It also includes the time to receive the data from external client, process
    the data internally and communicate back to the external client with a policy number.
  </em>
</p>
<p>
  <u>Error Checking</u>
  : Various error codes for failed transactions are supported. These are listed in the Appendix under    <a href="#_Error_and_Warning">Error and Warning Codes</a>. <u></u>
</p>
<p>
  <u>Time Out: </u>
  The time out value of the system is 5 minutes or 300 seconds.<u></u>
</p>
<p>
  <u>Exception Processing: </u>
  Travel Guard Global XML does not provide exception processing such as re-try requests or duplicate transaction checks.
</p>
<p>
  <u>Availability:</u>
  The integration system is available 24 hours a day, 7 days a week.
</p>
<h2>
  <a name="_Toc458500056">Data Validations</a>
</h2>
<p>
  TG provides each Partner a transaction specific XML. This document outlines both the required and optional fields for each generic transaction request and
  response. All the required data fields as specified in the data tables are validated. An Error is generated if the validation fails. U
</p>
<p>
  <a href="#_Error_and_Warning">Click this link to reference the Appendix for Error Codes</a>
</p>
<p>
  It is recommended that the Partner uses the XSD to validate that the format, layout, and element names of the XML on the client side are correct.
</p>
<p>
  <a href="#_Required_XSDs">Click this link to reference the Appendix for the XSDs</a>
</p>
<h1>
</h1>
<h1>
  <a name="_Toc458500057">Message Structure</a>
</h1>
<p>
  Travel Guard’s streamlined interface is designed to handle transactional Travel Guard insurance product sales from external customers and partners. The
  interface is based on https protocol. External customers and partners typically develop client software that communicates with the Travel Guard Messaging
  Engine using the messaging structure defined in this document.
</p>
<p>
  Each transaction supports a <strong>– 1 policy – 1 plan -- up to N insured’s”</strong> structure. This implies that the external client can submit only 1
  policy at a time on 1 transaction and this policy can have up to N insured’s. “N” stands for one or more insured travelers as per the accepted
  requirements.
</p>
<h2>
  <a name="_Toc458500058">Language and Character Encoding</a>
</h2>
<p>
  The values of the elements and attributes will need to be encoded using the rules of XML when there are special characters in the value. The special
  characters that need to be encoded, and when they need to be are summarized here for reference:
</p>
<table border="0" cellspacing="0" cellpadding="0" width="433" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="101">
      <p>
        Plain Text
      </p>
    </td>
    <td width="88">
      <p>
        XML Encoding
      </p>
    </td>
    <td width="244">
      <p>
        Required in
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="101">
      <p align="left">
        &amp;
      </p>
    </td>
    <td width="88">
      <p>
        &amp;amp;
      </p>
    </td>
    <td width="244">
      <p>
        Element and attribute values
      </p>
    </td>
  </tr>
  <tr>
    <td width="101">
      <p align="left">
        &lt;
      </p>
    </td>
    <td width="88">
      <p>
        &amp;lt;
      </p>
    </td>
    <td width="244">
      <p>
        Element and attribute values
      </p>
    </td>
  </tr>
  <tr>
    <td width="101">
      <p align="left">
        &gt;
      </p>
    </td>
    <td width="88">
      <p>
        &amp;gt;
      </p>
    </td>
    <td width="244">
      <p>
        Element and attribute values
      </p>
    </td>
  </tr>
  <tr>
    <td width="101">
      <p align="left">
        ‘ (single quote)
      </p>
    </td>
    <td width="88">
      <p>
        &amp;apos;
      </p>
    </td>
    <td width="244">
      <p>
        Attribute values
      </p>
    </td>
  </tr>
  <tr>
    <td width="101">
      <p align="left">
        “ (double quote)
      </p>
    </td>
    <td width="88">
      <p>
        &amp;quot;
      </p>
    </td>
    <td width="244">
      <p>
        Attribute values
      </p>
    </td>
  </tr>
  </tbody>
</table>
<p>
  Note that the &amp;apos; and &amp;quot; only need to be used for those characters inside attribute values, which are only needed for the 7T7T
  <tt>
    rdf:resource
  </tt>
  <tt>
    7T7T
  </tt>
  attribute and the 7T7T
  <tt>
    xml:lang
  </tt>
  <tt>
    7T7T
  </tt>
  attribute.
</p>
<p>
  All other characters outside the core US-ASCII range of 32-126 should 11T11T<strong>not</strong><strong>11T11T</strong> be encoded with the HTML entities
  such as &amp;eacute, since these are not defined in XML. Numeric entities for the characters should be used which are written as &amp;#ddd, in decimal or
  &amp;#xABC, in hexadecimal. Alternatively they can be encoded as Unicode in one of the formats such as UTF-8 which is widely supported.
</p>
<h2>
  <a name="_Toc382211580"></a>
  <a name="_Toc382211523"></a>
  <a name="_Toc382211427"></a>
  <a name="_Toc458500059">Data Formats</a>
</h2>
<p>
  <strong>String:</strong>
  Any valid XML text. Special characters need to be properly encoded before sending the request (see Language and Character Encoding).
</p>
<p>
  <strong>Date Format:</strong>
  “mm/dd/yyyy”. For example 12/22/1954
</p>
<p>
  Note: if the date must be displayed in another format (i.e. dd/mm/yyyy) this must be performed by the front – end
</p>
<p>
  <strong>Date and Time Format: </strong>
  “mm/dd/yyyy hh:mm:ss AM/PM. For example 12/22/1954 04:00:00 PM
</p>
<p>
  Note: if the date must be displayed in another format (i.e. dd/mm/yyyy) this must be performed by the front – end
</p>
<p>
  <strong>Amount/Money:</strong>
  An 8 byte floating-point number
</p>
<p>
  <strong>Local language characters: </strong>
  Whenever partner is sending any local language character, it should be converted to UTF-8 Format.
</p>
<h2>
  <a name="_Toc458500060">Requests</a>
</h2>
<p>
  Partner applications communicate with Travel Guard’s System by sending HTTPS requests. The structure of the request is the structure defined in this
  document. Data elements are provided in later sections that detail specific information relative to the transaction types.
</p>
<h1>
  <a name="_Toc458500061"></a>
  <a name="_Toc382211589"></a>
  <a name="_Toc382211532"></a>
  <a name="_Toc382211436"></a>
  <a name="_Data_Elements_and"></a>
  Data Elements and Sample XMLs
</h1>
<p>
  As previously stated, the data elements included in the tables below are not specific to the Partner. The required data elements and XML string formatting
  may change depending on the implementation requirements of the Partner.
</p>
<p>
  Each of the data elements is marked with a “Required” indicator where “Y” is required, “N” is not required and “C” is conditionally required. Those that
  are marked as conditionally required may be dependent on many factors and should be reviewed against the specific Partner’s integration requirements.
</p>
<h2>
  <a name="_Toc458500062">Common Types</a>
</h2>
<p>
  The XML Requests and Responses are constructed from the combination of a set of Common Types.
</p>
<h3>
  <a name="_Toc458500063">Standard Attributes</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="122" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      <strong>TravelGuardStdAttributes</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      <strong>AttributeGroup</strong>
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      <strong></strong>
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      Language
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Default will be “en-US”
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      SchemaVersion
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      decimal
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Value is fixed 1.0
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      Timestamp<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      dateTime
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      UTC format with time zone
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      TransactionID
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      If not provided in the request, Travel Guard will create the transaction id.
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      ISOCurrencyCode
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      PartnerID<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Travel Guard assigned partner id.
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      PartnerSystemID
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Travel Guard assigned partner system id. Usually to differentiate between different partner Systems
    </p>
  </td>
</tr>
<tr>
  <td width="122" valign="top">
    <p>
      UWCountry
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      If not sent as part of request Travel Guard will look up based on details provided during partner Datasheet (parameters used may include
      partner id, origin, destination or some default values).
    </p>
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500064">Username Token</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="122" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="122" valign="top">
      <p>
        <strong>UsernameTokenType</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        For every partner/system integration a unique user name and password will be provided to partner to send it along with other data.
      </p>
    </td>
  </tr>
  <tr>
    <td width="122" valign="top">
      <p>
        Username
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Assigned by TG.
      </p>
    </td>
  </tr>
  <tr>
    <td width="122" valign="top">
      <p>
        Password
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Encrypted password provided by TG.
      </p>
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500065">Transaction Log</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="118" nowrap="" valign="top">
      <p>
        <strong>TransactionLog</strong>
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Common Type used in Response messages
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" nowrap="" valign="top">
      <p>
        Status<strong></strong>
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Possible values “Success” or “Failure”
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" nowrap="" valign="top">
      <p>
        Error
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Element visible only when Error occurs
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" nowrap="" valign="top">
      <p>
        Code
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        Int
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Error Code for debugging purpose
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" nowrap="" valign="top">
      <p>
        Message
      </p>
    </td>
    <td width="94" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Error message for problem description
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500066">Agency</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        <strong>Required</strong>
      </p>
    </td>
    <td width="266" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>AgencyType</strong>
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="266" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        AgencyCode
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
      <p>
        If not provided in request, TG will populate the default Agency, based on values provided during partner Datasheet
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        LocationCode
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
      <p>
        If not provided in request, TG will populate the default Agency, based on values provided during partner Datasheet
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        AgencyName
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        AgencyPhone
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        AgentEmail
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        HouseARC
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="266" valign="top">
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500067">Address</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>AddressType</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="54" valign="top">
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Street1<strong></strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Street2
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Street3
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        City<strong></strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        State<strong></strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        May be required in U.S. for Product selection
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        PostalCode<strong></strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        ISOCountry
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500068">ContactDetails</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>ContactDetails</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="54" valign="top">
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        OfficePhone
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        HomePhone
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        MobilePhone
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Fax
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Email
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500069">Segment Point</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        <strong>SegmentPointType</strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        complexType
      </p>
    </td>
    <td width="54" valign="top">
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        Location
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        attribute:Type
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Valid Values are
      </p>
      <p>
        • IATAAirport – IATA airport code
      </p>
      <p>
        • ISOCountry – ISO Country code
      </p>
      <p>
        • ISOState – ISO State code
      </p>
    </td>
  </tr>
  <tr>
    <td width="118" valign="top">
      <p>
        DateTime<strong></strong>
      </p>
    </td>
    <td width="90" valign="top">
      <p>
        dateTime
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Should be in UTC Format with timezone
      </p>
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500070">Trip Details</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>TripDetailsType</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Segments</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      attribute:TripType
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Valid values are
    </p>
    <p>
      • OW – One Way
    </p>
    <p>
      • RT – Round Trip
    </p>
    <p>
      • MT – Multi trip .
    </p>
    <p>
      If not specified, TG calculates based on the following
    </p>
    <p>
      1 segment – OW
    </p>
    <p>
      2 segment – RT
    </p>
    <p>
      3 or more segment – MT
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Segment</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Required
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      attribute:Order
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      int
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Carrier</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      attribute:Type
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Valid Values are
    </p>
    <p>
      • Airline
    </p>
    <p>
      • Bus
    </p>
    <p>
      • Cruise
    </p>
    <p>
      •TourOperator
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      CarrierName
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      The name of the carrier
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      CarrierCode<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      TripNumber<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Origin</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      SegmentPointType
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Required
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Destination</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      SegmentPointType
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Required
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500071">Booking Detail</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="274" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>BookingDetail</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      TotalPrice<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      decimal
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      ISOCurrencyCode
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
    <p>
      Only valid ISO currency code
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      InitialTripDepositDate<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      date
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      FinalTripDepositDate<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      date
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      BookingNumber
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      BookingType
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
    <p>
      Valid Values are
    </p>
    <p>
      • Corporate
    </p>
    <p>
      • Individual
    </p>
    <p>
      • Family
    </p>
    <p>
      • Group
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      PNRNumber<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      MarketingFlag<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="274" valign="top">
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500072">Beneficiaries</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="55" valign="top">
    <p>
      <strong>Required</strong>
    </p>
  </td>
  <td width="269" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
</thead>
<tbody>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Beneficiaries</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      <strong>Beneficiary</strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      complexType
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      FirstName
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      MiddleName
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      LastName
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      BirthDate<strong></strong>
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      date
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      Gender
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="269" valign="top">
    <p>
      M - Male
    </p>
    <p>
      F - Female
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      Identification
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="269" valign="top">
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      Type
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="269" valign="top">
    <p>
      0 - Passport number
    </p>
    <p>
      1 - National ID
    </p>
    <p>
      2 - Driver license number
    </p>
    <p>
      9 - Other ID
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      Percentage
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      Int
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="269" valign="top">
    <p>
      Value between 0 and 100
    </p>
  </td>
</tr>
<tr>
  <td width="118" valign="top">
    <p>
      Address
    </p>
  </td>
  <td width="90" valign="top">
    <p>
      AddressType
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="269" valign="top">
  </td>
</tr>
</tbody>
</table>
<h3>
  <a name="_Toc458500073">Ticket Detail</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="104" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        <strong>TicketDetail</strong>
      </p>
    </td>
    <td width="104" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        LoyaltyProgramCode
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        FrequentFlyerNumber
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        PassengerType<strong></strong>
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Possible values
      </p>
      <p>
        ADT, IND, CHD, YAD, SEN, INF, SPO
      </p>
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        TripCost<strong></strong>
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        double
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        ISOCurrencyCode
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Valid ISO currency code only
      </p>
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        TicketNumber<strong></strong>
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        TicketType<strong></strong>
      </p>
    </td>
    <td width="104" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="270" valign="top">
      <p>
        Possible values
      </p>
      <p>
        Refundable, Non-refundable
      </p>
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500074">Travelers</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Travelers</strong>
    </p>
  </td>
  <td width="104" valign="top">
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Traveler</strong>
    </p>
  </td>
  <td width="104" valign="top">
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      FirstName
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      MiddleName
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      LastName
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      BirthDate<strong></strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      Date
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      Optional, but may be required for pricing certain products
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      Gender
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      M - Male
    </p>
    <p>
      F- Female
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      Identification
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      attribute:type
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="270" valign="top">
    <p>
      0 - Passport number
    </p>
    <p>
      1 - National ID
    </p>
    <p>
      2 - Driver license number
    </p>
    <p>
      9 - Other ID
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Address</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      AddressType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>ContactInfo</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      ContactDetailsType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Beneficiaries</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      BeneficiariesType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>TicketDetails</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      TicketDetailType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>CustomElements</strong>
    </p>
  </td>
  <td width="104" valign="top">
    <p>
      CustomElementsType
    </p>
  </td>
  <td width="54" valign="top">
  </td>
  <td width="270" valign="top">
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500075">Plan Detail</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="100" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="50" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="301" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="100" valign="top">
      <p>
        <strong>PlanDetail</strong>
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        ComplexType
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="301" valign="top">
    </td>
  </tr>
  <tr>
    <td width="100" valign="top">
      <p>
        ProductCode
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="301" valign="top">
      <p>
        The product Code is required when a Partner is not utilizing Travel Guard’s product selection service and will be provided.
      </p>
    </td>
  </tr>
  <tr>
    <td width="100" valign="top">
      <p>
        ProductDescription<strong></strong>
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="301" valign="top">
    </td>
  </tr>
  <tr>
    <td width="100" valign="top">
      <p>
        PlanCode
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="301" valign="top">
      <p>
        The plan code is required when a Partner is not utilizing Travel Guard’s product selection service and will be provided.
      </p>
    </td>
  </tr>
  <tr>
    <td width="100" valign="top">
      <p>
        PlanDescription<strong></strong>
      </p>
    </td>
    <td width="81" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="50" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="301" valign="top">
    </td>
  </tr>
  </thead>
</table>
<h3>
  <a name="_Toc458500076">BenefitDetails</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="99" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      <strong>BenefitDetails</strong>
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      ComplexType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      <strong>BenefitDetail </strong>
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      ComplexType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      Code
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      The plan code is required when a Partner is not utilizing Travel Guard’s product selection service and will be provided.
    </p>
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      Description<strong></strong>
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      StartDate
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      dateTime
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      Benefit coverage start date
    </p>
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      EndDate<strong></strong>
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      dateTime
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      Benefit coverage end date
    </p>
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      Factors
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      Additional benefit information
    </p>
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      Factor
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="300" valign="top">
  </td>
</tr>
<tr>
  <td width="99" valign="top">
    <p>
      attribute:type
    </p>
  </td>
  <td width="83" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Required
    </p>
  </td>
  <td width="300" valign="top">
    <p>
      Possible values
    </p>
    <p>
      1. Cars
    </p>
    <p>
      2. Days
    </p>
    <p>
      3. UnitsOfCoverage
    </p>
    <p>
      4. PrimaryCoverage
    </p>
    <p>
      5. BenefitFlag
    </p>
    <p>
      6. Amount
    </p>
    <p>
      7. SDFlag
    </p>
    <p>
      8. SDType
    </p>
    <p>
      9. SDPct
    </p>
    <p>
      10. SDAmount
    </p>
    <p>
      11. DeductCurrencyCd
    </p>
    <p>
      12. DeductAmt
    </p>
    <p>
      13. UEPremiumFg
    </p>
    <p>
      14. UEPremiumType
    </p>
    <p>
      15. OtherAmount
    </p>
    <p>
      16. NumberOfUnits
    </p>
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500077">Amounts</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="103" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="52" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="302" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        <strong>Amounts</strong>
      </p>
    </td>
    <td width="76" valign="top">
    </td>
    <td width="52" valign="top">
    </td>
    <td width="302" valign="top">
    </td>
  </tr>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        Amount
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        decimal
      </p>
    </td>
    <td width="52" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="302" valign="top">
    </td>
  </tr>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        Attribute:Type
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="52" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="302" valign="top">
      <p>
        Possible values
      </p>
      <p>
        1. BasePremium
      </p>
      <p>
        2. Discount
      </p>
      <p>
        3. Surcharge
      </p>
      <p>
        4. Tax
      </p>
      <p>
        5. Fee
      </p>
      <p>
        6. TotalPremium
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500078">PricingDetail</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="55" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="302" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
</thead>
<tbody>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      <strong>PricingDetail </strong>
      <strong></strong>
    </p>
  </td>
  <td width="71" valign="top">
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      ProductCode
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      Product code used for generating Quote
    </p>
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      ProductDescription
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      PlanCode
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      Plan code used for generating Quote
    </p>
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      PlanDescription
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      BookingType
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      Possible values
    </p>
    <p>
      Corporate, Individual, Family, Group
    </p>
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      BenefitPremiumDetails
    </p>
  </td>
  <td width="71" valign="top">
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      BenefitPremiumDetail
    </p>
  </td>
  <td width="71" valign="top">
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      Code
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      selected Benefit code (if used) for quote
    </p>
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      Description
    </p>
  </td>
  <td width="71" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      Amounts
    </p>
  </td>
  <td width="71" valign="top">
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      Amounts for selected benefit
    </p>
  </td>
</tr>
<tr>
  <td width="104" nowrap="" valign="top">
    <p>
      Amounts
    </p>
  </td>
  <td width="71" valign="top">
  </td>
  <td width="55" valign="top">
  </td>
  <td width="302" valign="top">
    <p>
      Total Amount for all benefits
    </p>
  </td>
</tr>
</tbody>
</table>
<h3>
  <a name="_Toc458500079">Custom Elements</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="104" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="72" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="302" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="104" valign="top">
      <p>
        <strong>CustomElements</strong>
      </p>
    </td>
    <td width="72" valign="top">
    </td>
    <td width="54" valign="top">
    </td>
    <td width="302" valign="top">
      <p>
        Used to capture a value of XML tags not specified in the document.
      </p>
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        <strong>CustomElement</strong>
      </p>
    </td>
    <td width="72" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="302" valign="top">
    </td>
  </tr>
  <tr>
    <td width="104" valign="top">
      <p>
        Attribute:type
      </p>
    </td>
    <td width="72" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="302" valign="top">
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500080">Payment Details</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>Name</strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="302" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
</thead>
<tbody>
<tr>
  <td width="104" valign="top">
    <p>
      <strong>PaymentDetails</strong>
    </p>
  </td>
  <td width="72" valign="top">
  </td>
  <td width="54" valign="top">
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      PaymentType
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="302" valign="top">
    <p>
      Possible values
    </p>
    <p>
      CC – Credit Card,
    </p>
    <p>
      NM – Non Merchant
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      CardDetails
    </p>
  </td>
  <td width="72" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      CardDetail
    </p>
  </td>
  <td width="72" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      CardHolderName<strong></strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      CardType<strong></strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="302" valign="top">
    <p>
      Possible values
    </p>
    <p>
      VI : VISA Card
    </p>
    <p>
      AX : AMEX Card
    </p>
    <p>
      MC : MASTERCARD Card
    </p>
    <p>
      DC : DINERSCLUB Card
    </p>
    <p>
      DS : DISCOVER Card
    </p>
    <p>
      CB : CARTE BANCAIRE
    </p>
    <p>
      VE : VISA ELECTRON
    </p>
    <p>
      DV : VISA DANKORT
    </p>
    <p>
      JC:JCB
    </p>
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      CardNumber
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      int
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      Amount<strong></strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      int
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      ExpirationDate<strong></strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      SecurityCode<strong></strong>
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      string
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
<tr>
  <td width="104" valign="top">
    <p>
      Address
    </p>
  </td>
  <td width="72" valign="top">
    <p>
      AddressType
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Y
    </p>
  </td>
  <td width="302" valign="top">
  </td>
</tr>
</tbody>
</table>
<h3>
  <a name="_Toc458500081">Policy Details</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="532" class="table table-hover table-striped table-striped">
  <thead>
  <tr>
    <td width="103" valign="top">
      <p>
        <strong>Name</strong>
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="52" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="302" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        <strong>PolicyDetails</strong>
      </p>
    </td>
    <td width="76" valign="top">
    </td>
    <td width="52" valign="top">
    </td>
    <td width="302" valign="top">
    </td>
  </tr>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        PolicyNumber
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="52" valign="top">
    </td>
    <td width="302" valign="top">
      <p>
        Policy Number issued by the Rating Engine
      </p>
    </td>
  </tr>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        EffectiveDate
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        dateTime
      </p>
    </td>
    <td width="52" valign="top">
    </td>
    <td width="302" valign="top">
      <p>
        Policy Validity start Date in UTC format with time zone
      </p>
    </td>
  </tr>
  <tr>
    <td width="103" nowrap="" valign="top">
      <p>
        ExpirationDate
      </p>
    </td>
    <td width="76" valign="top">
      <p>
        dateTime
      </p>
    </td>
    <td width="52" valign="top">
    </td>
    <td width="302" valign="top">
      <p>
        Policy Validity end Date in UTC format with time zone
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h2>
  <a name="_Toc458500082">Quote Request</a>
</h2>
<p>
  This is the initial transaction API call required to obtain a quote on a specific product.
</p>
<h3>
  <a name="_Toc458500083">Input Values</a>
</h3>
<p>
  Common Types
</p>
<table border="0" cellspacing="0" cellpadding="0" width="527" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="184" valign="top">
    <p>
      <a name="_Toc382211593"></a>
      <a name="_Toc382211536"></a>
      <a name="_Toc382211440"><strong>Value</strong></a>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      <strong>Required</strong>
    </p>
  </td>
  <td width="194" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>TGLQuoteRQ</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      ComplexType
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      Attribute:TravelGuardStdAttributes
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      AttributeGroup
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>UsernameToken</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      UserNameTokenType
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="194" valign="top">
    <p>
      For every partner/system integration a unique user name and password will be provided to partner to send it along with other data.
    </p>
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>Agency</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      AgencyType
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>TripDetails</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      TripDetailsType
    </p>
  </td>
  <td width="50" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>BookingDetail</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      BookingDetailType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>Travelers</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      TravelersType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>PlanDetail</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      PlanDetailType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Required
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>BenefitDetails</strong>
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      BenefitDetailsType
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      <strong>ProductSelectionAdditionalParameters</strong>
    </p>
  </td>
  <td width="99" valign="top">
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
    <p>
      Generic Functionality
    </p>
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      Attribute:Name
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      String, Number, Boolean
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
    <p>
      Selection Criteria for selecting a Product. No max. limit on how many selection criteria.
    </p>
  </td>
</tr>
<tr>
  <td width="184" valign="top">
    <p>
      Attribute:Value
    </p>
  </td>
  <td width="99" valign="top">
    <p>
      String, Number, Boolean
    </p>
  </td>
  <td width="50" valign="top">
    <p>
      Optional
    </p>
  </td>
  <td width="194" valign="top">
  </td>
</tr>
</thead>
</table>
<h3>
  <a name="_Toc458500084">Example XML – Quote Request</a>
</h3>
<p>
  <a name="_Toc382211588"></a>
  <a name="_Toc382211531"></a>
  <a name="_Toc382211435"></a>
    <pre>
    &lt;TGLQuoteRQ language=&quot;en-US&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2014-04-21T00:00:00&quot; TransactionID=&quot;TAETR020101213201317444295&quot; PartnerSystemID=&quot;TRAEMBD2&quot; PartnerID=&quot;TRAEMBD&quot; UWCountry=&quot;TR&quot;&gt;
      &lt;UsernameToken&gt;
        &lt;Username&gt;waats1&lt;/Username&gt;
        &lt;Password&gt;etravelts1w&lt;/Password&gt;
      &lt;/UsernameToken&gt;
      &lt;Agency /&gt;
      &lt;TripDetails&gt;
        &lt;Segments TripType=&quot;OW&quot;&gt;
          &lt;Segment Order=&quot;0&quot;&gt;
            &lt;Carrier Type=&quot;Airline&quot;&gt;
              &lt;CarrierName&gt;American&lt;/CarrierName&gt;
              &lt;CarrierCode&gt;1&lt;/CarrierCode&gt;
              &lt;TripNumber&gt;1003&lt;/TripNumber&gt;
            &lt;/Carrier&gt;
            &lt;Origin&gt;
              &lt;Location Type=&quot;IATAAirport&quot;&gt;KRS&lt;/Location&gt;
              &lt;DateTime&gt;2014-12-26T00:00:01-05:00&lt;/DateTime&gt;
            &lt;/Origin&gt;
            &lt;Destination&gt;
              &lt;Location Type=&quot;IATAAirport&quot;&gt;IST&lt;/Location&gt;
              &lt;DateTime&gt;2014-12-26T11:59:59-05:00&lt;/DateTime&gt;
            &lt;/Destination&gt;
          &lt;/Segment&gt;
          &lt;Segment Order=&quot;1&quot;&gt;
            &lt;Carrier Type=&quot;Airline&quot;&gt;
              &lt;CarrierName&gt;American&lt;/CarrierName&gt;
              &lt;CarrierCode&gt;1&lt;/CarrierCode&gt;
              &lt;TripNumber&gt;1003&lt;/TripNumber&gt;
            &lt;/Carrier&gt;
            &lt;Origin&gt;
              &lt;Location Type=&quot;IATAAirport&quot;&gt;IST&lt;/Location&gt;
              &lt;DateTime&gt;2014-12-27T00:00:01-05:00&lt;/DateTime&gt;
            &lt;/Origin&gt;
            &lt;Destination&gt;
              &lt;Location Type=&quot;IATAAirport&quot;&gt;KRR&lt;/Location&gt;
              &lt;DateTime&gt;2014-12-27T11:59:59-05:00&lt;/DateTime&gt;
            &lt;/Destination&gt;
          &lt;/Segment&gt;
        &lt;/Segments&gt;
      &lt;/TripDetails&gt;
      &lt;BookingDetail&gt;
        &lt;TotalPrice ISOCurrencyCode=&quot;EUR&quot;&gt;100&lt;/TotalPrice&gt;
        &lt;BookingNumber&gt;1234567890&lt;/BookingNumber&gt;
        &lt;BookingType&gt;Individual&lt;/BookingType&gt;
      &lt;/BookingDetail&gt;
      &lt;Travelers&gt;
        &lt;Traveler&gt;
          &lt;BirthDate&gt;1927-04-26&lt;/BirthDate&gt;
          &lt;Gender&gt;M&lt;/Gender&gt;
          &lt;Identification type=&quot;1&quot;&gt;1234567A&lt;/Identification&gt;
          &lt;TicketDetail&gt;
            &lt;LoyaltyProgramCode&gt;GLD&lt;/LoyaltyProgramCode&gt;
            &lt;PassengerType&gt;IND&lt;/PassengerType&gt;
            &lt;TripCost ISOCurrencyCode=&quot;EUR&quot;&gt;101&lt;/TripCost&gt;
            &lt;TicketNumber&gt;123456&lt;/TicketNumber&gt;
            &lt;TicketType&gt;Refundable&lt;/TicketType&gt;
          &lt;/TicketDetail&gt;
        &lt;/Traveler&gt;
      &lt;/Travelers&gt;
      &lt;PlanDetail&gt;
        &lt;ProductCode&gt;020101&lt;/ProductCode&gt;
        &lt;PlanCode&gt;PKG&lt;/PlanCode&gt;
        &lt;BenefitDetails&gt;
          &lt;BenefitDetail&gt;
            &lt;Code&gt;PKG&lt;/Code&gt;
          &lt;/BenefitDetail&gt;
        &lt;/BenefitDetails&gt;
      &lt;/PlanDetail&gt;
    &lt;/TGLQuoteRQ&gt;
    </pre>

<h2>
  <a name="_Toc458500085">Quote Response</a>
</h2>
<h3>
  <a name="_Toc458500086">Input Values</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p align="center">
        <strong>Value</strong>
      </p>
    </td>
    <td width="113" valign="top">
      <p align="center">
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="67" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="185" valign="top">
      <p align="center">
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>TGLQuoteRS</strong>
      </p>
    </td>
    <td width="113" valign="top">
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  </tbody>
  <thead>
  <tr>
    <td width="185" valign="top">
      <p>
        Attribute:TravelGuardStdAttributes
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        AttributeGroup
      </p>
    </td>
    <td width="67" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>TransactionLog</strong>
      </p>
    </td>
    <td width="113" valign="top">
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>QuoteDetails</strong>
      </p>
    </td>
    <td width="113" valign="top">
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>PricingDetail </strong>
        <strong></strong>
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        PricingDetail
      </p>
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>MarketingMessage</strong>
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        <strong>String</strong>
      </p>
    </td>
    <td width="67" valign="top">
      <p>
        <strong></strong>
      </p>
    </td>
    <td width="185" valign="top">
      <p>
        <strong></strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        Attribute:lang
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
      <p>
        “en-US” will be the Default value
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        Attribute:format
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
      <p>
        “text” will be the Default value
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        Attribute:InitialMessage
      </p>
    </td>
    <td width="113" valign="top">
      <p>
        String
      </p>
    </td>
    <td width="67" valign="top">
    </td>
    <td width="185" valign="top">
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500087">Example XML – Quote Response</a>
</h3>
<pre>
  &lt;TGLQuoteRS PartnerID=&quot;TRAEMBD&quot; PartnerSystemID=&quot;TRAEMBD2&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2014-04-21T00:00:00&quot; TransactionID=&quot;TAETR020101213201317444295&quot; UWCountry=&quot;TR&quot; language=&quot;en-US&quot;&gt;
  &lt;TransactionLog&gt;
    &lt;Status&gt;Success&lt;/Status&gt;
  &lt;/TransactionLog&gt;
  &lt;QuoteDetails&gt;
    &lt;QuoteDetail&gt;
      &lt;PricingDetail ISOCurrencyCode=&quot;EUR&quot;&gt;
        &lt;ProductCode&gt;020101&lt;/ProductCode&gt;
        &lt;ProductDescription&gt;Travel Guard Avrupa|Travel Guard Europe&lt;/ProductDescription&gt;
        &lt;PlanCode&gt;PKG&lt;/PlanCode&gt;
        &lt;PlanDescription&gt;Tek Y&ouml;n / Gidi&#351;-D&ouml;n&uuml;&#351;|One Way or Round Trip&lt;/PlanDescription&gt;
        &lt;BookingType&gt;Individual&lt;/BookingType&gt;
        &lt;BenefitPremiumDetails&gt;
          &lt;BenefitPremiumDetail&gt;
            &lt;Code&gt;PKG&lt;/Code&gt;
            &lt;Description&gt;Package&lt;/Description&gt;
            &lt;Amounts&gt;
              &lt;Amount Type=&quot;BasePremium&quot;&gt;3.81&lt;/Amount&gt;
              &lt;Amount Type=&quot;Discount&quot;&gt;0&lt;/Amount&gt;
              &lt;Amount Type=&quot;Surcharge&quot;&gt;0&lt;/Amount&gt;
              &lt;Amount Type=&quot;Tax&quot;&gt;0.19&lt;/Amount&gt;
              &lt;Amount Type=&quot;TotalPremium&quot;&gt;4&lt;/Amount&gt;
            &lt;/Amounts&gt;
          &lt;/BenefitPremiumDetail&gt;
        &lt;/BenefitPremiumDetails&gt;
        &lt;Amounts&gt;
          &lt;Amount Type=&quot;BasePremium&quot;&gt;3.81&lt;/Amount&gt;
          &lt;Amount Type=&quot;Discount&quot;&gt;0.00&lt;/Amount&gt;
          &lt;Amount Type=&quot;Tax&quot;&gt;0.19&lt;/Amount&gt;
          &lt;Amount Type=&quot;TotalPremium&quot;&gt;4.00&lt;/Amount&gt;
          &lt;Amount Type=&quot;CommissionAmt&quot;&gt;0.00&lt;/Amount&gt;
        &lt;/Amounts&gt;
      &lt;/PricingDetail&gt;
    &lt;/QuoteDetail&gt;
  &lt;/QuoteDetails&gt;
  &lt;MarketingMessage lang=&quot;en-US&quot; format=&quot;text&quot;&gt;
    &lt;InitialMessage msgID=&quot;15&quot;&gt;Travel prepared. We recommend including travel insurance to cover your pre-paid, non-refundable expenses.&lt;/InitialMessage&gt;
  &lt;/MarketingMessage&gt;
&lt;/TGLQuoteRS&gt;
</pre>
<h3>
  <a name="_Toc458500088">Example Quote Error Response XML</a>
</h3>
  <pre>
    &lt;TGLQuoteRS PartnerID=&quot;TRAEMBD&quot; PartnerSystemID=&quot;TRAEMBD2&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2014-04-21T00:00:00&quot; TransactionID=&quot;TAETR020101213201317444295&quot; UWCountry=&quot;TR&quot; language=&quot;en-US&quot;&gt;
      &lt;TransactionLog&gt;
        &lt;Error&gt;
          &lt;Code&gt;223&lt;/Code&gt;
          &lt;Message&gt;PRODUCT DATA NOT FOUND&lt;/Message&gt;
        &lt;/Error&gt;
        &lt;Status&gt;Failure&lt;/Status&gt;
      &lt;/TransactionLog&gt;
    &lt;/TGLQuoteRS&gt;
  </pre>
<h2>
  <a name="_Toc458500089">Sell Request</a>
</h2>
<h3>
  <a name="_Toc458500090">Input Values</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="550" class="table table-hover table-striped table-striped">
<tbody>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>Value</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      <strong>Data Type</strong>
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      <strong>Required</strong>
    </p>
  </td>
  <td width="216" valign="top">
    <p>
      <strong>Description</strong>
    </p>
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>TGLSellRQ</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
  </td>
  <td width="216" valign="top">
  </td>
</tr>
</tbody>
<thead>
<tr>
  <td width="185" valign="top">
    <p>
      Attribute:TravelGuardStdAttributes
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      AttributeGroup
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
</thead>
<tbody>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>UsernameToken</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
    <p>
      For every partner/system integration a unique user name and password will be provided to partner to send it along with other data.
    </p>
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>Agency</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>PlanDetail</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>BenefitDetails</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>PricingDetail</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="216" valign="top">
    <p>
      Contains information about the total price of the insurance plan.
    </p>
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>TripDetails</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>BookingDetail</strong>
    </p>
  </td>
  <td width="95" valign="top">
  </td>
  <td width="54" valign="top">
    <p align="center">
      Optional
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>Travelers</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      TravelersType
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Required
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>TicketDetail</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      TicketDetailType
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Y
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>PaymentDetails</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      PaymentDetailsType
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      Y
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>CustomElements</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      Custom Elements
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="216" valign="top">
  </td>
</tr>
<tr>
  <td width="185" valign="top">
    <p>
      <strong>FulfillmentType</strong>
    </p>
  </td>
  <td width="95" valign="top">
    <p>
      String
    </p>
  </td>
  <td width="54" valign="top">
    <p align="center">
      N
    </p>
  </td>
  <td width="216" valign="top">
    <p>
      Possible values
    </p>
    <p>
      ONLINE
    </p>
    <p>
      POSTAL
    </p>
    <p>
      RUSH
    </p>
    <p>
      AGENCYFULFILLMENT
    </p>
  </td>
</tr>
</tbody>
</table>
<h3>
  <a name="_Toc458500091">Example XML – Sell Request</a>
</h3>
<pre>
&lt;TGLSellRQ language=&quot;en-US&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2013-12-04T10:13:48.765-05:00&quot; TransactionID=&quot;ARABCM2561323530028765&quot; ISOCurrencyCode=&quot;OMR&quot; PartnerSystemID=&quot;ARABCM2&quot; PartnerID=&quot;ARABCM&quot; UWCountry=&quot;OM&quot;&gt;
  &lt;UsernameToken&gt;
    &lt;Username&gt;waats1&lt;/Username&gt;
    &lt;Password&gt;etravelts1w&lt;/Password&gt;
  &lt;/UsernameToken&gt;
  &lt;Agency&gt;
    &lt;AgencyCode&gt;99999999&lt;/AgencyCode&gt;
    &lt;LocationCode&gt;TESTACM44&lt;/LocationCode&gt;
  &lt;/Agency&gt;
  &lt;PlanDetail&gt;
    &lt;ProductCode&gt;020103&lt;/ProductCode&gt;
    &lt;ProductDescription&gt;Domestic TravInsure-Specially designed for Ezeego1&lt;/ProductDescription&gt;
    &lt;PlanCode&gt;TGPLTM&lt;/PlanCode&gt;
    &lt;PlanDescription&gt;Standard&lt;/PlanDescription&gt;
    &lt;BenefitDetails&gt;
      &lt;BenefitDetail&gt;
        &lt;Code&gt;000000&lt;/Code&gt;
        &lt;Description&gt;Package&lt;/Description&gt;
      &lt;/BenefitDetail&gt;
    &lt;/BenefitDetails&gt;
  &lt;/PlanDetail&gt;
  &lt;TripDetails&gt;
    &lt;Segments TripType=&quot;OW&quot;&gt;
      &lt;Segment Order=&quot;0&quot;&gt;
        &lt;Carrier Type=&quot;Airline&quot;&gt;
          &lt;CarrierName&gt;IndianAirLines&lt;/CarrierName&gt;
          &lt;CarrierCode&gt;101&lt;/CarrierCode&gt;
          &lt;TripNumber&gt;1003&lt;/TripNumber&gt;
        &lt;/Carrier&gt;
        &lt;Origin&gt;
          &lt;Location Type=&quot;IATAAirport&quot;&gt;HYD&lt;/Location&gt;
          &lt;DateTime&gt;2013-12-24T00:00:00-05:00&lt;/DateTime&gt;
        &lt;/Origin&gt;
        &lt;Destination&gt;
          &lt;Location Type=&quot;IATAAirport&quot;&gt;BAN&lt;/Location&gt;
          &lt;DateTime&gt;2013-12-25T23:59:59-05:00&lt;/DateTime&gt;
        &lt;/Destination&gt;
      &lt;/Segment&gt;
    &lt;/Segments&gt;
  &lt;/TripDetails&gt;
  &lt;BookingDetail&gt;
    &lt;TotalPrice ISOCurrencyCode=&quot;EUR&quot;&gt;123123&lt;/TotalPrice&gt;
    &lt;BookingNumber&gt;2312312312&lt;/BookingNumber&gt;
    &lt;BookingType&gt;Individual&lt;/BookingType&gt;
  &lt;/BookingDetail&gt;
  &lt;Travelers&gt;
    &lt;Traveler&gt;
      &lt;FirstName&gt;FNTest&lt;/FirstName&gt;
      &lt;MiddleName&gt;MNTest&lt;/MiddleName&gt;
      &lt;LastName&gt;LNTest&lt;/LastName&gt;
      &lt;BirthDate&gt;1980-06-03-05:00&lt;/BirthDate&gt;
      &lt;Gender&gt;M&lt;/Gender&gt;
      &lt;Identification type=&quot;1&quot;&gt;111111111111&lt;/Identification&gt;
      &lt;Beneficiaries&gt;
        &lt;Beneficiary&gt;
          &lt;FirstName&gt;xxxx&lt;/FirstName&gt;
          &lt;MiddleName&gt;xxxx&lt;/MiddleName&gt;
          &lt;LastName&gt;xxxxx&lt;/LastName&gt;
          &lt;BirthDate&gt;1980-01-01-05:00&lt;/BirthDate&gt;
          &lt;Identification type=&quot;2&quot;&gt;22221&lt;/Identification&gt;
          &lt;Percentage&gt;100&lt;/Percentage&gt;
          &lt;Address&gt;
            &lt;Street1&gt;bStreet1&lt;/Street1&gt;
            &lt;Street2&gt;bStreet2&lt;/Street2&gt;
            &lt;Street3&gt;bStreet3&lt;/Street3&gt;
            &lt;City&gt;bBangalore&lt;/City&gt;
            &lt;State&gt;23123&lt;/State&gt;
            &lt;PostalCode&gt;wefege&lt;/PostalCode&gt;
            &lt;ISOCountry&gt;IN&lt;/ISOCountry&gt;
          &lt;/Address&gt;
        &lt;/Beneficiary&gt;
      &lt;/Beneficiaries&gt;
      &lt;Address&gt;
        &lt;Street1&gt;Street1&lt;/Street1&gt;
        &lt;Street2&gt;Street2&lt;/Street2&gt;
        &lt;Street3&gt;Street3&lt;/Street3&gt;
        &lt;City&gt;City1&lt;/City&gt;
        &lt;State&gt;State1&lt;/State&gt;
        &lt;PostalCode&gt;xxxxxx&lt;/PostalCode&gt;
        &lt;ISOCountry&gt;IN&lt;/ISOCountry&gt;
      &lt;/Address&gt;
      &lt;ContactDetails&gt;
        &lt;OfficePhone&gt;73222222222&lt;/OfficePhone&gt;
        &lt;HomePhone&gt;73222222222&lt;/HomePhone&gt;
        &lt;MobilePhone&gt;73222222222&lt;/MobilePhone&gt;
        &lt;Fax&gt;73222222222&lt;/Fax&gt;
        &lt;Email&gt;test@aig.com&lt;/Email&gt;
      &lt;/ContactDetails&gt;
      &lt;TicketDetail&gt;
        &lt;LoyaltyProgramCode&gt;SLV&lt;/LoyaltyProgramCode&gt;
        &lt;PassengerType&gt;IND&lt;/PassengerType&gt;
        &lt;TripCost ISOCurrencyCode=&quot;OMR&quot;&gt;5000&lt;/TripCost&gt;
        &lt;TicketNumber&gt;234234&lt;/TicketNumber&gt;
        &lt;TicketType&gt;Refundable&lt;/TicketType&gt;
      &lt;/TicketDetail&gt;
    &lt;/Traveler&gt;
  &lt;/Travelers&gt;
  &lt;PaymentDetails&gt;
    &lt;PaymentType&gt;CC&lt;/PaymentType&gt;
    &lt;CardDetails&gt;
      &lt;CardDetail&gt;
        &lt;CardHolderName&gt;Tester&lt;/CardHolderName&gt;
        &lt;CardType&gt;VI&lt;/CardType&gt;
        &lt;CardNumber&gt;4005550000000001&lt;/CardNumber&gt;
        &lt;Amount&gt;3121&lt;/Amount&gt;
        &lt;ExpirationDate&gt;052013&lt;/ExpirationDate&gt;
        &lt;SecurityCode&gt;122&lt;/SecurityCode&gt;
        &lt;Address&gt;
          &lt;Street1&gt;Street1&lt;/Street1&gt;
          &lt;Street2&gt;Street2&lt;/Street2&gt;
          &lt;Street3&gt;Street3&lt;/Street3&gt;
          &lt;City&gt;bbbbb&lt;/City&gt;
          &lt;State&gt;bbbbb&lt;/State&gt;
          &lt;PostalCode&gt;23123&lt;/PostalCode&gt;
          &lt;ISOCountry&gt;OM&lt;/ISOCountry&gt;
        &lt;/Address&gt;
      &lt;/CardDetail&gt;
    &lt;/CardDetails&gt;
  &lt;/PaymentDetails&gt;
&lt;/TGLSellRQ&gt;
</pre>
<h2>
  <a name="_Toc458500092">Sell Response</a>
</h2>
<h3>
  <a name="_Toc458500093">Input Values</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="550" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p align="center">
        <strong>Value</strong>
      </p>
    </td>
    <td width="85" valign="top">
      <p align="center">
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="198" valign="top">
      <p align="center">
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p>
        <strong>TGLSellRS</strong>
      </p>
    </td>
    <td width="85" valign="top">
    </td>
    <td width="54" valign="top">
    </td>
    <td width="198" valign="top">
    </td>
  </tr>
  </tbody>
  <thead>
  <tr>
    <td width="213" valign="top">
      <p>
        Attribute:TravelGuardStdAttributes
      </p>
    </td>
    <td width="85" valign="top">
      <p>
        AttributeGroup
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="198" valign="top">
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p>
        <strong>TransactionLog</strong>
      </p>
    </td>
    <td width="85" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="198" valign="top">
    </td>
  </tr>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p>
        <strong>PolicyDetails</strong>
      </p>
    </td>
    <td width="85" valign="top">
      <p>
        PolicyDetailsType
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="198" valign="top">
    </td>
  </tr>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p>
        <strong>PricingDetail </strong>
        <strong></strong>
      </p>
    </td>
    <td width="85" valign="top">
      <p>
        PricingDetailType
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="198" valign="top">
    </td>
  </tr>
  <tr>
    <td width="213" nowrap="" valign="top">
      <p>
        PolicyLookup
      </p>
    </td>
    <td width="85" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="198" valign="top">
      <p>
        Policy lookup url, for accessing Policy FUI- Implementation pending
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h3>
  <a name="_Toc458500094">Example XML – Sell Response</a>
</h3>
<pre>
&lt;TGLSellRS PartnerID=&quot;ARABCM&quot; PartnerSystemID=&quot;ARABCM2&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2013-12-04T10:13:48.765-05:00&quot; TransactionID=&quot;ARABCM2561323530028765&quot; UWCountry=&quot;OM&quot; language=&quot;en-US&quot; ISOCurrencyCode=&quot;OMR&quot;&gt;
  &lt;TransactionLog&gt;
    &lt;Status&gt;Success&lt;/Status&gt;
  &lt;/TransactionLog&gt;
  &lt;PolicyDetails&gt;
    &lt;PolicyNumber&gt;IA514683&lt;/PolicyNumber&gt;
    &lt;EffectiveDate&gt;2013-12-24T00:00:00-05:00&lt;/EffectiveDate&gt;
    &lt;ExpirationDate&gt;2013-12-25T23:59:59-05:00&lt;/ExpirationDate&gt;
    &lt;PricingDetail ISOCurrencyCode=&quot;OMR&quot;&gt;
      &lt;ProductCode&gt;020103&lt;/ProductCode&gt;
      &lt;ProductDescription&gt;TRAVEL GUARD WORLDWIDE Oman - INDIVIDUAL&lt;/ProductDescription&gt;
      &lt;PlanCode&gt;TGPLTM&lt;/PlanCode&gt;
      &lt;PlanDescription&gt;Travel Guard Platinum&lt;/PlanDescription&gt;
      &lt;BenefitPremiumDetails&gt;
        &lt;BenefitPremiumDetail&gt;
          &lt;Code&gt;000000&lt;/Code&gt;
          &lt;Description&gt;Default&lt;/Description&gt;
          &lt;Amounts&gt;
            &lt;Amount Type=&quot;BasePremium&quot;&gt;17&lt;/Amount&gt;
            &lt;Amount Type=&quot;Surcharge&quot;&gt;0&lt;/Amount&gt;
            &lt;Amount Type=&quot;Tax&quot;&gt;0&lt;/Amount&gt;
            &lt;Amount Type=&quot;TotalPremium&quot;&gt;17&lt;/Amount&gt;
          &lt;/Amounts&gt;
        &lt;/BenefitPremiumDetail&gt;
      &lt;/BenefitPremiumDetails&gt;
      &lt;Amounts&gt;
        &lt;Amount Type=&quot;BasePremium&quot;&gt;17&lt;/Amount&gt;
        &lt;Amount Type=&quot;Discount&quot;&gt;0.00&lt;/Amount&gt;
        &lt;Amount Type=&quot;Tax&quot;&gt;0.00&lt;/Amount&gt;
        &lt;Amount Type=&quot;TotalPremium&quot;&gt;17.00&lt;/Amount&gt;
      &lt;/Amounts&gt;
    &lt;/PricingDetail&gt;
    &lt;PolicyLookup&gt;http://10.175.59.46:8025/dds/FUIService?action=travelnet&amp;amp;policy_no=IA514683&amp;amp;gds_cd=ACM&amp;amp;cntry_cd=44&amp;amp;last_nm=LNTest&lt;/PolicyLookup&gt;
  &lt;/PolicyDetails&gt;
&lt;/TGLSellRS&gt;
</pre>
<h2>
  <a name="_Toc458500095">Cancellation Request*</a>
</h2>
<p>
  <em>*This request is not available for the US and Canada.</em>
</p>
<h3>
  <a name="_Toc458500096">Input Values</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" width="550" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="185" valign="top">
      <p>
        <strong>Value</strong>
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        <strong>Required</strong>
      </p>
    </td>
    <td width="216" valign="top">
      <p>
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" valign="top">
      <p>
        <strong>TGLCancelRQ</strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  </tbody>
  <thead>
  <tr>
    <td width="185" valign="top">
      <p>
        Attribute:TravelGuardStdAttributes
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        AttributeGroup
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="185" valign="top">
      <p>
        <strong>UsernameToken</strong>
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        UsernameTokenType
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="216" valign="top">
      <p>
        For every partner/system integration a unique user name and password will be provided to partner to send it along with other data.
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" valign="top">
      <p>
        PolicyNumber
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Required
      </p>
    </td>
    <td width="216" valign="top">
      <p>
        Policy Number which needs to be cancelled
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" valign="top">
      <p>
        LastName
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" valign="top">
      <p>
        ReasonDescription
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" valign="top">
      <p>
        RefundType
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        Optional
      </p>
    </td>
    <td width="216" valign="top">
      <p>
        Possible refund type
      </p>
      <p>
        FR: full Refund
      </p>
      <p>
        NR: No Refund
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h3>
</h3>
<h3>
  <a name="_Toc458500097">Example XML – Cancel Request</a>
</h3>
<pre>
  &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;TGLCancelRQ PartnerID=&quot;TRAVIX&quot; ISOCurrencyCode=&quot;HKD&quot; PartnerSystemID=&quot;DP&quot; Timestamp=&quot;2013-12-29T09:30:47Z&quot; TransactionID=&quot;String&quot; language=&quot;en-US&quot; SchemaVersion=&quot;1.0&quot; UWCountry=&quot;HK&quot;&gt;
  &lt;UsernameToken&gt;
    &lt;Username&gt;waats1&lt;/Username&gt;
    &lt;Password&gt;etravelts1w&lt;/Password&gt;
  &lt;/UsernameToken&gt;
  &lt;PolicyNumber&gt;JN350983&lt;/PolicyNumber&gt;
  &lt;LastName&gt;Test&lt;/LastName&gt;
  &lt;ReasonDescription&gt;Testing cancellation&lt;/ReasonDescription&gt;
  &lt;RefundType&gt;FR&lt;/RefundType&gt;
&lt;/TGLCancelRQ&gt;
</pre>
<h2>
  <a name="_Toc458500098">Cancellation Response</a>
</h2>
<h3>
  <a name="_Toc458500099">Input Values</a>
</h3>
<table border="0" cellspacing="0" cellpadding="0" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p align="center">
        <strong>Value</strong>
      </p>
    </td>
    <td width="95" valign="top">
      <p align="center">
        <strong>Data Type</strong>
      </p>
    </td>
    <td width="54" valign="top">
      <p align="center">
        <strong>Required</strong>
      </p>
    </td>
    <td width="216" valign="top">
      <p align="center">
        <strong>Description</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>TGLCancelRS</strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  </tbody>
  <thead>
  <tr>
    <td width="185" valign="top">
      <p>
        Attribute:TravelGuardStdAttributes
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        AttributeGroup
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>TransactionLog</strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>PolicyDetails</strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>PolicyStatus</strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        Code
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        Description
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        <strong>PricingDetail </strong>
        <strong></strong>
      </p>
    </td>
    <td width="95" valign="top">
    </td>
    <td width="54" valign="top">
      <p>
        Required
      </p>
    </td>
    <td width="216" valign="top">
    </td>
  </tr>
  <tr>
    <td width="185" nowrap="" valign="top">
      <p>
        PolicyLookup
      </p>
    </td>
    <td width="95" valign="top">
      <p>
        string
      </p>
    </td>
    <td width="54" valign="top">
      <p>
        Optional
      </p>
    </td>
    <td width="216" valign="top">
      <p>
        Policy lookup url, for accessing Policy FUI
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h3>
</h3>
<h3>
  <a name="_Toc458500100">Example XML – Cancel Response</a>
</h3>
<pre>
  &lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;TGLCancelRS PartnerID=&quot;TRAEMBD&quot; PartnerSystemID=&quot;TRAEMBD2&quot; SchemaVersion=&quot;1&quot; Timestamp=&quot;2014-04-08T10:13:48.765-05:00&quot; TransactionID=&quot;SUS1433561323530&quot; UWCountry=&quot;TR&quot; language=&quot;en-US&quot; ISOCurrencyCode=&quot;TRY&quot;&gt;
  &lt;TransactionLog&gt;
    &lt;Error&gt;
      &lt;Code&gt;0&lt;/Code&gt;
      &lt;Message /&gt;
    &lt;/Error&gt;
    &lt;Status&gt;Success&lt;/Status&gt;
  &lt;/TransactionLog&gt;
  &lt;PolicyDetails&gt;
    &lt;PolicyNumber&gt;LG180734&lt;/PolicyNumber&gt;
    &lt;PolicyStatus&gt;
      &lt;Code&gt;1&lt;/Code&gt;
      &lt;Description&gt;Cancelled&lt;/Description&gt;
    &lt;/PolicyStatus&gt;
    &lt;PricingDetail&gt;
      &lt;PricingDetail ISOCurrencyCode=&quot;TRY&quot;&gt;
        &lt;BenefitPremiumDetails&gt;
          &lt;BenefitPremiumDetail&gt;
            &lt;Code&gt;PKG&lt;/Code&gt;
            &lt;Description&gt;Package&lt;/Description&gt;
            &lt;Amounts&gt;
              &lt;Amount Type=&quot;Refund&quot;&gt;5.00&lt;/Amount&gt;
            &lt;/Amounts&gt;
          &lt;/BenefitPremiumDetail&gt;
        &lt;/BenefitPremiumDetails&gt;
        &lt;Amounts&gt;
          &lt;Amount Type=&quot;TotalRefund&quot;&gt;5.00&lt;/Amount&gt;
        &lt;/Amounts&gt;
      &lt;/PricingDetail&gt;
    &lt;/PricingDetail&gt;
    &lt;PolicyLookup /&gt;
  &lt;/PolicyDetails&gt;
&lt;/TGLCancelRS&gt;
</pre>
<h1>
  <a name="_Toc458500101">Appendi</a>
  x
</h1>
<h2>
  <a name="_Toc458500102"></a>
  <a name="_Required_XSDs"></a>
  Required XSDs
</h2>
<p>
  Below are all the required XSDs. Each XSD contains the explanation on how to use each element and its definition.
</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="113" valign="top">
      <p>
        <strong>Transaction Name</strong>
      </p>
    </td>
    <td width="110" valign="top">
      <p>
        <strong>Type</strong>
      </p>
    </td>
    <td width="106" valign="top">
      <p>
        <strong>Version</strong>
      </p>
    </td>
    <td width="129" valign="top">
      <p>
        <strong>XSD</strong>
      </p>
    </td>
    <td width="93" valign="top">
      <p>
        <strong>Sample XML</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="113" valign="top">
      <p>
        Common Types
      </p>
    </td>
    <td width="110" valign="top">
      <p>
        n/a
      </p>
    </td>
    <td width="106" valign="top">
      <p>
        1.0
      </p>
    </td>
    <td width="129" valign="top">
    </td>
    <td width="93" valign="top">
    </td>
  </tr>
  <tr>
    <td width="113" valign="top">
      <p>
        Quote
      </p>
    </td>
    <td width="110" valign="top">
      <p>
        Request
      </p>
    </td>
    <td width="106" valign="top">
      <p>
        1.0
      </p>
    </td>
    <td width="129" valign="top">
    </td>
    <td width="93" valign="top">
    </td>
  </tr>
  <tr>
    <td width="113" valign="top">
      <p>
        Sell
      </p>
    </td>
    <td width="110" valign="top">
      <p>
        Request
      </p>
    </td>
    <td width="106" valign="top">
      <p>
        1.0
      </p>
    </td>
    <td width="129" valign="top">
    </td>
    <td width="93" valign="top">
    </td>
  </tr>
  <tr>
    <td width="113" valign="top">
      <p>
        Cancel
      </p>
    </td>
    <td width="110" valign="top">
      <p>
        Request
      </p>
    </td>
    <td width="106" valign="top">
      <p>
        1.0
      </p>
    </td>
    <td width="129" valign="top">
    </td>
    <td width="93" valign="top">
    </td>
  </tr>
  </tbody>
</table>
<p>
  .
</p>
<h2>
  <a name="_Toc458500103"></a>
  <a name="_Toc382211595"></a>
  <a name="_Toc382211538"></a>
  <a name="_Toc382211442">Payment Types</a>
</h2>
<p>
  <a href="#Back"></a>
</p>
<table border="0" cellspacing="0" cellpadding="0" width="116" class="table table-hover table-striped table-striped">
  <tbody>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        <strong>Credit Card Types</strong>
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        AMERICAN EXPRESS (<strong>AX</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        DINERS CLUB (<strong>DC</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        DISCOVER (<strong>DS</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        MASTER CARD (<strong>MC</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        VISA (<strong>VI</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        VISA ELECTRON(<strong>VE</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        VISA Dankort (<strong>DV</strong>)
      </p>
    </td>
  </tr>
  <tr>
    <td width="116" nowrap="" valign="bottom">
      <p>
        CARTE BANCAIRE (<strong>CB</strong>)
      </p>
    </td>
  </tr>
  </tbody>
</table>
<h2>
  <a name="_Toc458500104"></a>
  <a name="_Toc382211596"></a>
  <a name="_Toc382211539"></a>
  <a name="_Toc382211443"></a>
  <a name="_Error_and_Warning"></a>
  Error and Warning Codes
</h2>
<table border="0" cellspacing="0" cellpadding="0" width="527" class="table table-hover table-striped table-striped">
<thead>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      <strong>Error Code</strong>
    </p>
  </td>
  <td width="198" nowrap="" valign="bottom">
    <p>
      <strong>Error Description</strong>
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      <strong>Error Code</strong>
    </p>
  </td>
  <td width="207" nowrap="" valign="bottom">
    <p>
      <strong>Error Description</strong>
    </p>
  </td>
</tr>
</thead>
<tbody>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      1
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      System error. Please contact Help Desk.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      2
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      System error. Please, try again later.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      3
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid GDS
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      4
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Inactive GDS
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      5
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid agency
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      6
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Inactive agency
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      7
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Blacklisted agency
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      8
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      9
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid start date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      10
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid end date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      11
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid product code
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      12
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Family rate is not available
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      13
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Individual rate is not available
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      14
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Child rate is not available
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      15
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Payment type is not valid
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      16
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid Date of Birth
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      17
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Child above maximum age limit for children
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      18
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid insured type
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      19
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Number of insured’s or name mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      20
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Amount or number of days are not entered
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      21
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid number of days
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      22
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      23
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid policy number
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      24
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid number of insured’s
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      25
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid age
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      26
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid Policy
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      27
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Inactive Product code
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      28
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid policy status
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      29
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Quote_line
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      30
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Tax_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      31
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Premium_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      32
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Total_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      33
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Last_Day_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      34
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      35
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Voided_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      36
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Void_Confirm_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      37
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Plan_Type_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      38
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Purchase Date Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      39
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Family_Plan_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      40
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Person_Type_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      41
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Signature_Line
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      42
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Child Under Minimum age limit
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      43
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Individual above maximum age limit
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      44
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Individual under minimum age limit
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      45
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Spouse above maximum age limit
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      46
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Spouse under minimum age limit
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      47
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Family member above maximum age limit
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      48
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Family member under minimum age limit
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      49
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Spouse rate is not available
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      50
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Unable to void (Refer to DRS for void policies/procedures)
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      51
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      The policy was already voided
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      52
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Beneficiary_Message
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      53
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Insured_Message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      54
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Student rate not avail
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      55
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Rate is not available for the given type
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      56
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in payment expiration date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      57
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in insured birthdate
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      58
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in beneficiary birth date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      59
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in premium amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      60
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in surcharge amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      61
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in benefit amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      62
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in beneficiary percentage
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      63
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in total premium
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      64
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in policy amount commission amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      65
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in total tax amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      66
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in surcharge amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      67
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in sell date time
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      68
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in emu rate
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      69
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in tax amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      70
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in tax percent
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      71
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in benefit out premium
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      72
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in benefit out commission amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      73
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in benefit out surcharge amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      74
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in inception date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      75
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in expiration date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      76
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in package flag
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      77
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in policy type
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      78
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Format error in gender
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      79
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Format error in tax order no
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      80
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Account not provided (Frequent Flyer)
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      81
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid partner company code (Frequent Flyer)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      82
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy_Totals_Mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      83
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Insured_Totals_Mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      84
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Tax_Number_Mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      85
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Tax_Structure_Mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      86
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Tax_Amount_Mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      87
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Benefit_Number_Mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      88
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Benefit_Structure_Mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      89
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Benefit_Amount_Mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      90
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Duplicate_Voucher_Number
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      91
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Transaction out of sequence
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      92
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid trip cancellation date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      93
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid user entered S/D
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      94
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid group discount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      95
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid transaction effective date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      96
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Different policy and transaction date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      97
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid message
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      98
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid user entered commission in PolicyIn
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      99
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid commission from DB table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      100
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid single factor percent from DB table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      101
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid single factor amount from DB table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      102
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid age rate percent from DB table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      103
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid age rate amount from DB table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      104
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid short term percent from DB table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      105
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid short term amount from DB table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      106
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid simple rate percent from DB table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      107
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid simple rate amount from DB table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      108
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid benefitin amount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      109
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid policy duration
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      110
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction effective date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      111
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Different policy transaction effective date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      112
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Different policy transaction expiry date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      113
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Transaction effective date is more than year
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      114
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction expiry date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      115
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Policy duration is more than a year
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      116
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid last transaction date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      117
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid transaction application date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      118
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid number of endorsement
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      119
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid user entered premium flag
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      120
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid endorsement request
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      121
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid transaction reason
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      122
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction reason definition
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      123
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid transaction reason XML element key
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      124
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction reason XML element value
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      125
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Required benefit missing
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      126
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid benefit data
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      127
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid S/D (Surcharge discount)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      128
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid birthdt – error in computed age
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      129
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No single factor rate in table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      130
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No age record in table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      131
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No short term rate in table
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      132
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid deductible discount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      133
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid policy or transaction_No
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      134
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid request for policy cancelled
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      135
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Required benefit cannot be deleted
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      136
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      At least one insured required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      137
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      At least one real insured required
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      138
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Computed premium over or under the limits in product setup
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      139
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid time period CD
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      140
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Inception date more than year
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      141
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Trans effective date out of range from today
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      142
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Inception date out of range from today
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      143
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Master policy not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      144
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid master policy
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      145
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Policy start date out of master policy period
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      146
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy end date out of master policy period
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      147
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Rate rule not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      148
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid master surcharge discount
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      149
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Policy effective date out of policy duration
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      150
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid group type in policy
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      151
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid number of policy holders
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      152
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction date
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      153
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Factor_Info_Required
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      154
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Data_Required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      155
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Parameter_Mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      156
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Dataset_Mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      157
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Datarequest_Record_Not_Found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      158
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Datadefinition_Record_Not_Found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      159
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Required_Argument_Not_Found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      160
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      BindSQL_BindArgument_Error
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      161
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Policy_Has_Been_Updated
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      162
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Master_Policy_No_Or_Agent_CD_Required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      163
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Entity was already updated
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      164
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Entity_Already_Exists
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      165
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Entity_Not_Exist
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      166
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Out_Of_Sequence_Update
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      167
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid_Sum_Insured
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      168
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid_Sum_Insured_Other_Insurers
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      169
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid duration
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      170
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Unauthorized data
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      171
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Transaction unavailable
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      172
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Item value out of Min/Max range
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      173
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Item total value exceeding total max value
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      174
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Discount rate exceeding max rate
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      175
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Record not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      176
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Insured RefNo Required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      177
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid benefit start/end date
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      178
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy duration mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      179
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Insured NUM mismatch
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      180
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Product mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      181
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Client over/under age for medical coverage – Please contact Travel Guard Chartis for special rates
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      182
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      One day policy is not allowed
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      183
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Max_Num_Insured_Exceed (A number of insured reaches maximum)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      184
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Tax record not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      185
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Too many insured’s (for insured_id_no given)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      186
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid expiry for policy extension
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      187
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Exceed maximum number of extensions allowed
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      188
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      New excess buyout amount should be bigger than previous one
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      189
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Excess buyout is not allowed after 180 days
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      190
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Payment info is different from original policy
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      191
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Specified item is not allowed
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      192
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Duration exceeds original duration
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      193
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Insured age tag not allowed
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      194
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Change code mismatch
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      195
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      There are no extensions to be deleted
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      196
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      There are no policy related to the given voucher number
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      197
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      GMT offset is missing on inception and expiry dates
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      198
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No matched rate found in TRATE or TRATE_EXT table
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      199
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid duration type (not in D, M, Y, W, DW, MM)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      200
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid number of benefit units
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      201
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid destination code
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      202
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid system time zone (outside USA)
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      203
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Transaction exists
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      204
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      TransactionID is empty
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      205
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid liability amount
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      206
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Financial flag required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      207
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid paymentnumber length
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      208
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Threshold_NO_Exceeded (Too many insured’s for printing)
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      209
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid GDS locator
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      210
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid number of primary insured
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      211
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Policy already exists
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      212
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid authentication data
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      213
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Unable to confirm pending policy
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      214
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy has been confirmed already
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      215
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Unable to overlay endorse
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      216
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy confirmed successfully
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      217
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid credit card name
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      218
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Unable to QEndorse pending policy
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      219
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid net gross flag
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      220
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Benefit rules not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      221
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Benefit codes found twice
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      222
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      CNTRYGDS not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      223
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Product data not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      224
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Plan record not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      225
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Plan benefit data not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      226
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Benefit record not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      227
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Product options data not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      228
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid rate code
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      229
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid subset code
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      230
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid past duration / old policy duration
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      231
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Master plan data not found
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      232
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Age data not found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      233
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 000
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      234
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 001
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      235
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 002
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      236
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 10
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      237
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 11
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      238
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 12
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      239
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 21
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      240
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 50
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      241
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 51
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      242
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 52
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      243
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 53
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      244
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 54
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      245
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 56
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      246
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 100
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      247
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 101
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      248
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 102
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      249
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 103
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      250
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 104
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      251
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 110
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      252
    </p>
  </td>
  <td width="207" valign="top">
    <p>
      No rating record for set type code 111
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      253
    </p>
  </td>
  <td width="198" valign="top">
    <p>
      No rating record for set type code 200
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      254
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No record for single factor rate
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      255
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid transaction sub type code
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      256
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Incorrect rating record for set type code 50
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      257
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Incorrect rating record for set type code 21
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      258
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Incorrect rating record for set type code 41
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      259
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid benefit duration
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      260
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid old benefit duration
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      261
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid new benefit duration
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      262
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      CVV2_Code_Required
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      263
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      CVV2_Auth_Failure
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      264
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      CVV2_Confirm_Policy_Failure
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      265
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      CVV2_Multi_Segment_Payment_Failure
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      266
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 52
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      267
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 53
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      268
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 54
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      269
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 56
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      270
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 100
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      271
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 101
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      272
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 102
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      273
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 103
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      274
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No rating record for set type code 104
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      275
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      No rating record for set type code 110
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      300
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Success
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      301
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      A policy must have at least one traveler.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      302
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Final payment date cannot fall before the initial trip deposit date.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      303
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Initial trip deposit date must fall before the departure date.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      304
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Final payment date must fall before the departure date.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      305
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Departure date must fall before the return date.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      306
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Birth date must fall before departure date.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      307
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Age of traveler does not appear to be possible.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      308
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid state/province for the given country.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      309
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Length of car rental exceeds length of trip.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      310
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No address specified for traveler.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      311
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid credit card information provided.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      312
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Traveler's first and last names are required.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      313
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      In order to purchase a policy you must provide valid payment information.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      314
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Total premium amount sent does not match the total premium of the policy.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      315
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Total premium amount sent does not match the total premium of the policy.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      316
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid country
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      317
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Agency ARC and Email are required.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      318
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid ARC.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      319
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Departure date must be greater than or equal to today.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      320
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policies must be purchased at least 24 hours before the departure date or no policy will be issued.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      321
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid Product Code.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      322
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Agency is not approved to sell for plan at this time.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      323
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Unable to determine effective date of policy. This could be caused by an invalid Plan ID.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      324
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid transaction type.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      325
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid payment type.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      326
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Authorization number and date are required for this payment type.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      327
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Fulfillment type is required.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      328
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Destination is required.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      329
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid destination country.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      330
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid destination state or province.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" rowspan="6" valign="bottom">
    <p>
      331
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      The US government, through the Office of Foreign Assets Control, regulates travel to the destination you have selected. To purchase this
      policy, you will need to mail Travel Guard a paper application for insurance and a copy of your travel license from the Office of Foreign
      Assets Control. Please send this information to:
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
  </td>
  <td width="207" valign="bottom">
  </td>
</tr>
<tr>
  <td width="198" valign="bottom">
    <p>
      Travel Guard
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
  </td>
  <td width="207" valign="bottom">
  </td>
</tr>
<tr>
  <td width="198" valign="bottom">
    <p>
      Attn: Processing
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
  </td>
  <td width="207" valign="bottom">
  </td>
</tr>
<tr>
  <td width="198" valign="bottom">
    <p>
      3300 Business Park Dr
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
  </td>
  <td width="207" valign="bottom">
  </td>
</tr>
<tr>
  <td width="198" valign="bottom">
    <p>
      Stevens Point, WI 54482
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
  </td>
  <td width="207" valign="bottom">
  </td>
</tr>
<tr>
  <td width="198" valign="bottom">
    <p>
      If you have further questions or need a copy of our application, please contact our Sanctioned Countries Hotline at 866-375-2546.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      332
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      The Office of Foreign Assets Control restricts financial dealings with the country that you have selected as your destination. Due to these
      restrictions Travel Guard is unable to process your policy. We apologize for any inconvenience this may cause.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      333
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid Postal Code specified.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      334
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Cash payment authentication failed.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      335
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Fulfillment email is not supplied.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      336
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Fulfillment email is not in a valid format.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      337
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      We are unable to process your transaction at this time, please contact our call center at 866-648-8427 for assistance.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      338
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      We are unable to process your transaction at this time, please contact our call center at 866-644-6814 for assistance.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      339
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      We are unable to provide travel insurance for one or more of the destinations you have chosen. We are sorry for the inconvenience.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      340
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      This product cannot be sold.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      341
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      This agency cannot set the policy number.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      342
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Sales to residents from this state have been excluded.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      343
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Sales to residents from this country have been excluded.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      344
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid Reward Type
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      345
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Reward points can only be numeric and greater than zero.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      346
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Purchase date cannot be in the future.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      347
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Product is not configured properly.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      348
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Invalid Culture/Language Name
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      349
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      This policy does not belong to this agency.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      350
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Plan ID Required.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      351
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Required: Please validate the PersonID tag is greater than 0 on existing travelers and/or the AddTraveler tag is "YES" on new travelers.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      352
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Number of travelers sent does not match the number of travelers on the policy.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      353
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Purchase date is required.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      354
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Cancellation after departure date is not allowed.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      355
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Modification after departure date is not allowed.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      356
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Traveler does not belong to the policy.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      357
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Primary traveler may not be cancelled.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      358
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy ID is required.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      359
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Authentication failure
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      360
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      SML not enabled for partner
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      361
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Authenticate failure
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      362
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Authorization failure
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      363
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Required element {0} is missing
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      364
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No records found
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      365
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      System error, please contact support team
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      366
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Client ID is mandatory
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      367
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Exceeded the maximum number of search results
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      368
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Exceeded maximum number of insured
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      369
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Username is mandatory
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      370
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Password is mandatory
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      371
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      System unavailable
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      372
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy number, {0} is incorrect
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      373
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Search by CompanyName, Also requires the Primary Insured or Policy Holders details (i.e. firstName or LastName or DateOfBirth)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      374
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Search by Policy Effective Date, Also requires the Primary Insured or Policy Holders details (i.e. FirstName or LastName and DateOfBirth)
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      375
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Search by the Policy Expiry Date, Also requires the Primary Insured or Policy Holders details (i.e. FirstName or LastName and DateOfBirth)
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      376
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Search by Sold Date, Also requires the Primary Insured or Policy Holders details (i.e. FirstName or LastName and DateOfBirth).
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      377
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Search by Primary Insured requires the FirstName or LastName and DateOfBirth.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      378
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Search by Policy Holder requires the FirstName or LastName and DateOfBirth.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      379
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Search by Identity of Policy Holder requires the ID Type and the ID number.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      380
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Search by Identity of Insured requires the ID Type and the ID number.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      381
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Invalid Search Parameters.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      382
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      System Unavailable (Error connecting to DataBase).
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      383
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      System unavailable (Error connecting to DDS).
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      384
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Exception while returning response.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      385
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Exception while returning certificate
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      386
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No Records found from DataBase.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      389
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      Exception while formatting Date.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      390
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      No certificate available.
    </p>
  </td>
</tr>
<tr>
  <td width="62" nowrap="" valign="bottom">
    <p>
      391
    </p>
  </td>
  <td width="198" valign="bottom">
    <p>
      URL not available for certificate.
    </p>
  </td>
  <td width="60" nowrap="" valign="bottom">
    <p>
      392
    </p>
  </td>
  <td width="207" valign="bottom">
    <p>
      Policy cannot be issued if travel destination is one of the following countries; Afghanistan, Burma, Cuba, Democratic Republic of Congo,
      Iran, Iraq, Liberia, Sudan, or Syria.
    </p>
  </td>
</tr>
</tbody>
</table>



</div>
</div>
</div>

<?php
  } else {
?>

<div class="row">
  <div class="col-md-11">
    <div class="editContent" data-selector="Footer">
      <h2 data-selector="h2">Access denied</h2>
    </div>
    <div class="editContent" data-selector="Footer">
      <p data-selector="p">  </p>
      <div class="region region-content">
        <div id="block-system-main" class="block block-system">
          <div class="content">You are not authorized to access this page.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<script>
$(function() {
  $('.new-inner p a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top) - 130
        }, 1000);
        return false;
      }
    }
  });

  $(document).ready(function(){
    resizeDiv();
  });

  window.onresize = function(event) {
    resizeDiv();
  }

  function resizeDiv() {
    var $inner = $('.api-documents-page .api-navigation .new-inner'),
        $outer = $('.api-documents-page .api-navigation'),
        $window = $(window);

    $inner.css({
      'width': 'auto',
      'height': 'auto',
      'top': 0,
      'position': 'relative',
      'overflow': 'visible'
    });

    var innerOffset = $inner.offset(),
        sidebarWidth = $outer.width(),
        vph = $window.height(),
        vpw = $window.width();

    if (vpw > 991) {
      $inner.css({
        'height': (vph - innerOffset.top - 15) + 'px',
        'width': sidebarWidth + 'px',
        'top': innerOffset.top + 'px',
        'position': 'fixed',
         'overflow-y': 'scroll',
         'overflow-x': 'hidden'
      });
    }
  }
});
</script>