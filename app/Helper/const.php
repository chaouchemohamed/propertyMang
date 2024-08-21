<?php

const ACTIVE = 1;
const DEACTIVATE = 0;
// User Role Type
const USER_ROLE_OWNER = 1;
const USER_ROLE_TENANT = 2;
const USER_ROLE_MAINTAINER = 3;
const USER_ROLE_ADMIN = 4;

// Gateway
const GATEWAY_MODE_LIVE = 1;
const GATEWAY_MODE_SANDBOX = 2;

// User Status
const USER_STATUS_ACTIVE = 1;
const USER_STATUS_INACTIVE = 0;
const USER_STATUS_DELETED = 2;

const OWNER_STATUS_ACTIVE = 1;
const OWNER_STATUS_INACTIVE = 0;

const KYC_STATUS_ACCEPTED = 1;
const KYC_STATUS_PENDING = 2;
const KYC_STATUS_REJECTED = 3;

// Order payment status
const ORDER_PAYMENT_STATUS_PENDING = 0;
const ORDER_PAYMENT_STATUS_PAID = 1;
const ORDER_PAYMENT_STATUS_CANCELLED = 2;

const PACKAGE_DURATION_TYPE_MONTHLY = 1;
const PACKAGE_DURATION_TYPE_YEARLY = 2;

//Property
const PROPERTY_TYPE_OWN = 1;
const PROPERTY_TYPE_LEASE = 2;
const PROPERTY_UNIT_TYPE_SINGLE = 1;
const PROPERTY_UNIT_TYPE_MULTIPLE = 2;

//Property Unit
const PROPERTY_UNIT_RENT_TYPE_MONTHLY = 1;
const PROPERTY_UNIT_RENT_TYPE_YEARLY = 2;
const PROPERTY_UNIT_RENT_TYPE_CUSTOM = 3;

const PROPERTY_STATUS_ACTIVE = 1;
const PROPERTY_STATUS_DEACTIVATE = 2;

//Message
const SOMETHING_WENT_WRONG = "Something went wrong! Please try again";
const CREATED_SUCCESSFULLY = "Created Successfully";
const UPDATED_SUCCESSFULLY = "Updated Successfully";
const STATUS_UPDATED_SUCCESSFULLY = "Status Updated Successfully";
const DELETED_SUCCESSFULLY = "Deleted Successfully";
const UPLOADED_SUCCESSFULLY = "Uploaded Successfully";
const DATA_FETCH_SUCCESSFULLY = "Data Fetch Successfully";
const SENT_SUCCESSFULLY = "Sent Successfully";
const PAY_SUCCESSFULLY = "Pay Successfully";
const REPLIED_SUCCESSFULLY = "Replied Successfully";


// Property Step Active Class
const PROPERTY_INFORMATION_ACTIVE_CLASS = 1;
const LOCATION_ACTIVE_CLASS = 2;
const UNIT_ACTIVE_CLASS = 3;
const RENT_CHARGE_ACTIVE_CLASS = 4;
const IMAGE_ACTIVE_CLASS = 5;

//Expense
const EXPENSE_RESPONSIBILITY_TENANT = 1;
const EXPENSE_RESPONSIBILITY_OWNER = 2;

const FORM_STEP_ONE = 1;
const FORM_STEP_TWO = 2;
const FORM_STEP_THREE = 3;

const TENANT_STATUS_ACTIVE = 1;
const TENANT_STATUS_INACTIVE = 2;
const TENANT_STATUS_DRAFT = 3;
const TENANT_STATUS_CLOSE = 4;

const RENT_TYPE_MONTHLY = 1;
const RENT_TYPE_YEARLY = 2;
const RENT_TYPE_CUSTOM = 3;
//Invoice
const INVOICE_STATUS_PENDING = 0;
const INVOICE_STATUS_PAID = 1;
const INVOICE_STATUS_OVER_DUE = 2;

const INVOICE_RECURRING_TYPE_MONTHLY = 1;
const INVOICE_RECURRING_TYPE_YEARLY = 2;
const INVOICE_RECURRING_TYPE_CUSTOM = 3;

const NOTICE_STATUS_VIEW = 1;
const NOTICE_STATUS_PENDING = 0;

const NOTIFICATION_TYPE_MULTIPLE = 1;
const NOTIFICATION_TYPE_SINGLE = 2;

const MAINTENANCE_REQUEST_STATUS_COMPLETE = 1;
const MAINTENANCE_REQUEST_STATUS_INPROGRESS = 2;
const MAINTENANCE_REQUEST_STATUS_PENDING = 3;

const TICKET_STATUS_OPEN = 1;
const TICKET_STATUS_INPROGRESS = 2;
const TICKET_STATUS_CLOSE = 3;
const TICKET_STATUS_REOPEN = 4;
const TICKET_STATUS_RESOLVED = 5;

const TAX_TYPE_FIXED = 0;
const TAX_TYPE_PERCENTAGE = 1;

const TYPE_FIXED = 0;
const TYPE_PERCENTAGE = 1;

//Gateway Name
const PAYPAL = 'paypal';
const STRIPE = 'stripe';
const RAZORPAY = 'razorpay';
const INSTAMOJO = 'instamojo';
const MOLLIE = 'mollie';
const PAYSTACK = 'paystack';
const SSLCOMMERZ = 'sslcommerz';
const MERCADOPAGO = 'mercadopago';
const FLUTTERWAVE = 'flutterwave';
const BANK = 'bank';
const WALLET = 'wallet';

// target audience
const TARGET_AUDIENCE_PROPERTY = 1;
const TARGET_AUDIENCE_USER = 2;
const TARGET_AUDIENCE_CUSTOM = 3;

// history status
const SMS_STATUS_DELIVERED = 1;
const SMS_STATUS_PENDING = 2;
const SMS_STATUS_FAILED = 3;

const MAIL_STATUS_DELIVERED = 1;
const MAIL_STATUS_PENDING = 2;
const MAIL_STATUS_FAILED = 3;

// user type
const USER_TYPE_TENANT = 1;
const USER_TYPE_MAINTAINER = 2;

// package rules
const RULES_MAINTAINER = 1;
const RULES_PROPERTY = 2;
const RULES_TENANT = 3;
const RULES_INVOICE = 4;
const RULES_AUTO_INVOICE = 5;
const RULES_PLAN_REMAINING_DAYS = 6;
