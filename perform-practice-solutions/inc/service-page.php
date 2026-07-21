<?php
/**
 * Specialty service page content helpers + Customizer.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Service page slugs registered for Customizer editing.
 *
 * Add a slug here when you want a dedicated Customizer section.
 * Any page using the Specialty Service template still works with generic defaults.
 *
 * @return array
 */
function pps_service_customizer_slugs() {
	return array(
		'physical-therapy-billing-services'      => __( 'Physical Therapy Billing', 'perform-practice' ),
		'chiropractic-billing-services'          => __( 'Chiropractic Billing', 'perform-practice' ),
		'pain-management-billing-services'       => __( 'Pain Management Billing', 'perform-practice' ),
		'orthopedic-medical-billing-services'    => __( 'Orthopedic Medical Billing', 'perform-practice' ),
		'occupational-therapy-billing-services'  => __( 'Occupational Therapy Billing', 'perform-practice' ),
		'speech-therapy-billing-services'        => __( 'Speech Therapy Billing', 'perform-practice' ),
		'pediatrics-billing-services'            => __( 'Pediatrics Billing', 'perform-practice' ),
		'plastic-surgery-billing-services'       => __( 'Plastic Surgery Billing', 'perform-practice' ),
		'podiatry-billing-services'              => __( 'Podiatry Billing', 'perform-practice' ),
		'psychiatry-billing-services'            => __( 'Psychiatry Billing', 'perform-practice' ),
		'psychology-billing-services'            => __( 'Psychology Billing', 'perform-practice' ),
		'pulmonology-billing-services'           => __( 'Pulmonology Billing', 'perform-practice' ),
		'rheumatology-billing-services'          => __( 'Rheumatology Billing', 'perform-practice' ),
		'telemedicine-billing-services'          => __( 'Telemedicine Billing', 'perform-practice' ),
		'urology-billing-services'               => __( 'Urology Billing', 'perform-practice' ),
		'wound-care-billing-services'            => __( 'Wound Care Billing', 'perform-practice' ),
	);
}

/**
 * Placeholder specialty content (same structure as PT page). Replace later with full copy.
 *
 * @param string $label     Specialty label, e.g. "Chiropractic".
 * @param string $seo_title Meta title.
 * @param string $seo_desc  Meta description.
 * @return array
 */
function pps_service_placeholder_defaults( $label, $seo_title, $seo_desc ) {
	$short = $label;
	$title = $label . ' Billing Services';

	return array(
		'seo_title' => $seo_title,
		'seo_desc'  => $seo_desc,

		'hero_eyebrow'    => $title,
		'hero_title'      => $label . ' Billing That Gets Practices Paid Faster',
		'hero_lead'       => $title . ' handle claim submission, denial management, and patient collections so your clinic gets paid faster with less admin work. Perform Practice Solutions partners with your front desk, scrubs and submits claims daily, and delivers an average 3 week bill to paid cycle.',
		'hero_cta'        => 'Book a Strategy Session',
		'hero_cta_url'    => '#contact',
		'hero_stat'       => '3 weeks',
		'hero_stat_label' => 'average bill-to-paid time',

		'problem_eyebrow'      => 'Why Outsource',
		'problem_title'        => 'Why outsource your ' . strtolower( $short ) . ' billing?',
		'problem_text'         => 'Outsourcing ' . strtolower( $short ) . ' billing gives your practice a dedicated team of billing specialists without the cost of hiring, training, and managing in-house billers. Practices that partner with a billing company typically see fewer denials, faster reimbursement, and cleaner reporting.',
		'problem_text_2'       => 'An in-house biller means salary, benefits, software, and turnover risk. A generic billing agency means slow batches and no visibility. Perform Practice Solutions is built differently. We bill daily, work directly with your front desk, and show you where every dollar stands.',
		'problem_note'         => 'We are on your team, and we want you to get paid.',
		'problem_card_1_title' => 'Transparent billing',
		'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
		'problem_card_2_title' => 'Front desk partnership',
		'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

		'offer_eyebrow' => 'What You Get',
		'offer_title'   => $short . ' billing done the way it is meant to be done',
		'offer_lead'    => 'Full-service ' . strtolower( $short ) . ' billing built for cleaner claims, faster reimbursement, and clearer reporting.',
		'offer_1'       => 'Full revenue cycle management for ' . strtolower( $short ) . ' practices',
		'offer_2'       => 'Daily claim submission with front desk collaboration',
		'offer_3'       => 'Denial prevention and best-practices coaching',
		'offer_4'       => 'AI-powered patient billing and collections support',
		'offer_5'       => 'Chat support for your front desk team',
		'offer_6'       => 'Monthly report reviews and quarterly deep analysis',
		'offer_7'       => 'EMR integration with the systems you already use',
		'offer_8'       => 'Insurance claims, Medicare compliance, and patient balance management',

		'analysis_eyebrow' => 'Free Analysis',
		'analysis_title'   => 'Free ' . strtolower( $short ) . ' billing service analysis',
		'analysis_text'    => 'Want to see how your current biller rates? Request a free medical billing analysis and get an honest look at your denials, turnaround time, and recoverable revenue.',
		'analysis_cta'     => 'Get Your Free Analysis',
		'analysis_cta_url' => '#contact',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'A clearer path from visit to payment',
		'process_1_title' => 'Connect and audit',
		'process_1_text'  => 'We review your current claims, denial patterns, and front desk workflows to find where revenue is leaking.',
		'process_2_title' => 'Bill daily with precision',
		'process_2_text'  => 'Claims are scrubbed against payer rules and submitted every day, not in slow weekly batches.',
		'process_3_title' => 'Recover and report',
		'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

		'promo_title'   => 'New ' . strtolower( $short ) . ' billing clients',
		'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your ' . strtolower( $short ) . ' billing to Perform Practice Solutions.',
		'promo_cta'     => 'Claim This Offer',
		'promo_cta_url' => '#contact',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => $short . ' billing questions we hear most',
		'faq_1_q'     => 'Why should ' . strtolower( $short ) . ' practices outsource their billing?',
		'faq_1_a'     => 'Outsourcing gives your practice access to specialty billing specialists, daily claim submission, and denial prevention without the cost of hiring and training in-house staff. Most practices that outsource see faster reimbursement, fewer write offs, and more time for patient care.',
		'faq_2_q'     => 'Is outsourcing more affordable than hiring an in-house biller?',
		'faq_2_a'     => 'For most practices, yes. An in-house biller costs a salary, benefits, software, and ongoing training, and turnover puts your revenue at risk. Outsourcing replaces those fixed costs with a predictable partnership that scales with your claim volume.',
		'faq_3_q'     => 'How do you reduce claim denials?',
		'faq_3_a'     => 'We prevent denials before claims go out. Every claim is scrubbed against payer rules, submitted daily, and tracked through payment. When a denial does happen, we correct and resubmit it quickly, then coach your front desk on the root cause.',
		'faq_4_q'     => 'Which EMR systems do you work with?',
		'faq_4_a'     => 'We work inside the systems your practice already uses. There is no software migration required to start. Our team adapts to your existing EMR and clearinghouse workflows.',
		'faq_5_q'     => 'How transparent is your billing process?',
		'faq_5_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis.',
		'faq_6_q'     => 'Can you handle both insurance claims and patient payments?',
		'faq_6_a'     => 'Yes. We manage full revenue cycle management — from insurance claim submission and Medicare compliance to patient balance billing and collections support.',

		'cta_title'      => 'Ready to get paid faster for the care you deliver?',
		'cta_text'       => 'Let\'s map a billing strategy around your ' . strtolower( $short ) . ' practice for cleaner claims, faster cash flow, and less admin stress.',
		'cta_button'     => 'Book a Strategy Session',
		'cta_button_url' => '#contact',
	);
}

/**
 * Default content for a service page slug.
 *
 * @param string $slug Page slug.
 * @return array
 */
