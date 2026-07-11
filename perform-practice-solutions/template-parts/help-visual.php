<?php
/**
 * Need Help visual: clinician photo + provider management UI overlays.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="help-visual" aria-hidden="true">
	<div class="help-visual__orb"></div>
	<div class="help-visual__photo">
		<img
			src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=700&q=80"
			alt=""
			width="420"
			height="520"
			loading="lazy"
		>
	</div>

	<div class="help-ui help-ui--provider">
		<div class="help-ui__top">
			<span class="help-ui__avatar">JS</span>
			<div>
				<strong>Jody Smith</strong>
				<small>Provider Management</small>
			</div>
			<span class="help-ui__status">Active</span>
		</div>
		<div class="help-ui__rows">
			<div><span>NPI</span><b>1******892</b></div>
			<div><span>Specialty</span><b>Physical Therapy</b></div>
			<div><span>Networks</span><b>14 payers</b></div>
		</div>
	</div>

	<div class="help-ui help-ui--psv">
		<strong>PSV Results</strong>
		<svg class="help-psv-donut" viewBox="0 0 42 42">
			<circle cx="21" cy="21" r="15" fill="none" stroke="#e8eef3" stroke-width="5"/>
			<circle cx="21" cy="21" r="15" fill="none" stroke="#0e7c86" stroke-width="5" stroke-dasharray="70 100" stroke-linecap="round" transform="rotate(-90 21 21)"/>
			<circle cx="21" cy="21" r="15" fill="none" stroke="#f59e0b" stroke-width="5" stroke-dasharray="18 100" stroke-dashoffset="-70" stroke-linecap="round" transform="rotate(-90 21 21)"/>
		</svg>
		<ul>
			<li><i></i> Cleared 82%</li>
			<li><i class="is-amber"></i> Review 18%</li>
		</ul>
	</div>
</div>
