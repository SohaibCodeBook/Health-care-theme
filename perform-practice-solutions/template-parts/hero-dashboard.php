<?php
/**
 * Hero product dashboard visual.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="hero-dash" aria-hidden="true">
	<div class="hero-dash__glow"></div>

	<div class="hero-dash__panel hero-dash__panel--main">
		<div class="hero-dash__chrome">
			<span></span><span></span><span></span>
			<strong>PPS Revenue Command</strong>
		</div>
		<div class="hero-dash__kpis">
			<div class="hero-kpi">
				<span>Net collections</span>
				<strong>$248.6k</strong>
				<em class="is-up">▲ 12.8%</em>
			</div>
			<div class="hero-kpi">
				<span>Clean claim rate</span>
				<strong>96.2%</strong>
				<em class="is-up">▲ 3.1%</em>
			</div>
			<div class="hero-kpi">
				<span>Days in A/R</span>
				<strong>28</strong>
				<em class="is-down">▼ 6 days</em>
			</div>
		</div>
		<svg class="hero-dash__spark" viewBox="0 0 480 120" preserveAspectRatio="none">
			<defs>
				<linearGradient id="heroFill" x1="0" y1="0" x2="0" y2="1">
					<stop offset="0%" stop-color="#2dd4bf" stop-opacity="0.45"/>
					<stop offset="100%" stop-color="#2dd4bf" stop-opacity="0"/>
				</linearGradient>
			</defs>
			<path d="M0,90 C40,85 70,70 110,72 C150,74 170,40 220,38 C270,36 300,55 340,30 C380,10 420,25 480,12 L480,120 L0,120 Z" fill="url(#heroFill)"/>
			<path d="M0,90 C40,85 70,70 110,72 C150,74 170,40 220,38 C270,36 300,55 340,30 C380,10 420,25 480,12" fill="none" stroke="#2dd4bf" stroke-width="3"/>
		</svg>
	</div>

	<div class="hero-dash__float hero-dash__float--denial">
		<div class="hero-mini-head">
			<i class="fa-solid fa-robot"></i>
			<span>AI denial triage</span>
		</div>
		<p>14 claims auto-routed</p>
		<div class="hero-mini-bar"><i style="width:72%"></i></div>
	</div>

	<div class="hero-dash__float hero-dash__float--elig">
		<div class="hero-mini-head">
			<i class="fa-solid fa-user-check"></i>
			<span>Eligibility</span>
		</div>
		<strong>Verified</strong>
		<p>Next 12 appointments</p>
	</div>

	<div class="hero-dash__float hero-dash__float--photo">
		<img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=400&q=80" alt="" width="160" height="200" loading="eager">
	</div>
</div>
