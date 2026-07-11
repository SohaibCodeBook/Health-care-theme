<?php
/**
 * Floating revenue / analytics dashboard collage.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="dash-collage" aria-hidden="true">
	<div class="dash-card dash-card--chart dash-card--float-1">
		<div class="dash-card__head">
			<span class="dash-card__title">Collections trend</span>
			<span class="dash-card__badge dash-card__badge--up">+18.4%</span>
		</div>
		<svg class="dash-line-chart" viewBox="0 0 360 140" preserveAspectRatio="none">
			<defs>
				<linearGradient id="ppsAreaA" x1="0" y1="0" x2="0" y2="1">
					<stop offset="0%" stop-color="#0e7c86" stop-opacity="0.35"/>
					<stop offset="100%" stop-color="#0e7c86" stop-opacity="0"/>
				</linearGradient>
				<linearGradient id="ppsAreaB" x1="0" y1="0" x2="0" y2="1">
					<stop offset="0%" stop-color="#2563eb" stop-opacity="0.25"/>
					<stop offset="100%" stop-color="#2563eb" stop-opacity="0"/>
				</linearGradient>
			</defs>
			<path d="M0,110 C40,100 70,80 110,85 C150,90 170,50 210,45 C250,40 280,60 320,35 L360,25 L360,140 L0,140 Z" fill="url(#ppsAreaA)"/>
			<path d="M0,120 C50,115 80,95 120,100 C160,105 190,70 230,68 C270,66 300,80 360,55 L360,140 L0,140 Z" fill="url(#ppsAreaB)"/>
			<path d="M0,110 C40,100 70,80 110,85 C150,90 170,50 210,45 C250,40 280,60 320,35 L360,25" fill="none" stroke="#0e7c86" stroke-width="3" stroke-linecap="round"/>
			<path d="M0,120 C50,115 80,95 120,100 C160,105 190,70 230,68 C270,66 300,80 360,55" fill="none" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
			<path d="M0,95 C60,90 90,70 140,75 C190,80 220,40 270,48 C310,54 330,30 360,22" fill="none" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 4"/>
		</svg>
		<div class="dash-card__months">
			<span>Jan</span><span>Mar</span><span>May</span><span>Jul</span><span>Sep</span><span>Nov</span>
		</div>
	</div>

	<div class="dash-card dash-card--bars dash-card--float-2">
		<div class="dash-card__head">
			<span class="dash-card__title">Payer mix</span>
		</div>
		<div class="dash-bars">
			<div class="dash-bar"><span>Medicare</span><div class="dash-bar__track"><i style="--w:78%"></i></div></div>
			<div class="dash-bar"><span>Commercial</span><div class="dash-bar__track"><i class="is-accent" style="--w:64%"></i></div></div>
			<div class="dash-bar"><span>Medicaid</span><div class="dash-bar__track"><i class="is-tech" style="--w:42%"></i></div></div>
			<div class="dash-bar"><span>Self-pay</span><div class="dash-bar__track"><i class="is-warm" style="--w:28%"></i></div></div>
		</div>
	</div>

	<div class="dash-card dash-card--donut dash-card--float-3">
		<div class="dash-card__head">
			<span class="dash-card__title">Claim status</span>
		</div>
		<div class="dash-donut-row">
			<svg class="dash-donut" viewBox="0 0 42 42">
				<circle cx="21" cy="21" r="15.5" fill="none" stroke="#e8eef3" stroke-width="5"/>
				<circle cx="21" cy="21" r="15.5" fill="none" stroke="#0e7c86" stroke-width="5" stroke-dasharray="55 100" stroke-linecap="round" transform="rotate(-90 21 21)"/>
				<circle cx="21" cy="21" r="15.5" fill="none" stroke="#2563eb" stroke-width="5" stroke-dasharray="22 100" stroke-dashoffset="-55" stroke-linecap="round" transform="rotate(-90 21 21)"/>
				<circle cx="21" cy="21" r="15.5" fill="none" stroke="#f59e0b" stroke-width="5" stroke-dasharray="14 100" stroke-dashoffset="-77" stroke-linecap="round" transform="rotate(-90 21 21)"/>
			</svg>
			<ul class="dash-legend">
				<li><i class="is-teal"></i> Paid</li>
				<li><i class="is-blue"></i> Pending</li>
				<li><i class="is-amber"></i> Denied</li>
			</ul>
		</div>
	</div>

	<div class="dash-metric dash-metric--a dash-card--float-4">
		<div class="dash-metric__icon"><i class="fa-solid fa-shield-halved"></i></div>
		<div>
			<p class="dash-metric__label">Clean claim performance</p>
			<p class="dash-metric__value">98% <span>average clean claim rate</span></p>
		</div>
		<span class="dash-metric__cta">See results</span>
	</div>

	<div class="dash-metric dash-metric--b dash-card--float-5">
		<div class="dash-metric__icon is-warm"><i class="fa-solid fa-chart-line"></i></div>
		<div>
			<p class="dash-metric__label">Billing cycle speed</p>
			<p class="dash-metric__value">~3 wks <span>vs 45–60 day industry avg</span></p>
		</div>
		<span class="dash-metric__cta">Learn more</span>
	</div>
</div>
