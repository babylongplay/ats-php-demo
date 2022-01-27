<?php
namespace ats;

// Languages
define("ATS_TH", 1); // th
define("ATS_ENUS", 2); // en-US

// Devices
define("ATS_DEVICE_MOBILE", 1); // all mobile devices
define("ATS_DEVICE_PC", 0); // all pc/desktop devices

// Currency
define("ATS_C_THB", "THB");
define("ATS_C_VND", "VND");
define("ATS_C_CNY", "CNY");
define("ATS_C_MYR", "MYR");
define("ATS_C_IDR", "IDR");

// API Routes
define("ATS_API_CREATEUSER", "/api/user/create"); // Create User
define("ATS_API_USER", "/api/user"); // User Manage
define("ATS_API_FUNDCREDIT", "/api/fund/credit"); // Credit
define("ATS_API_FUNDDEBIT", "/api/fund/debit"); // Debit
define("ATS_API_FUNDHISTORY", "/api/fund/history"); // Fund History
define("ATS_API_LAUNCH", "/api/platform/login"); // Launch Game
define("ATS_API_BETRECORD", "/api/report/bet-record"); // Bet Record Query
define("ATS_API_SIMPLEWL", "/api/report/simple-winlose"); // Simple W/L Query