function pps_service_defaults_for( $slug ) {
	$catalog = array(
		'physical-therapy-billing-services' => array(
			'seo_title' => 'Physical Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your physical therapy billing to PT billing experts. Daily claim submission, denial prevention, and a 3 week average bill to paid cycle. Book a strategy session today.',

			'hero_eyebrow'    => 'Physical Therapy Billing Services',
			'hero_title'      => 'Physical Therapy Billing That Gets PT Practices Paid Faster',
			'hero_lead'       => 'Physical therapy billing services handle claim submission, denial management, and patient collections so your clinic gets paid faster with less admin work. Perform Practice Solutions partners with your front desk, scrubs and submits claims daily, and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'       => 'Why Outsource',
			'problem_title'         => 'Why outsource your physical therapy billing?',
			'problem_text'          => 'Outsourcing physical therapy billing gives your practice a dedicated team of PT billing specialists without the cost of hiring, training, and managing in-house billers. Practices that partner with a billing company typically see fewer denials, faster reimbursement, and cleaner reporting.',
			'problem_text_2'        => 'An in-house biller means salary, benefits, software, and turnover risk. A generic billing agency means slow batches and no visibility. Perform Practice Solutions is built differently. We bill daily, work directly with your front desk, and show you where every dollar stands.',
			'problem_note'          => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title'  => 'Transparent billing',
			'problem_card_1_text'   => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title'  => 'Front desk partnership',
			'problem_card_2_text'   => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'PT billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service physical therapy billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for PT practices',
			'offer_2'       => 'Daily claim submission with front desk collaboration',
			'offer_3'       => 'Denial prevention and best-practices coaching',
			'offer_4'       => 'AI-powered patient billing and collections support',
			'offer_5'       => 'Chat support for your front desk team',
			'offer_6'       => 'Monthly report reviews and quarterly deep analysis',
			'offer_7'       => 'EMR integration with Raintree, Tebra, AthenaHealth, and the systems you already use',
			'offer_8'       => 'Insurance claims, Medicare compliance, and patient balance management',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free physical therapy billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free medical billing analysis and get an honest look at your denials, turnaround time, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from visit to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, denial patterns, and front desk workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and submitted every day, not in slow weekly batches.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New PT billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your physical therapy billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Physical therapy billing questions we hear most',
			'faq_1_q'     => 'Why should physical therapy practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing physical therapy billing gives your practice access to PT billing specialists, daily claim submission, and denial prevention without the cost of hiring and training in-house staff. Most practices that outsource see faster reimbursement, fewer write offs, and more time for patient care instead of paperwork.',
			'faq_2_q'     => 'Is outsourcing PT billing more affordable than hiring an in-house biller?',
			'faq_2_a'     => 'For most practices, yes. An in-house biller costs a salary, benefits, software, and ongoing training, and turnover puts your revenue at risk. Outsourcing to Perform Practice Solutions replaces those fixed costs with a predictable partnership that scales with your claim volume and keeps billing running without interruption.',
			'faq_3_q'     => 'How do you reduce claim denials for PT practices?',
			'faq_3_a'     => 'We prevent denials before claims go out. Every claim is scrubbed against payer rules, submitted daily, and tracked through payment. When a denial does happen, we correct and resubmit it quickly, then coach your front desk on the root cause so the same error does not repeat.',
			'faq_4_q'     => 'Which EMR systems do you work with?',
			'faq_4_a'     => 'We work inside the systems your practice already uses, including Raintree, Tebra, AthenaHealth, and CureMD. There is no software migration required to start. Our team adapts to your existing EMR and clearinghouse workflows, so switching to Perform Practice Solutions does not disrupt your schedule or documentation.',
			'faq_5_q'     => 'How transparent is your billing process?',
			'faq_5_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers. You never have to wonder what happened to a claim or a payment.',
			'faq_6_q'     => 'Can you handle both insurance claims and patient payments?',
			'faq_6_a'     => 'Yes. Perform Practice Solutions manages full revenue cycle management for PT practices, from insurance claim submission and Medicare compliance to patient balance billing and collections support. We pursue every dollar you have earned across both payer and patient sides, so nothing falls through the cracks.',

			'cta_title'      => 'Ready to get paid faster for the care you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your PT practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'chiropractic-billing-services' => array(
			'seo_title' => 'Chiropractic Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your chiropractic billing to specialists who know CMT codes, Medicare AT modifiers, and medical necessity documentation. Book a strategy session today.',

			'hero_eyebrow'    => 'Chiropractic Billing Services',
			'hero_title'      => 'Chiropractic Billing That Keeps Adjustments Paid and Denials Down',
			'hero_lead'       => 'Chiropractic billing services manage claim submission, CMT coding, and medical necessity documentation so your clinic gets reimbursed for every adjustment. Perform Practice Solutions partners with your front desk, scrubs and submits claims daily, and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why outsource your chiropractic billing?',
			'problem_text'         => 'Outsourcing chiropractic billing gives your practice specialists who understand spinal manipulation codes, Medicare\'s AT modifier rules, and the medical necessity documentation payers demand. Chiropractic claims face some of the highest denial rates in outpatient care, and maintenance care denials quietly drain revenue from clinics every month.',
			'problem_text_2'       => 'An in-house biller rarely has chiropractic-specific expertise, and generic agencies treat CMT codes like any other claim. Perform Practice Solutions bills daily, coaches your front desk on clean intake data, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Chiropractic billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service chiropractic billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for chiropractic practices',
			'offer_2'       => 'Accurate CMT coding for 98940, 98941, and 98942 claims',
			'offer_3'       => 'Medicare AT modifier compliance and maintenance care guidance',
			'offer_4'       => 'Daily claim submission with front desk collaboration',
			'offer_5'       => 'Denial prevention and medical necessity documentation coaching',
			'offer_6'       => 'Hybrid cash and insurance billing support',
			'offer_7'       => 'Monthly report reviews and quarterly deep analysis',
			'offer_8'       => 'Insurance claims and patient balance management',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free chiropractic billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing analysis and get an honest look at your denials, turnaround time, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from adjustment to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, CMT coding patterns, and front desk workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and Medicare chiropractic guidelines, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New chiropractic billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your chiropractic billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Chiropractic billing questions we hear most',
			'faq_1_q'     => 'Why should chiropractors outsource their billing?',
			'faq_1_a'     => 'Outsourcing chiropractic billing gives your clinic access to specialists who know CMT codes, Medicare AT modifier rules, and medical necessity requirements. Most chiropractors who outsource see fewer maintenance care denials, faster reimbursement, and more time for patient care instead of appealing rejected claims.',
			'faq_2_q'     => 'Why do chiropractic claims get denied so often?',
			'faq_2_a'     => 'Chiropractic claims are commonly denied for missing AT modifiers, insufficient medical necessity documentation, and visits payers classify as maintenance care. Perform Practice Solutions scrubs every claim against these rules before submission and coaches your team on documentation that supports active treatment.',
			'faq_3_q'     => 'Do you handle Medicare chiropractic billing?',
			'faq_3_a'     => 'Yes. We manage Medicare chiropractic claims including AT modifier compliance, ABN requirements, and the documentation standards that separate active treatment from maintenance care. Our team stays current on Medicare chiropractic policy so your claims meet requirements the first time.',
			'faq_4_q'     => 'Can you bill for both insurance and cash-based services?',
			'faq_4_a'     => 'Yes. Many chiropractic practices run hybrid models with insured adjustments alongside cash services like massage or wellness plans. Perform Practice Solutions manages your insurance claims and patient balances together so both revenue streams stay organized and collected.',
			'faq_5_q'     => 'Which chiropractic software do you work with?',
			'faq_5_a'     => 'We work inside the systems your practice already uses, including ChiroTouch, Jane, and other common chiropractic EMRs. There is no software migration required to start, so switching to Perform Practice Solutions does not disrupt your schedule or documentation.',
			'faq_6_q'     => 'How transparent is your billing process?',
			'faq_6_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers.',

			'cta_title'      => 'Ready to get paid for every adjustment you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your chiropractic practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'pain-management-billing-services' => array(
			'seo_title' => 'Pain Management Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pain management billing to experts in prior authorizations, injection coding, and payer audits. Faster reimbursement, fewer denials. Book a strategy session.',

			'hero_eyebrow'    => 'Pain Management Billing Services',
			'hero_title'      => 'Pain Management Billing Built for High-Value Procedures',
			'hero_lead'       => 'Pain management billing services handle prior authorizations, procedure coding, and denial management for interventional pain practices. Perform Practice Solutions submits claims daily, protects your high-dollar procedures from denials, and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why outsource your pain management billing?',
			'problem_text'         => 'Outsourcing pain management billing gives your practice specialists who understand injection coding, fluoroscopy bundling rules, and the prior authorization workload that comes with interventional procedures. A single denied epidural or ablation can cost more than a week of office visits, so pain practices cannot afford billing errors.',
			'problem_text_2'       => 'Pain management also faces heavier payer scrutiny and documentation audits than most specialties. Perform Practice Solutions scrubs every claim against payer-specific rules, manages authorizations before the procedure happens, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Pain management billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service pain management billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for pain management practices',
			'offer_2'       => 'Prior authorization management for injections and procedures',
			'offer_3'       => 'Accurate coding for epidurals, nerve blocks, and ablations',
			'offer_4'       => 'Fluoroscopy and imaging guidance bundling compliance',
			'offer_5'       => 'Daily claim submission with front desk collaboration',
			'offer_6'       => 'Denial prevention and payer audit documentation support',
			'offer_7'       => 'Monthly report reviews and quarterly deep analysis',
			'offer_8'       => 'Insurance claims and patient balance management',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free pain management billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing analysis and get an honest look at your denials, authorization delays, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from procedure to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, denial patterns, and authorization workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and bundling edits, then submitted every day, not in slow weekly batches.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New pain management billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your pain management billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Pain management billing questions we hear most',
			'faq_1_q'     => 'Why should pain management practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing pain management billing gives your practice specialists in procedure coding, prior authorizations, and payer audit documentation. Because interventional procedures carry high reimbursement values, a single billing error costs far more than in other specialties. Outsourcing protects that revenue while freeing your staff.',
			'faq_2_q'     => 'Do you handle prior authorizations for procedures?',
			'faq_2_a'     => 'Yes. We manage prior authorizations for epidurals, nerve blocks, radiofrequency ablations, and other interventional procedures before they happen. Getting authorization right up front prevents the most expensive category of pain management denials and keeps your procedure schedule moving.',
			'faq_3_q'     => 'How do you prevent denials on injection claims?',
			'faq_3_a'     => 'We scrub every claim against payer-specific coding rules, bundling edits, and frequency limits before submission. Fluoroscopy guidance, bilateral procedures, and multi-level injections each carry unique billing rules, and our team applies them correctly the first time so claims pay without appeals.',
			'faq_4_q'     => 'Can you support us through payer audits?',
			'faq_4_a'     => 'Yes. Pain management practices face more payer audits than most specialties. Perform Practice Solutions maintains clean documentation trails on every claim and helps you respond to records requests, so audits become a routine process instead of a revenue threat.',
			'faq_5_q'     => 'Which EMR systems do you work with?',
			'faq_5_a'     => 'We work inside the systems your practice already uses, including Tebra, AthenaHealth, CureMD, and other common EMRs. There is no software migration required to start, so switching to Perform Practice Solutions does not disrupt your workflows.',
			'faq_6_q'     => 'How transparent is your billing process?',
			'faq_6_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers.',

			'cta_title'      => 'Ready to get paid faster for the procedures you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your pain management practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'orthopedic-medical-billing-services' => array(
			'seo_title' => 'Orthopedic Medical Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your orthopedic billing to experts in surgical coding, global periods, and modifier compliance. Cleaner claims and faster payment. Book a strategy session.',

			'hero_eyebrow'    => 'Orthopedic Medical Billing Services',
			'hero_title'      => 'Orthopedic Billing That Protects Surgical Revenue',
			'hero_lead'       => 'Orthopedic medical billing services manage surgical coding, global period tracking, and modifier compliance so orthopedic practices capture every dollar they earn. Perform Practice Solutions submits claims daily, prevents modifier denials, and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why outsource your orthopedic billing?',
			'problem_text'         => 'Outsourcing orthopedic billing gives your practice coders who understand global surgical periods, laterality modifiers, fracture care coding, and DME billing. Orthopedics combines surgery, office visits, imaging, and durable medical equipment on the same patients, which makes it one of the easiest specialties to underbill.',
			'problem_text_2'       => 'An in-house biller juggling all of that alone leaves money on the table. Perform Practice Solutions bills daily, applies modifiers correctly the first time, tracks global periods so billable visits are never written off, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Orthopedic billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service orthopedic medical billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for orthopedic practices',
			'offer_2'       => 'Surgical coding with correct modifier application, including RT, LT, and 59',
			'offer_3'       => 'Global surgical period tracking and post-op visit management',
			'offer_4'       => 'Fracture care and casting supply billing',
			'offer_5'       => 'Prior authorization management for surgery and advanced imaging',
			'offer_6'       => 'DME billing for braces, boots, and orthotics',
			'offer_7'       => 'Daily claim submission with front desk collaboration',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free orthopedic billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing analysis and get an honest look at your denials, modifier errors, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from visit to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, modifier usage, and global period tracking to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and surgical coding edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New orthopedic billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your orthopedic billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Orthopedic billing questions we hear most',
			'faq_1_q'     => 'Why should orthopedic practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing orthopedic billing gives your practice coders trained in surgical modifiers, global periods, fracture care, and DME claims. Because orthopedics blends surgery, office visits, and equipment on the same patients, specialized billing captures revenue that general billers routinely miss or write off.',
			'faq_2_q'     => 'How do you handle global surgical periods?',
			'faq_2_a'     => 'We track every global period so post-op visits are documented correctly and separately billable services are never buried inside the surgical package. When a visit falls outside the global period or qualifies for a modifier, we bill it, so your surgeons get paid for all their work.',
			'faq_3_q'     => 'Can you bill for DME like braces and orthotics?',
			'faq_3_a'     => 'Yes. Perform Practice Solutions handles durable medical equipment billing including braces, boots, and orthotics, along with the supplier documentation payers require. DME is a common revenue leak in orthopedic practices, and we make sure it is captured and collected.',
			'faq_4_q'     => 'Do you manage prior authorizations for surgery and imaging?',
			'faq_4_a'     => 'Yes. We manage prior authorizations for surgical procedures and advanced imaging like MRI before they happen. Authorization denials are among the most expensive in orthopedics, and handling them proactively keeps your OR schedule and your revenue moving.',
			'faq_5_q'     => 'Which EMR systems do you work with?',
			'faq_5_a'     => 'We work inside the systems your practice already uses, including Tebra, AthenaHealth, CureMD, and other common orthopedic EMRs. There is no software migration required to start, so switching to Perform Practice Solutions does not disrupt your workflows.',
			'faq_6_q'     => 'How transparent is your billing process?',
			'faq_6_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers.',

			'cta_title'      => 'Ready to get paid faster for the care you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your orthopedic practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'occupational-therapy-billing-services' => array(
			'seo_title' => 'Occupational Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your OT billing to experts in timed codes, the 8 minute rule, and Medicare therapy thresholds. Cleaner claims, faster payment. Book a strategy session.',

			'hero_eyebrow'    => 'Occupational Therapy Billing Services',
			'hero_title'      => 'Occupational Therapy Billing That Captures Every Timed Unit',
			'hero_lead'       => 'Occupational therapy billing services manage timed code units, Medicare therapy thresholds, and plan of care compliance so OT practices get paid for every minute of treatment. Perform Practice Solutions submits claims daily and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why outsource your occupational therapy billing?',
			'problem_text'         => 'Outsourcing occupational therapy billing gives your practice specialists who understand the 8 minute rule, timed versus untimed codes, KX modifier requirements, and plan of care certification deadlines. OT revenue lives in the details, and undercounted units or a lapsed certification quietly costs practices thousands every month.',
			'problem_text_2'       => 'Generic billers rarely understand therapy billing rules, and in-house staff struggle to keep up with Medicare threshold changes. Perform Practice Solutions bills daily, counts every billable unit, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'OT billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service occupational therapy billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for occupational therapy practices',
			'offer_2'       => 'Accurate timed code unit counting under the 8 minute rule',
			'offer_3'       => 'Medicare therapy threshold tracking and KX modifier compliance',
			'offer_4'       => 'Plan of care certification and recertification tracking',
			'offer_5'       => 'Daily claim submission with front desk collaboration',
			'offer_6'       => 'Denial prevention and documentation coaching',
			'offer_7'       => 'Pediatric and adult payer expertise',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free occupational therapy billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing analysis and get an honest look at your denials, undercounted units, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from session to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, unit counting, and plan of care workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and therapy thresholds, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New OT billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your occupational therapy billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Occupational therapy billing questions we hear most',
			'faq_1_q'     => 'Why should OT practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing occupational therapy billing gives your practice specialists in timed codes, the 8 minute rule, and Medicare therapy thresholds. Most OT practices that outsource recover units they were undercounting, reduce plan of care denials, and free their therapists to focus on treatment instead of paperwork.',
			'faq_2_q'     => 'What is the 8 minute rule and why does it matter?',
			'faq_2_a'     => 'The 8 minute rule determines how many billable units you can claim for timed therapy codes based on total treatment minutes. Miscounting units is one of the most common revenue leaks in OT billing. Our team counts units correctly on every claim so nothing is left unbilled.',
			'faq_3_q'     => 'Do you track Medicare therapy thresholds?',
			'faq_3_a'     => 'Yes. We monitor each patient\'s progress toward the Medicare therapy threshold and apply the KX modifier with supporting documentation when continued care is medically necessary. That keeps claims paying past the threshold instead of triggering denials or audits.',
			'faq_4_q'     => 'Can you bill for pediatric occupational therapy?',
			'faq_4_a'     => 'Yes. We handle pediatric OT billing including Medicaid plans, school-adjacent services, and commercial payers with pediatric-specific rules. Whether your caseload is children, adults, or both, Perform Practice Solutions manages the payer mix so reimbursement stays consistent.',
			'faq_5_q'     => 'Which EMR systems do you work with?',
			'faq_5_a'     => 'We work inside the systems your practice already uses, including Raintree, Tebra, AthenaHealth, and other common therapy EMRs. There is no software migration required to start, so switching to Perform Practice Solutions does not disrupt your documentation.',
			'faq_6_q'     => 'How transparent is your billing process?',
			'faq_6_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers.',

			'cta_title'      => 'Ready to get paid for every unit you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your OT practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'speech-therapy-billing-services' => array(
			'seo_title' => 'Speech Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your speech therapy billing to experts in SLP evaluation codes, Medicare thresholds, and pediatric payers. Cleaner claims, faster payment. Book a strategy session.',

			'hero_eyebrow'    => 'Speech Therapy Billing Services',
			'hero_title'      => 'Speech Therapy Billing That Keeps Every Session Reimbursed',
			'hero_lead'       => 'Speech therapy billing services manage SLP evaluation and treatment coding, Medicare therapy thresholds, and pediatric payer requirements so your practice gets paid for every session. Perform Practice Solutions submits claims daily and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why outsource your speech therapy billing?',
			'problem_text'         => 'Outsourcing speech therapy billing gives your practice specialists who understand SLP evaluation versus treatment coding, untimed session rules, plan of care requirements, and the Medicaid complexity that comes with pediatric caseloads. Speech therapy claims fail for different reasons than other specialties, and generic billers miss those patterns.',
			'problem_text_2'       => 'Whether you treat children, adults, or both, Perform Practice Solutions bills daily, keeps authorizations and certifications current, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Speech therapy billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service speech therapy billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for speech therapy practices',
			'offer_2'       => 'Accurate coding for SLP evaluations and treatment sessions',
			'offer_3'       => 'Medicare therapy threshold tracking and KX modifier compliance',
			'offer_4'       => 'Pediatric Medicaid and commercial payer expertise',
			'offer_5'       => 'Authorization tracking for visit limits and reauthorizations',
			'offer_6'       => 'Plan of care certification and recertification management',
			'offer_7'       => 'Daily claim submission with front desk collaboration',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free speech therapy billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing analysis and get an honest look at your denials, authorization gaps, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from session to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, authorization tracking, and plan of care workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and therapy thresholds, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New speech therapy billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your speech therapy billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Speech therapy billing questions we hear most',
			'faq_1_q'     => 'Why should speech therapy practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing speech therapy billing gives your practice specialists in SLP coding, therapy thresholds, and pediatric payer rules. Most speech practices that outsource see fewer authorization denials, faster reimbursement, and more therapist time spent on sessions instead of claim follow-up and appeals.',
			'faq_2_q'     => 'Do you handle pediatric speech therapy billing?',
			'faq_2_a'     => 'Yes. We manage pediatric speech billing including state Medicaid plans, managed care organizations, and commercial payers with pediatric visit limits. Pediatric caseloads carry the heaviest authorization workload in speech therapy, and our team keeps those approvals current.',
			'faq_3_q'     => 'How do you prevent authorization denials?',
			'faq_3_a'     => 'We track every patient\'s authorized visit count and reauthorization deadlines, then submit renewal requests before sessions run out. Lapsed authorizations are the top revenue leak in speech therapy, and proactive tracking means your therapists never deliver sessions that cannot be billed.',
			'faq_4_q'     => 'Do you track Medicare therapy thresholds for speech services?',
			'faq_4_a'     => 'Yes. Speech-language pathology shares a combined Medicare threshold with physical therapy, which makes tracking essential. We monitor each patient\'s totals and apply the KX modifier with supporting documentation when continued treatment is medically necessary.',
			'faq_5_q'     => 'Which EMR systems do you work with?',
			'faq_5_a'     => 'We work inside the systems your practice already uses, including Raintree, Tebra, AthenaHealth, and other common therapy EMRs. There is no software migration required to start, so switching to Perform Practice Solutions does not disrupt your documentation.',
			'faq_6_q'     => 'How transparent is your billing process?',
			'faq_6_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers.',

			'cta_title'      => 'Ready to get paid for every session you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your speech therapy practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'pediatrics-billing-services' => array(
			'seo_title' => 'Pediatrics Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pediatric billing to experts in well-child visits, vaccine billing, and Medicaid plans. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Pediatrics Billing Services',
			'hero_title'      => 'Pediatric Billing That Keeps High-Volume Practices Collecting',
			'hero_lead'       => 'Pediatrics billing services manage well-child visit coding, vaccine product and administration claims, and Medicaid billing so pediatric practices collect fully on every encounter. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Pediatrics Billing Services?',
			'problem_text'         => 'Outsourcing pediatric billing gives your practice specialists who understand age-based well-child codes, vaccine administration billing with counseling components, Vaccines for Children program rules, and the Medicaid and managed care plans that dominate pediatric payer mixes. Pediatrics runs on volume with the thinnest margins in primary care, so per-visit billing losses hurt more here than anywhere.',
			'problem_text_2'       => 'Vaccines alone are a place practices bleed revenue, between missed administration units, unbilled counseling, and VFC claims coded wrong. Perform Practice Solutions bills daily, captures every component, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Pediatrics Billing Services, Done Right',
			'offer_lead'    => 'Full-service pediatrics billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for pediatric practices',
			'offer_2'       => 'Age-based well-child visit coding and preventive schedules',
			'offer_3'       => 'Vaccine product and administration billing with per-component capture',
			'offer_4'       => 'Vaccines for Children program claim compliance',
			'offer_5'       => 'Sick and well visit same-day billing with modifier 25',
			'offer_6'       => 'Medicaid, CHIP, and managed care plan expertise',
			'offer_7'       => 'Developmental and behavioral screening claim capture',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free pediatric billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, missed vaccine components, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Pediatrics Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, vaccine billing, and screening capture to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and Medicaid requirements, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New pediatrics billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your pediatrics billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Pediatric billing questions we hear most',
			'faq_1_q'     => 'What is pediatric billing?',
			'faq_1_a'     => 'Pediatric billing is the coding and claims process for children\'s healthcare, covering age-based well-child visit codes, vaccine product and administration billing, and the Medicaid and CHIP plans that make up most pediatric payer mixes. It requires capturing every component of multi-component vaccines and screening services.',
			'faq_2_q'     => 'Why should pediatric practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing pediatric billing gives your practice specialists in well-child coding, vaccine claims, and Medicaid plan rules. Because pediatrics runs on high volume with thin margins, specialized billing recovers the small per-visit losses that quietly add up to significant revenue every month.',
			'faq_3_q'     => 'How much do pediatric billing services cost?',
			'faq_3_a'     => 'Pediatric billing services typically charge a percentage of monthly collections, with high-volume practices often getting favorable rates. Because undercounted vaccine components are a near-universal revenue leak, recovered revenue usually exceeds the fee. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'How are vaccines billed to insurance?',
			'faq_4_a'     => 'Vaccine billing includes the vaccine product itself, each administration unit per component for multi-component vaccines, and counseling codes when documented, with VFC-supplied doses billed for administration only without the product charge. Undercounting administration units is the most common pediatric revenue leak.',
			'faq_5_q'     => 'Can a sick visit be billed during a well-child check?',
			'faq_5_a'     => 'Yes, when documentation supports a separately addressed problem during the preventive visit, using modifier 25 to bill both. Pediatric practices routinely give away sick visits inside checkups when this modifier is not applied or the documentation split is unclear.',
			'faq_6_q'     => 'Why do pediatric claims get denied?',
			'faq_6_a'     => 'Pediatric claims are most often denied for undercounted vaccine administration units, VFC billing errors, missing modifier 25 on combined sick and well visits, and Medicaid or CHIP plan-specific requirements not met. High visit volume means these small errors compound quickly across a panel.',

			'cta_title'      => 'Ready to collect fully on every visit?',
			'cta_text'       => 'Let\'s map a billing strategy around your pediatric practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'plastic-surgery-billing-services' => array(
			'seo_title' => 'Plastic Surgery Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your plastic surgery billing to experts in reconstructive vs cosmetic separation, medical necessity documentation, and surgical coding. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Plastic Surgery Billing Services',
			'hero_title'      => 'Plastic Surgery Billing That Keeps Reconstructive and Cosmetic Revenue Clean',
			'hero_lead'       => 'Plastic surgery billing services manage reconstructive claim coding, medical necessity documentation, and cosmetic patient-pay workflows so plastic surgery practices collect fully on both sides. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Plastic Surgery Billing Services?',
			'problem_text'         => 'Outsourcing plastic surgery billing gives your practice specialists who understand the reconstructive versus cosmetic line payers draw, the medical necessity documentation that gets breast reconstruction, panniculectomy, and post-trauma repairs covered, and the photographic evidence requirements unique to this specialty. No specialty faces more coverage disputes over whether a procedure is medical.',
			'problem_text_2'       => 'Combined cases mixing covered and cosmetic components must be split precisely to protect both the claim and the patient quote. Perform Practice Solutions bills daily, documents necessity thoroughly, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Plastic Surgery Billing Services, Done Right',
			'offer_lead'    => 'Full-service plastic surgery billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for plastic surgery practices',
			'offer_2'       => 'Reconstructive claim coding for breast reconstruction, trauma repair, and skin cancer defects',
			'offer_3'       => 'Medical necessity documentation and photographic evidence support',
			'offer_4'       => 'Prior authorization management for staged reconstructive procedures',
			'offer_5'       => 'Combined case splitting between covered and cosmetic components',
			'offer_6'       => 'Cosmetic patient-pay quoting and collection workflows',
			'offer_7'       => 'Global period tracking and staged procedure modifiers',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free plastic surgery billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, necessity documentation gaps, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Plastic Surgery Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, necessity documentation, and cosmetic-medical separation to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer coverage policies and surgical edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New plastic surgery billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your plastic surgery billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Plastic surgery billing questions we hear most',
			'faq_1_q'     => 'What is plastic surgery billing?',
			'faq_1_a'     => 'Plastic surgery billing is the coding and claims process for practices performing both reconstructive and cosmetic procedures. It requires medical necessity documentation to get reconstructive work covered by insurance and a clean separation between insurance-billed and cosmetic patient-pay services.',
			'faq_2_q'     => 'Why should plastic surgery practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing plastic surgery billing gives your practice specialists in medical necessity documentation, reconstructive coding, and cosmetic revenue separation. Because payers dispute coverage in plastic surgery more than any specialty, specialized billing wins claims that generic billers let default to patient responsibility.',
			'faq_3_q'     => 'How much do plastic surgery billing services cost?',
			'faq_3_a'     => 'Plastic surgery billing services typically charge a percentage of monthly collections on the insurance-billed portion, sometimes with separate handling for cosmetic patient-pay revenue. Because necessity documentation directly determines whether reconstructive claims get paid, specialized billing usually recovers well beyond its cost. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'Does insurance cover reconstructive plastic surgery?',
			'faq_4_a'     => 'Insurance covers reconstructive procedures like breast reconstruction, panniculectomy, and post-trauma repair when medical necessity is documented with diagnosis coding, clinical narratives, photos, and conservative treatment history. Purely cosmetic procedures are not covered regardless of documentation.',
			'faq_5_q'     => 'How is a combined cosmetic and medical procedure billed?',
			'faq_5_a'     => 'When a medical and cosmetic procedure are performed on the same operative day, the components are separated so the insurance claim reflects only the medically necessary work while the cosmetic portion follows the patient\'s separate quote. Clean separation protects the claim from denial and the practice from compliance exposure.',
			'faq_6_q'     => 'Why do plastic surgery claims get denied?',
			'faq_6_a'     => 'Plastic surgery claims are most often denied for insufficient medical necessity documentation, missing photographic evidence, and global period errors on staged reconstructive procedures. Because payers scrutinize the medical versus cosmetic distinction closely, thorough documentation matters more here than in most surgical specialties.',

			'cta_title'      => 'Ready to collect fully on both sides of your practice?',
			'cta_text'       => 'Let\'s map a billing strategy around your plastic surgery practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'podiatry-billing-services' => array(
			'seo_title' => 'Podiatry Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your podiatry billing to experts in routine foot care rules, Q modifiers, and DME claims. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Podiatry Billing Services',
			'hero_title'      => 'Podiatry Billing That Navigates the Strictest Coverage Rules in Medicine',
			'hero_lead'       => 'Podiatry billing services manage routine foot care coverage rules, Q modifier compliance, and surgical and DME claims so podiatry practices are paid for care payers try hardest to deny. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Podiatry Billing Services?',
			'problem_text'         => 'Outsourcing podiatry billing gives your practice specialists who understand Medicare\'s routine foot care exclusions, the class findings and Q7, Q8, and Q9 modifiers that make covered care payable, and the systemic condition documentation that separates reimbursed visits from write offs. Podiatry faces coverage rules stricter and stranger than any other specialty.',
			'problem_text_2'       => 'Nail debridement frequency limits, diabetic shoe program requirements, and at-risk foot care rules all demand billers who know podiatry specifically. Perform Practice Solutions bills daily, applies class findings correctly, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Podiatry Billing Services, Done Right',
			'offer_lead'    => 'Full-service podiatry billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for podiatry practices',
			'offer_2'       => 'Routine foot care billing with class findings and Q modifier compliance',
			'offer_3'       => 'Nail debridement claims within frequency limits',
			'offer_4'       => 'Diabetic foot care and at-risk patient documentation support',
			'offer_5'       => 'Diabetic shoe and DME billing with supplier requirements',
			'offer_6'       => 'Foot and ankle surgery coding with global period tracking',
			'offer_7'       => 'Wound care and ulcer debridement claims',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free podiatry billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, modifier errors, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Podiatry Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, Q modifier usage, and frequency compliance to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against Medicare foot care rules and payer edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New podiatry billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your podiatry billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Podiatry billing questions we hear most',
			'faq_1_q'     => 'What is podiatry billing?',
			'faq_1_a'     => 'Podiatry billing is the coding and claims process for foot and ankle care, covering routine foot care coverage rules, nail debridement frequency limits, diabetic shoe programs, and foot and ankle surgery. It requires applying Q modifiers and class findings documentation that Medicare requires to distinguish covered from excluded care.',
			'faq_2_q'     => 'Why should podiatry practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing podiatry billing gives your practice specialists in routine foot care rules, Q modifiers, and class findings documentation. Because podiatry faces the strictest coverage exclusions in Medicare, specialized billing turns visits generic billers write off into properly documented, paid claims.',
			'faq_3_q'     => 'How much do podiatry billing services cost?',
			'faq_3_a'     => 'Podiatry billing services typically charge a percentage of monthly collections. Because Medicare\'s routine foot care exclusions cause many practices to write off billable visits, specialized billing usually recovers well beyond its cost. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'Does Medicare cover routine foot care?',
			'faq_4_a'     => 'Medicare covers routine foot care only when the patient has a qualifying systemic condition with documented class findings, billed with the Q7, Q8, or Q9 modifier matching those findings. Without this documentation and modifier pairing, routine foot care is excluded from coverage.',
			'faq_5_q'     => 'How often can nail debridement be billed to Medicare?',
			'faq_5_a'     => 'Medicare limits covered nail debridement to set intervals, typically around every 60 days, and claims submitted before that interval deny automatically. Tracking each patient\'s service dates against the frequency rules ensures visits are scheduled and billed inside covered windows.',
			'faq_6_q'     => 'Why do podiatry claims get denied?',
			'faq_6_a'     => 'Podiatry claims are most often denied for missing or mismatched Q modifiers, insufficient systemic condition documentation, nail debridement submitted outside frequency limits, and incomplete diabetic shoe program paperwork. These strict rules make podiatry one of the more denial-prone specialties without specialized billing.',

			'cta_title'      => 'Ready to get paid for the care payers make hardest to bill?',
			'cta_text'       => 'Let\'s map a billing strategy around your podiatry practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'psychiatry-billing-services' => array(
			'seo_title' => 'Psychiatry Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your psychiatry billing to experts in E/M plus psychotherapy add-ons, telehealth claims, and med management coding. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Psychiatry Billing Services',
			'hero_title'      => 'Psychiatry Billing That Captures Med Management and Therapy Together',
			'hero_lead'       => 'Psychiatry billing services manage E/M coding with psychotherapy add-ons, telehealth claims, and behavioral health payer rules so psychiatric practices are paid for every element of care. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Psychiatry Billing Services?',
			'problem_text'         => 'Outsourcing psychiatry billing gives your practice specialists who understand E/M plus psychotherapy add-on coding, the carve-out behavioral health networks that process claims separately from medical plans, and the telehealth rules that now govern much of psychiatric care. Psychiatry claims route through payer systems that confuse even experienced medical billers.',
			'problem_text_2'       => 'Visits combining medication management with therapy pay significantly more when coded as both, yet most practices bill only one. Perform Practice Solutions bills daily, captures both components, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Practice partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Psychiatry Billing Services, Done Right',
			'offer_lead'    => 'Full-service psychiatry billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for psychiatric practices',
			'offer_2'       => 'E/M coding with psychotherapy add-on capture for combined visits',
			'offer_3'       => 'Telehealth claims with correct place of service and modifier rules',
			'offer_4'       => 'Behavioral health carve-out and managed care network navigation',
			'offer_5'       => 'Initial psychiatric evaluation and diagnostic claim coding',
			'offer_6'       => 'Injection billing for long-acting antipsychotics',
			'offer_7'       => 'Spravato and interventional psychiatry billing support',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free psychiatry billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, missed add-on codes, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Psychiatry Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, add-on code capture, and payer routing to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against behavioral health payer rules and telehealth requirements, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New psychiatry billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your psychiatry billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Psychiatry billing questions we hear most',
			'faq_1_q'     => 'What is psychiatry billing?',
			'faq_1_a'     => 'Psychiatry billing is the coding and claims process for psychiatric practices, covering E/M visits combined with psychotherapy add-on codes, telehealth claims, and behavioral health carve-out networks that route mental health claims separately from medical plans. It requires navigating payer systems distinct from the rest of medicine.',
			'faq_2_q'     => 'Why should psychiatric practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing psychiatry billing gives your practice specialists in E/M plus psychotherapy coding, behavioral health carve-outs, and telehealth rules. Psychiatric claims route through payer systems unlike the rest of medicine, and specialized billing captures combined-visit revenue most practices leave unbilled.',
			'faq_3_q'     => 'How much do psychiatry billing services cost?',
			'faq_3_a'     => 'Psychiatry billing services typically charge a percentage of monthly collections. Because combined med management and therapy visits are commonly coded as only one service, recovered add-on revenue often exceeds the fee. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'Can a psychiatrist bill for medication management and therapy in one visit?',
			'faq_4_a'     => 'Yes. When a visit includes both medication management and documented psychotherapy time, the E/M code is billed with the appropriate psychotherapy add-on code. Coding only the E/M and leaving the add-on unbilled is the most common psychiatry underbilling pattern.',
			'faq_5_q'     => 'What are behavioral health carve-outs?',
			'faq_5_a'     => 'Many insurance plans route mental health claims to a separate behavioral health network with its own claim address, authorization rules, and fee schedule, distinct from the medical plan. Claims sent to the wrong network deny or simply vanish, making carve-out verification essential before the first claim is submitted.',
			'faq_6_q'     => 'Why do psychiatry claims get denied?',
			'faq_6_a'     => 'Psychiatry claims are most often denied for missing psychotherapy add-on codes on combined visits, claims routed to the wrong behavioral health network, and incorrect telehealth place of service or modifier codes. Because psychiatric billing rules differ from standard medical billing, these errors are common without specialty-specific expertise.',

			'cta_title'      => 'Ready to get paid for every element of care you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your psychiatric practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'psychology-billing-services' => array(
			'seo_title' => 'Psychology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your psychology billing to experts in therapy session codes, testing billing by hour, and behavioral health networks. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Psychology Billing Services',
			'hero_title'      => 'Psychology Billing That Keeps Sessions and Testing Fully Paid',
			'hero_lead'       => 'Psychology billing services manage psychotherapy session coding, psychological testing claims billed by the hour, and behavioral health network rules so psychology practices collect on every service. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Psychology Billing Services?',
			'problem_text'         => 'Outsourcing psychology billing gives your practice specialists who understand time-based psychotherapy codes, the multi-hour testing and evaluation code structure, session limit tracking, and the behavioral health carve-outs that route psychology claims away from medical plans. Psychology billing looks simple until testing batteries and payer session caps enter the picture.',
			'problem_text_2'       => 'Psychological and neuropsychological testing bills across administration, scoring, and evaluation services, and undercoded batteries forfeit hours of work. Perform Practice Solutions bills daily, captures every testing hour, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Practice partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Psychology Billing Services, Done Right',
			'offer_lead'    => 'Full-service psychology billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for psychology practices',
			'offer_2'       => 'Psychotherapy session coding at accurate time-based levels',
			'offer_3'       => 'Psychological and neuropsychological testing billed across all service hours',
			'offer_4'       => 'Session limit and authorization tracking by payer',
			'offer_5'       => 'Behavioral health carve-out and network navigation',
			'offer_6'       => 'Telehealth therapy claims with correct modifiers',
			'offer_7'       => 'Group therapy and family session billing',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free psychology billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, uncaptured testing hours, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Psychology Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, testing capture, and authorization tracking to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against behavioral health payer rules and session limits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New psychology billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your psychology billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Psychology billing questions we hear most',
			'faq_1_q'     => 'What is psychology billing?',
			'faq_1_a'     => 'Psychology billing is the coding and claims process for practices providing psychotherapy and psychological testing, covering time-based session codes, multi-hour testing evaluation codes, and behavioral health carve-out networks. It requires tracking session limits and authorizations separately from standard medical claims.',
			'faq_2_q'     => 'Why should psychology practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing psychology billing gives your practice specialists in session coding, testing claims, and behavioral health networks. Psychologists lose the most revenue on testing batteries and lapsed authorizations, and specialized billing captures those hours while your clinicians stay focused on patients.',
			'faq_3_q'     => 'How much do psychology billing services cost?',
			'faq_3_a'     => 'Psychology billing services typically charge a percentage of monthly collections. Because multi-hour testing batteries are commonly undercoded as single sessions, recovered testing revenue alone often exceeds the fee. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'How is psychological testing billed?',
			'faq_4_a'     => 'Psychological testing bills across separate services for test administration, scoring, and the evaluation work of interpreting results and writing the report, each in hourly or per-unit increments rather than as a single session. Reconciling every battery against documented time ensures multi-hour evaluations are paid in full.',
			'faq_5_q'     => 'Do behavioral health plans limit the number of therapy sessions covered?',
			'faq_5_a'     => 'Yes. Many behavioral health plans cap the number of covered sessions per authorization period and require reauthorization once that limit is reached. Sessions delivered past a lapsed authorization or exceeded cap usually cannot be billed, making proactive tracking essential to protecting revenue.',
			'faq_6_q'     => 'Why do psychology claims get denied?',
			'faq_6_a'     => 'Psychology claims are most often denied for claims routed to the wrong behavioral health network, sessions delivered past authorized limits, and testing batteries billed as a single session instead of across administration, scoring, and evaluation hours. Verifying carve-out routing before the first appointment prevents the most common of these denials.',

			'cta_title'      => 'Ready to collect on every session and every testing hour?',
			'cta_text'       => 'Let\'s map a billing strategy around your psychology practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'pulmonology-billing-services' => array(
			'seo_title' => 'Pulmonology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pulmonology billing to experts in PFT coding, sleep study claims, and chronic respiratory care programs. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Pulmonology Billing Services',
			'hero_title'      => 'Pulmonology Billing That Captures Testing, Procedures, and Chronic Care',
			'hero_lead'       => 'Pulmonology billing services manage pulmonary function test coding, sleep study claims, and bronchoscopy billing so pulmonary practices collect across every service line. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Pulmonology Billing Services?',
			'problem_text'         => 'Outsourcing pulmonology billing gives your practice specialists who understand pulmonary function test bundling rules, professional versus technical components on in-office testing, sleep study coding across facility and home settings, and the bronchoscopy code family with its biopsy and lavage add-ons. Pulmonology mixes diagnostics, procedures, and chronic disease management, and each carries its own billing traps.',
			'problem_text_2'       => 'COPD and asthma panels also qualify for chronic care management and remote monitoring programs most pulmonary practices never bill. Perform Practice Solutions bills daily, captures every component, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Pulmonology Billing Services, Done Right',
			'offer_lead'    => 'Full-service pulmonology billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for pulmonology practices',
			'offer_2'       => 'Pulmonary function test coding with correct bundling and component modifiers',
			'offer_3'       => 'Sleep study billing for in-lab and home sleep testing',
			'offer_4'       => 'Bronchoscopy coding with biopsy, lavage, and navigation add-ons',
			'offer_5'       => 'Prior authorization management for biologics and advanced testing',
			'offer_6'       => 'Chronic care management and remote monitoring for COPD and asthma panels',
			'offer_7'       => 'Hospital rounding and critical care claim reconciliation',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free pulmonology billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, bundling errors, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Pulmonology Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, PFT bundling, and procedure capture to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and testing edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New pulmonology billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your pulmonology billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Pulmonology billing questions we hear most',
			'faq_1_q'     => 'What is pulmonology billing?',
			'faq_1_a'     => 'Pulmonology billing is the coding and claims process for lung and respiratory care, covering pulmonary function tests, sleep studies, bronchoscopy procedures, and chronic disease management programs for COPD and asthma. It requires expertise across in-office diagnostics, facility procedures, and recurring care management billing.',
			'faq_2_q'     => 'Why should pulmonology practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing pulmonology billing gives your practice specialists in PFT coding, sleep study claims, and bronchoscopy billing. Because pulmonology spans in-office diagnostics, hospital procedures, and chronic disease programs, specialized billing captures revenue across settings that generic billers handle inconsistently.',
			'faq_3_q'     => 'How much do pulmonology billing services cost?',
			'faq_3_a'     => 'Pulmonology billing services typically charge a percentage of monthly collections. Because chronic care management for COPD and asthma panels is commonly delivered but rarely billed, recovered program revenue often exceeds the fee. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'How are pulmonary function tests billed?',
			'faq_4_a'     => 'Pulmonary function tests are billed under bundling rules that govern which components can be billed together and which are included in comprehensive codes, plus professional and technical modifiers for in-office equipment. PFT bundling errors cause both denials and quiet underbilling.',
			'faq_5_q'     => 'Does insurance cover sleep studies?',
			'faq_5_a'     => 'Insurance generally covers in-lab polysomnography and home sleep tests when medical necessity is documented, though coverage criteria and prior authorization requirements vary significantly by payer. Interpretation versus facility service components are billed separately, each with specific coding rules.',
			'faq_6_q'     => 'Why do pulmonology claims get denied?',
			'faq_6_a'     => 'Pulmonology claims are most often denied for PFT bundling errors, missing prior authorizations on sleep studies and asthma biologics, and incomplete bronchoscopy coding when biopsy or lavage add-ons are performed alongside the base procedure. Diagnostic-heavy claims need dedicated bundling review before submission.',

			'cta_title'      => 'Ready to collect across every service line?',
			'cta_text'       => 'Let\'s map a billing strategy around your pulmonology practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'rheumatology-billing-services' => array(
			'seo_title' => 'Rheumatology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your rheumatology billing to experts in infusion coding, biologic authorizations, and complex E/M capture. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Rheumatology Billing Services',
			'hero_title'      => 'Rheumatology Billing Built for Biologics and Complex Care',
			'hero_lead'       => 'Rheumatology billing services manage infusion coding, biologic drug units, and prior authorizations so rheumatology practices are paid accurately for high-cost therapies and complex visits. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Rheumatology Billing Services?',
			'problem_text'         => 'Outsourcing rheumatology billing gives your practice specialists who understand infusion hierarchy coding, J-code unit accuracy on drugs like Remicade and Orencia, biosimilar substitution policies, and the step therapy documentation payers demand before approving biologics. In-office infusion suites carry both the highest revenue and the highest billing risk in rheumatology.',
			'problem_text_2'       => 'Complex multi-condition visits, joint injection billing, and recurring authorization renewals add more places for revenue to slip. Perform Practice Solutions bills daily, verifies every drug unit, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Rheumatology Billing Services, Done Right',
			'offer_lead'    => 'Full-service rheumatology billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for rheumatology practices',
			'offer_2'       => 'Infusion coding with correct hierarchy and time capture',
			'offer_3'       => 'J-code drug billing with accurate units and wastage documentation',
			'offer_4'       => 'Prior authorization management for biologics, including step therapy and renewals',
			'offer_5'       => 'Biosimilar policy tracking and payer-preferred product compliance',
			'offer_6'       => 'Joint and trigger point injection billing',
			'offer_7'       => 'Complex E/M capture for multi-condition patients',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free rheumatology billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, drug unit accuracy, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Rheumatology Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, drug billing accuracy, and authorization workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer drug policies and infusion rules, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, recover drug underpayments, and review performance with you every month.',

			'promo_title'   => 'New rheumatology billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your rheumatology billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Rheumatology billing questions we hear most',
			'faq_1_q'     => 'What is rheumatology billing?',
			'faq_1_a'     => 'Rheumatology billing is the coding and claims process for practices treating autoimmune and joint conditions, covering infusion administration, J-code biologic drug billing, and prior authorizations for therapies like Remicade and Orencia. It requires precise unit accuracy given the high dollar value of infused biologics.',
			'faq_2_q'     => 'Why should rheumatology practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing rheumatology billing gives your practice specialists in infusion coding, biologic authorizations, and drug unit accuracy. Because infusion revenue dominates rheumatology at high dollar values, specialized billing prevents the unit errors and authorization gaps that cost thousands per encounter.',
			'faq_3_q'     => 'How much do rheumatology billing services cost?',
			'faq_3_a'     => 'Rheumatology billing services typically charge a percentage of monthly collections, often reflecting the high value of biologic infusions. Because authorization lapses and biosimilar substitution errors are common and costly, specialized billing usually recovers well beyond its cost. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'Do biologic infusions require prior authorization?',
			'faq_4_a'     => 'Yes. Biologics like Remicade and Orencia require prior authorization before the first infusion, along with step therapy documentation showing other treatments were tried first, plus periodic renewals for ongoing therapy. Lapsed authorizations are a leading cause of denied rheumatology infusion claims.',
			'faq_5_q'     => 'What are biosimilar substitution policies in rheumatology billing?',
			'faq_5_a'     => 'Payers increasingly require specific biosimilars over reference biologic products, and billing the wrong one triggers denials on expensive infusion claims. Tracking each payer\'s preferred product list and flagging mismatches before administration prevents claims from being submitted for the wrong drug.',
			'faq_6_q'     => 'Why do rheumatology claims get denied?',
			'faq_6_a'     => 'Rheumatology claims are most often denied for J-code unit errors, lapsed biologic authorizations, biosimilar policy mismatches, and incorrect infusion hierarchy coding. Because infusion revenue carries such high dollar values, these errors have outsized financial impact compared to visit-based specialties.',

			'cta_title'      => 'Ready to get paid accurately for every infusion?',
			'cta_text'       => 'Let\'s map a billing strategy around your rheumatology practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'telemedicine-billing-services' => array(
			'seo_title' => 'Telemedicine Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your telemedicine billing to experts in place of service codes, telehealth modifiers, and multi-state payer rules. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Telemedicine Billing Services',
			'hero_title'      => 'Telemedicine Billing That Keeps Up With Constantly Changing Rules',
			'hero_lead'       => 'Telemedicine billing services manage place of service codes, telehealth modifiers, and payer-by-payer virtual care policies so telehealth practices collect on every visit. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Telemedicine Billing Services?',
			'problem_text'         => 'Outsourcing telemedicine billing gives your practice specialists who track the telehealth rules that change more often than any other area of billing, including place of service codes, modifier 95 requirements, audio-only visit policies, and the coverage differences between Medicare, Medicaid, and every commercial plan. What paid last quarter can deny this quarter.',
			'problem_text_2'       => 'Multi-state practices add licensing and payer enrollment complexity that in-house billers rarely manage well. Perform Practice Solutions bills daily, tracks policy changes as they happen, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Practice partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Telemedicine Billing Services, Done Right',
			'offer_lead'    => 'Full-service telemedicine billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for telehealth practices',
			'offer_2'       => 'Place of service and modifier compliance for every payer',
			'offer_3'       => 'Audio-only and audio-video visit coding rules',
			'offer_4'       => 'Multi-state payer enrollment and credentialing support',
			'offer_5'       => 'Telehealth policy monitoring across Medicare, Medicaid, and commercial plans',
			'offer_6'       => 'Remote patient monitoring and virtual check-in capture',
			'offer_7'       => 'Eligibility verification before every virtual visit',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free telemedicine billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, modifier errors, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Telemedicine Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, modifier usage, and payer policies to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against each payer\'s current telehealth rules, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New telemedicine billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your telemedicine billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Telemedicine billing questions we hear most',
			'faq_1_q'     => 'What is telemedicine billing?',
			'faq_1_a'     => 'Telemedicine billing is the coding and claims process for virtual care visits, requiring the correct place of service code and telehealth modifier combination for each payer. It is one of the fastest-changing areas of medical billing since coverage policies for virtual care continue to evolve by payer, state, and service type.',
			'faq_2_q'     => 'Why should telehealth practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing telemedicine billing gives your practice specialists who track telehealth policy changes across every payer as they happen. Because virtual care rules shift constantly, practices billing on last quarter\'s rules accumulate denials, and specialized billing keeps claims aligned with current policy.',
			'faq_3_q'     => 'How much do telemedicine billing services cost?',
			'faq_3_a'     => 'Telemedicine billing services typically charge a percentage of monthly collections. Because telehealth policy changes frequently trigger new denial patterns that go unnoticed until billing is reviewed, specialized billing usually recovers well beyond its cost. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'What place of service code is used for telehealth visits?',
			'faq_4_a'     => 'Telehealth claims require the place of service code and modifier combination each payer currently accepts, and those combinations differ between Medicare, Medicaid, and commercial plans, and change periodically. Applying the correct pairing per payer per claim is where most telemedicine denials originate.',
			'faq_5_q'     => 'Are audio-only telehealth visits billable?',
			'faq_5_a'     => 'Coverage for audio-only visits varies by payer, state, and service type, and these policies continue to change over time. Some payers reimburse audio-only care at full rates, others at reduced rates, and some do not cover it at all, making payer-specific tracking essential before the visit.',
			'faq_6_q'     => 'Why do telemedicine claims get denied?',
			'faq_6_a'     => 'Telemedicine claims are most often denied for incorrect place of service codes, missing or wrong telehealth modifiers, and audio-only visits billed to payers that do not cover that format. Because these rules change frequently, claims billed on outdated policy information are a common denial source.',

			'cta_title'      => 'Ready to collect on every virtual visit?',
			'cta_text'       => 'Let\'s map a billing strategy around your telehealth practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'urology-billing-services' => array(
			'seo_title' => 'Urology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your urology billing to experts in cystoscopy coding, in-office procedures, and surgical global periods. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Urology Billing Services',
			'hero_title'      => 'Urology Billing That Captures Office Procedures and Surgery Alike',
			'hero_lead'       => 'Urology billing services manage cystoscopy coding, in-office procedure claims, and surgical global periods so urology practices collect fully across clinic and OR. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Urology Billing Services?',
			'problem_text'         => 'Outsourcing urology billing gives your practice specialists who understand the cystoscopy code family with its biopsy and stent variations, in-office procedure billing for urodynamics and prostate biopsies, and the injection and drug claims behind bladder instillations and hormone therapy. Urology is one of the most procedure-dense office specialties, and each procedure carries its own coding rules.',
			'problem_text_2'       => 'Surgical cases add global periods, multiple procedure logic, and authorization requirements on top. Perform Practice Solutions bills daily, codes every procedure completely, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Front desk partnership',
			'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Urology Billing Services, Done Right',
			'offer_lead'    => 'Full-service urology billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for urology practices',
			'offer_2'       => 'Cystoscopy coding across diagnostic, biopsy, and stent procedures',
			'offer_3'       => 'In-office procedure billing for urodynamics, prostate biopsy, and vasectomy',
			'offer_4'       => 'Hormone therapy injection and drug unit billing, including Lupron',
			'offer_5'       => 'Bladder instillation and BCG treatment claims',
			'offer_6'       => 'Surgical coding with global period and multiple procedure compliance',
			'offer_7'       => 'Prior authorization management for surgery and advanced imaging',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free urology billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, procedure capture, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Urology Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, procedure coding patterns, and drug billing to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and procedure edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New urology billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your urology billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Urology billing questions we hear most',
			'faq_1_q'     => 'What is urology billing?',
			'faq_1_a'     => 'Urology billing is the coding and claims process for urology practices, covering cystoscopy procedures, in-office diagnostics like urodynamics, hormone therapy injections, and surgical global periods. It requires precise procedure-specific coding since urology performs more office procedures than almost any specialty.',
			'faq_2_q'     => 'Why should urology practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing urology billing gives your practice specialists in cystoscopy coding, in-office procedures, and surgical global periods. Because urology performs more office procedures than almost any specialty, specialized billing captures procedure revenue that visit-focused billers routinely undercode or miss.',
			'faq_3_q'     => 'How much do urology billing services cost?',
			'faq_3_a'     => 'Urology billing services typically charge a percentage of monthly collections. Because cystoscopy procedures are commonly defaulted to the basic diagnostic code even when interventions were performed, recovered revenue often exceeds the fee. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'How is cystoscopy billed?',
			'faq_4_a'     => 'Cystoscopy is billed using the specific code matching what was performed, whether diagnostic only, with biopsy, with fulguration, or with stent placement, since each version pays differently. Defaulting to the basic diagnostic code when interventions were performed is a common urology underpayment.',
			'faq_5_q'     => 'Are hormone therapy injections like Lupron billable separately?',
			'faq_5_a'     => 'Yes. Hormone therapy injections are billed with the drug\'s J-code units and the administration service billed separately, subject to prior authorization and frequency rules. Unit accuracy matters on every claim since these are recurring, high-dollar injections.',
			'faq_6_q'     => 'Why do urology claims get denied?',
			'faq_6_a'     => 'Urology claims are most often denied for cystoscopy procedures billed at the wrong code level, incomplete urodynamic study component billing, and missing prior authorizations on surgery or advanced imaging. Because urology bills so many procedures per patient, small coding errors compound quickly.',

			'cta_title'      => 'Ready to collect fully on every procedure?',
			'cta_text'       => 'Let\'s map a billing strategy around your urology practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'wound-care-billing-services' => array(
			'seo_title' => 'Wound Care Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your wound care billing to experts in debridement coding, skin substitute claims, and measurement documentation. Get a free billing service analysis today.',

			'hero_eyebrow'    => 'Wound Care Billing Services',
			'hero_title'      => 'Wound Care Billing That Documents, Measures, and Gets Paid',
			'hero_lead'       => 'Wound care billing services manage debridement coding by depth and size, skin substitute claims, and the measurement documentation payers audit so wound care practices collect on every treatment. Perform Practice Solutions submits claims daily and gives you full visibility into every claim from submission to payment.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'      => 'Why Outsource',
			'problem_title'        => 'Why Outsource Wound Care Billing Services?',
			'problem_text'         => 'Outsourcing wound care billing gives your practice specialists who understand debridement coding by tissue depth and surface area, the add-on codes for wounds beyond the first 20 square centimeters, and the skin substitute product billing that payers audit more aggressively every year. Wound care claims live and die on measurement documentation.',
			'problem_text_2'       => 'Recurring visits, NPWT claims, and coverage policies that vary by wound type and product make this one of the most compliance-sensitive specialties to bill. Perform Practice Solutions bills daily, reconciles every claim against documented measurements, and shows you where every dollar stands.',
			'problem_note'         => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title' => 'Transparent billing',
			'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title' => 'Documentation partnership',
			'problem_card_2_text'  => 'We coach your team so measurement and photo documentation supports every claim.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'Wound Care Billing Services, Done Right',
			'offer_lead'    => 'Full-service wound care billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for wound care practices',
			'offer_2'       => 'Debridement coding by tissue depth with surface area add-on capture',
			'offer_3'       => 'Skin substitute and graft product billing with unit and wastage documentation',
			'offer_4'       => 'Negative pressure wound therapy claims',
			'offer_5'       => 'Measurement and photo documentation coaching for audit readiness',
			'offer_6'       => 'Coverage policy compliance by wound type and product',
			'offer_7'       => 'Recurring visit and treatment series management',
			'offer_8'       => 'Monthly report reviews and quarterly deep analysis',

			'analysis_eyebrow' => 'Free Billing Analysis',
			'analysis_title'   => 'Free wound care billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free billing service analysis and get an honest look at your denials, documentation gaps, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Billing Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'How Our Wound Care Billing Services Work',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, debridement coding, and measurement documentation to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer coverage policies and coding edits, then submitted every day.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New wound care billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your wound care billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Wound care billing questions we hear most',
			'faq_1_q'     => 'What is wound care billing?',
			'faq_1_a'     => 'Wound care billing is the coding and claims process for chronic wound treatment, covering debridement coding by tissue depth and surface area, skin substitute product billing, and negative pressure wound therapy claims. It requires measurement and photo documentation that supports every claim against increasingly aggressive payer audits.',
			'faq_2_q'     => 'Why should wound care practices outsource their billing?',
			'faq_2_a'     => 'Outsourcing wound care billing gives your practice specialists in debridement coding, skin substitute claims, and audit-ready documentation. Because wound care faces some of the heaviest payer scrutiny in medicine, specialized billing protects revenue that generic billers lose to denials and recoupments.',
			'faq_3_q'     => 'How much do wound care billing services cost?',
			'faq_3_a'     => 'Wound care billing services typically charge a percentage of monthly collections. Because measurement documentation gaps are a leading cause of both denials and post-payment recoupments, specialized billing usually recovers well beyond its cost while reducing audit risk. Request a free billing analysis to see what your practice could recover.',
			'faq_4_q'     => 'How is wound debridement coded?',
			'faq_4_a'     => 'Debridement codes are selected based on the deepest tissue removed and the wound surface area, with add-on codes applied for each additional 20 square centimeters treated. Mismatches between documented depth and measurements versus the billed code are the top trigger for wound care denials and audits.',
			'faq_5_q'     => 'Are skin substitute products billable separately from the application procedure?',
			'faq_5_a'     => 'Yes. Skin substitute and graft products are billed separately from the application procedure, with accurate units, wastage documentation, and codes matched to wound size and location. These products carry high costs and aggressive payer coverage policies, so every claim needs product and size verification.',
			'faq_6_q'     => 'Why do wound care claims get denied or recouped?',
			'faq_6_a'     => 'Wound care claims are most often denied or later recouped for measurement documentation that does not match the billed depth or surface area, missing progress photos, and skin substitute claims lacking proper wastage documentation. Because wound care faces frequent payer audits, clean documentation on the front end is the only reliable protection.',

			'cta_title'      => 'Ready to get paid for every treatment you document?',
			'cta_text'       => 'Let\'s map a billing strategy around your wound care practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
	);

	if ( isset( $catalog[ $slug ] ) ) {
		return $catalog[ $slug ];
	}

	// Generic fallback for other specialty pages using the same template.
	$title = is_singular() ? get_the_title() : 'Specialty Billing Services';
	return array(
		'seo_title'       => $title . ' | Perform Practice Solutions',
		'seo_desc'        => 'Expert ' . strtolower( $title ) . ' from Perform Practice Solutions. Reduce denials, speed reimbursement, and protect practice revenue.',
		'hero_eyebrow'    => $title,
		'hero_title'      => 'Billing support built around how your practice runs',
		'hero_lead'       => 'Perform Practice Solutions delivers specialized billing support to reduce denials, improve collections, and give your team more time for patients.',
		'hero_cta'        => 'Book a Strategy Session',
		'hero_cta_url'    => '#contact',
		'hero_stat'       => '3 weeks',
		'hero_stat_label' => 'average bill-to-paid time',
		'problem_eyebrow' => 'Who We Help',
		'problem_title'   => 'Unhappy with your current billing service?',
		'problem_text'    => 'If you’re unclear where your dollars are — or tired of slow reimbursements — our transparent billing platform and specialty-trained team can help.',
		'problem_note'    => 'We’re on your team — and we want you to get paid.',
		'problem_card_1_title' => 'Transparent billing',
		'problem_card_1_text'  => 'See where every dollar stands — claims, A/R, and patient balances.',
		'problem_card_2_title' => 'Front-desk partnership',
		'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',
		'offer_eyebrow'   => 'What You Get',
		'offer_title'     => 'Billing done the way it’s meant to be done',
		'offer_lead'      => 'End-to-end revenue cycle support with clear reporting and daily follow-through.',
		'offer_1'         => 'Full Revenue Cycle Management',
		'offer_2'         => 'AI-powered billing and collections support',
		'offer_3'         => 'Daily billing and front-desk collaboration',
		'offer_4'         => 'Denial prevention and best-practices coaching',
		'offer_5'         => 'Chat support for your front desk',
		'offer_6'         => 'Monthly and quarterly performance reviews',
		'offer_7'         => 'EMR integration with systems you already use',
		'offer_8'         => 'Insurance and patient-balance management',
		'analysis_eyebrow'=> 'Free Analysis',
		'analysis_title'  => 'Free billing service analysis',
		'analysis_text'   => 'Request an honest look at your current billing performance, denials, and recoverable revenue.',
		'analysis_cta'    => 'Get Your Free Analysis',
		'analysis_cta_url'=> '#contact',
		'process_eyebrow' => 'How It Works',
		'process_title'   => 'A clearer path from visit to payment',
		'process_1_title' => 'Connect & audit',
		'process_1_text'  => 'We review claims, denials, and workflows to find the leaks.',
		'process_2_title' => 'Bill daily with precision',
		'process_2_text'  => 'Claims are scrubbed and submitted daily for faster cash flow.',
		'process_3_title' => 'Recover & report',
		'process_3_text'  => 'We pursue unpaid claims and keep you informed every month.',
		'promo_title'     => 'New billing clients',
		'promo_text'      => 'Ask about onboarding offers and Front Desk 101 coaching when you switch to PPS.',
		'promo_cta'       => 'Talk to Our Team',
		'promo_cta_url'   => '#contact',
		'faq_eyebrow'     => 'FAQs',
		'faq_title'       => 'Billing questions we hear most',
		'faq_1_q'         => 'What billing challenges are common in specialty practices?',
		'faq_1_a'         => 'Claim denials, coding errors, slow payments, and patient billing confusion are among the most common issues.',
		'faq_2_q'         => 'How do you reduce claim denials?',
		'faq_2_a'         => 'We use precise coding, follow payer rules, and review claims before submission.',
		'faq_3_q'         => 'What software do you use?',
		'faq_3_a'         => 'We use proven billing platforms that work with most EMR and practice management systems.',
		'faq_4_q'         => 'How will I receive updates?',
		'faq_4_a'         => 'You’ll get clear reporting on claim status, payments, and revenue performance.',
		'faq_5_q'         => 'Do you handle patient payments too?',
		'faq_5_a'         => 'Yes — insurance claims, patient payments, and collections follow-up.',
		'faq_6_q'         => 'Which EMR systems do you work with?',
		'faq_6_a'         => 'We adapt to the EMR and clearinghouse systems your practice already uses, so there is no disruptive software migration required.',
		'cta_title'       => 'Ready to improve collections and reduce billing stress?',
		'cta_text'        => 'Book a strategy session and we’ll map the right billing path for your practice.',
		'cta_button'      => 'Book a Strategy Session',
		'cta_button_url'  => '#contact',
	);
}

/**
 * Current service page slug.
 *
 * @return string
 */
function pps_current_service_slug() {
	if ( is_singular( 'page' ) ) {
		return (string) get_post_field( 'post_name', get_queried_object_id() );
	}
	return 'physical-therapy-billing-services';
}

/**
 * Service page content helper (Customizer-first, slug-based).
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_service( $key, $default = '' ) {
	$slug     = pps_current_service_slug();
	$mod_key  = 'pps_svc_' . str_replace( '-', '_', $slug ) . '_' . $key;
	$defaults = pps_service_defaults_for( $slug );

	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}

	return (string) get_theme_mod( $mod_key, $default );
}

/**
 * Whether current page uses specialty service template.
 *
 * @return bool
 */
function pps_is_specialty_service_page() {
	if ( ! is_singular( 'page' ) ) {
		return false;
	}
	$template = get_page_template_slug( get_queried_object_id() );
	return 'page-templates/specialty-service.php' === $template;
}

/**
 * Register Customizer settings for service pages.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_service_customize_register( $wp_customize ) {
	$wp_customize->add_panel(
		'pps_panel_services',
		array(
			'title'       => __( 'PPS — Service Pages', 'perform-practice' ),
			'description' => __( 'Editable content for specialty service page templates. Assign the “Specialty Service Page” template to a page, then edit its copy here (for registered specialties).', 'perform-practice' ),
			'priority'    => 32,
		)
	);

	foreach ( pps_service_customizer_slugs() as $slug => $label ) {
		$section_id = 'pps_section_svc_' . str_replace( '-', '_', $slug );
		$wp_customize->add_section(
			$section_id,
			array(
				'title' => $label,
				'panel' => 'pps_panel_services',
			)
		);

		$defaults = pps_service_defaults_for( $slug );
		foreach ( $defaults as $key => $default ) {
			$setting_id = 'pps_svc_' . str_replace( '-', '_', $slug ) . '_' . $key;
			$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_desc|_a)$/', $key ) || 'seo_desc' === $key;
			$is_url      = (bool) preg_match( '/_url$/', $key );

			$wp_customize->add_setting(
				$setting_id,
				array(
					'default'           => $default,
					'sanitize_callback' => $is_url ? 'esc_url_raw' : ( $is_textarea ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
				)
			);
			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => ucwords( str_replace( '_', ' ', $key ) ),
					'section' => $section_id,
					'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_service_customize_register', 20 );

/**
 * Prefer service Customizer SEO title when on specialty template.
 *
 * @param string $title Title.
 * @return string
 */
function pps_service_document_title( $title ) {
	if ( ! pps_is_specialty_service_page() ) {
		return $title;
	}
	$custom = page_service( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_service_document_title', 25 );

/**
 * Output service meta description (Customizer / defaults).
 * Runs before generic page meta so specialty pages get the right description once.
 */
function pps_service_meta_description() {
	if ( ! pps_is_specialty_service_page() ) {
		return;
	}
	$desc = page_service( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_service_meta_description', 1 );

/**
 * Skip duplicate meta description on specialty service pages.
 *
 * @return void
 */
function pps_skip_generic_seo_meta_on_service_pages() {
	if ( pps_is_specialty_service_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_skip_generic_seo_meta_on_service_pages' );

/**
 * Assign specialty template + SEO to all registered specialty billing pages.
 */
function pps_assign_specialty_service_templates() {
	$content_version = '1.3.7';
	if ( get_option( 'pps_specialty_service_pages_version' ) === $content_version ) {
		return;
	}

	$title_map = array(
		'physical-therapy-billing-services'     => 'Physical Therapy Billing Services',
		'chiropractic-billing-services'         => 'Chiropractic Billing Services',
		'pain-management-billing-services'      => 'Pain Management Billing Services',
		'orthopedic-medical-billing-services'   => 'Orthopedic Medical Billing Services',
		'occupational-therapy-billing-services' => 'Occupational Therapy Billing Services',
		'speech-therapy-billing-services'       => 'Speech Therapy Billing Services',
		'pediatrics-billing-services'           => 'Pediatrics Billing Services',
		'plastic-surgery-billing-services'      => 'Plastic Surgery Billing Services',
		'podiatry-billing-services'             => 'Podiatry Billing Services',
		'psychiatry-billing-services'           => 'Psychiatry Billing Services',
		'psychology-billing-services'           => 'Psychology Billing Services',
		'pulmonology-billing-services'          => 'Pulmonology Billing Services',
		'rheumatology-billing-services'         => 'Rheumatology Billing Services',
		'telemedicine-billing-services'         => 'Telemedicine Billing Services',
		'urology-billing-services'              => 'Urology Billing Services',
		'wound-care-billing-services'           => 'Wound Care Billing Services',
	);

	$clear_customizer_slugs = array(
		'wound-care-billing-services',
	);

	foreach ( array_keys( pps_service_customizer_slugs() ) as $slug ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			$page_id = wp_insert_post(
				array(
					'post_title'   => isset( $title_map[ $slug ] ) ? $title_map[ $slug ] : ucwords( str_replace( '-', ' ', $slug ) ),
					'post_name'    => $slug,
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_content' => '',
				)
			);
			if ( ! $page_id || is_wp_error( $page_id ) ) {
				continue;
			}
			$page = get_post( $page_id );
		}

		$defaults = pps_service_defaults_for( $slug );
		update_post_meta( $page->ID, '_wp_page_template', 'page-templates/specialty-service.php' );
		update_post_meta( $page->ID, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
		update_post_meta( $page->ID, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

		// Clear Customizer overrides when content pack updates for this specialty.
		if ( in_array( $slug, $clear_customizer_slugs, true ) ) {
			$prefix = 'pps_svc_' . str_replace( '-', '_', $slug ) . '_';
			$mods   = get_theme_mods();
			if ( is_array( $mods ) ) {
				foreach ( array_keys( $mods ) as $key ) {
					if ( 0 === strpos( $key, $prefix ) ) {
						remove_theme_mod( $key );
					}
				}
			}
		}
	}

	update_option( 'pps_specialty_service_pages_version', $content_version );
	update_option( 'pps_pt_service_template_version', '1.3.7' );
}
add_action( 'after_setup_theme', 'pps_assign_specialty_service_templates', 40 );
