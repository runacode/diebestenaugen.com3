<?php
include_once(dirname(__FILE__) . '/../../locale/languages.php');
?>
if(!kvalidate_config)
    kvalidate_config = {};

kvalidate_config.placeHolders = {
	firstName:'<?= T('First Name'); ?>',
	lastName:'<?= T('Last Name'); ?>',
	emailAddress:'<?= T('Email Address'); ?>',
	phoneNumber:'<?= T('Phone Number'); ?>',
	address1:'<?= T('Address'); ?>',
	address2:'<?= T('Address Line 2'); ?>',
	city:'<?= T('City'); ?>',
	state:'<?= T('State'); ?>',
	country:'<?= T('Country'); ?>',
	postalCode:'<?= T('Postal Code'); ?>',
	shipAddress1:'<?= T('Address Line 1'); ?>',
	shipAddress2:'<?= T('Address Line 2'); ?>',
	shipCity:'<?= T('City'); ?>',
	shipState:'<?= T('State'); ?>',
	shipCountry:'<?= T('Country'); ?>',
	shipPostalCode:'<?= T('Postal Code'); ?>',
	cardNumber:'<?= T('Credit Card #'); ?>',
	cardSecurityCode:'<?= T('CVV Code'); ?>',
	achAccountNumber:'<?= T('Account #'); ?>',
	achRoutingNumber:'<?= T('Routing #'); ?>',
	achAccountHolderType:'<?= T('Account Holder'); ?>',
	achAccountType:'<?= T('Account Type'); ?>',
	billShipSame:'<?= T('Billing Same as Shipping Address'); ?>',
	couponCode:'<?= T('Coupon Code'); ?>',
	taxExemption:'<?= T('Tax Exemption No.'); ?>'
};

kvalidate_config.requiredErrors = {
	firstName: '<?= T('First Name is required'); ?>',
	lastName: '<?= T('Last Name is required'); ?>',
	emailAddress: '<?= T('Email is required'); ?>',
	phoneNumber: '<?= T('Phone Number is required'); ?>',
	address1: '<?= T('Address is a Required Value'); ?>',
	address2: '<?= T('Address Line 2 is a Required Value'); ?>',
	city: '<?= T('City is a Required Value'); ?>',
	state: '<?= T('State is a Required Value'); ?>',
	country: '<?= T('Country is a Required Value'); ?>',
	postalCode: '<?= T('Postal Code is a Required Value'); ?>',
	shipAddress1: '<?= T('Address Line 1 is a Required Value'); ?>',
	shipAddress2: '<?= T('Address Line 2 is a Required Value'); ?>',
	shipCity: '<?= T('City is a Required Value'); ?>',
	shipState: '<?= T('State is a Required Value'); ?>',
	shipCountry: '<?= T('Country is a Required Value'); ?>',
	shipPostalCode: '<?= T('Postal Code is a Required Value'); ?>',
	confirmTOS: '<?= T('You Must Agree to the Terms and Conditions'); ?>',
	cardNumber: '<?= T('Card Number is a Required Value'); ?>',
	cardExpiryDate: '<?= T('Expiration Date is a Required Value'); ?>',
	cardSecurityCode: '<?= T('SecurityCode is a Required Value'); ?>',
	achAccountHolderType: '<?= T('Account Holder is a Required Value'); ?>',
	achAccountType: '<?= T('Account Type is a Required Value'); ?>',
	achAcountNumber: '<?= T('Account # is a Required Value');?>',
	achRoutingNumber: '<?= T('Routing # is a Required Value');?>'
};

//-message displayed when a field fails validation
kvalidate_config.invalidErrors = {
	emailAddress: '<?= T('Email Address is Invalid'); ?>',
	phoneNumber: '<?= T('Phone Number is Invalid'); ?>',
	cardNumber: '<?= T('Card Number is Invalid'); ?>'
};

//-other error messages
//		the message can also be a function, which allows for some interesting possibilities
//
//		EX. prepaid redirect to straight-sale
//		prepaid: function(){window.location="straight-sale.php";}
//

kvalidate_config.otherErrors = {
	cardExpired: '<?= T('You Entered an Expired Date'); ?>',
	cartEmpty: '<?= T('You must select a product to checkout'); ?>',
	blackList: '<?= T('Your account has been blacklisted'); ?>',
	prepaid: '<?= T('Prepaid cards are not allowed'); ?>',
	debit: '<?= T('Debit cards are not allowed'); ?>',
	mastercard: '<?= T('Mastercard is not allowed'); ?>',
	trialDedup: '<?= T('You have already purchased this product'); ?>',
	decline: '<?= T('Your card has been declined. Please try a new card'); ?>',
	declineDedup: '<?= T('This card has already declined. Please try a new card'); ?>',
	paymentProcessing: '<?= T('Your payment is processing. Please wait'); ?>'
};

window.DiscountMessage ='<?=t('The discount expires in'); ?>';
