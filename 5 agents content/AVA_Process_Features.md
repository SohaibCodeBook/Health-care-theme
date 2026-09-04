AVA — Account and Voice Assistant
Process Features Speciﬁcation (v1)
AVA handles inbound patient calls for account and billing matters: FAQs, balance/account information, and routing to the correct biller. Below are the core process features required for launch, followed by a set of differentiated features designed to go beyond what current competitors (Retell, Assort Health, Hyro, Inﬁnitus, PolyAI, Prosper AI, Parloa, Sierra, etc.) publicly offer.


Part 1 — Core Process Features
	•	Call Intake & Identity Veriﬁcation
Answers inbound calls within 1 second, 24/7, no hold queue.
Veriﬁes patient identity via two-factor match (e.g., DOB + last name, or account/MRN + phone number on ﬁle) before disclosing any account or balance information (HIPAA-aligned identity gate).
Detects whether the caller is the patient, a guarantor/responsible party, or an unauthorized third party, and adjusts disclosure accordingly (e.g., refuses balance detail to unveriﬁed callers, offers to take a callback number instead).
Graceful fallback to human staff if identity cannot be veriﬁed after two attempts.
	•	FAQ Handling
Answers practice-level FAQs: hours, locations, accepted insurance plans, payment methods accepted, billing cycle timing, statement mailing schedule, portal login help.
Answers billing-policy FAQs: what a "balance" line item means, difference between copay/coinsurance/deductible, what happens on a missed payment, payment plan availability.
Escalates clinical questions (symptoms, medication, diagnosis) immediately to a human or nurse line — AVA never answers clinical content.
Maintains a practice-speciﬁc knowledge base per client (each practice has its own FAQ set, tone, and policies) rather than one generic script.
	•	Account & Balance Information
Looks up and reads back current balance, itemized by date of service or claim.
Explains balance composition (charges, insurance payments/adjustments, patient responsibility) in plain language.
Conﬁrms last payment received (amount and date) and next statement date.
Checks and reports insurance eligibility/coverage status on ﬁle.

Offers to text or email a copy of the balance summary or itemized statement (no full account numbers spoken aloud).
Can take a payment over the phone via secure, PCI-compliant tokenized capture (DTMF/keypad entry so card numbers never enter the voice/transcript stream), or send a secure payment link.
	•	Intelligent Transfer to the Correct Biller
Classiﬁes the call by intent and complexity (simple balance inquiry vs. dispute vs. payment plan negotiation vs. insurance appeal vs. collections question) and routes to the speciﬁc biller or billing team assigned to that account/provider/location — not a generic queue.
Performs a warm transfer: briefs the receiving biller with a spoken or on-screen summary (who's calling, veriﬁed identity, account status, reason for transfer, what's already been discussed) so the patient never has to repeat themselves.
If the correct biller is unavailable, offers a scheduled callback at a speciﬁc time rather than a cold voicemail, and logs the callback commitment to the biller's task queue.
Respects per-practice routing rules (e.g., self-pay questions → billing team A; insurance disputes → billing team B; balances over a certain threshold → senior biller).
	•	Documentation & Compliance
Auto-generates a structured call summary and writes it back to the PM/EMR system (e.g., Tebra) and/or billing system after every call.
Full call recording and transcript retained per practice's compliance policy, with PHI-aware redaction in exportable logs.
Flags calls that required escalation, disputes, or promises made (e.g., "biller said balance would be adjusted") so nothing is lost between AVA and staff.


Part 2 — Differentiated Features (not commonly available from
competitors)
Most competitor voice agents stop at "answer FAQ → look up balance → transfer or take payment." The gaps below are where AVA can differentiate, based on current market gaps in late-2025/2026 healthcare voice AI offerings.

Explain-the-Bill Mode — Rather than just reading a balance, AVA can walk a confused patient line-by-line through why they owe what they owe (EOB translation into plain English), something most billing bots skip because it requires reasoning over claims data, not just retrieval.

Emotion- and Frustration-Aware Escalation — AVA detects rising frustration, confusion loops, or distress in the caller's voice/tone and proactively offers a human handoff before the patient has to ask — most competitors only escalate on explicit keyword triggers ("agent," "representative"), not tone.

Dispute Pre-Intake — If a patient disagrees with a charge, AVA doesn't just transfer; it captures a structured dispute record (which charge, why, what the patient expects) so the biller opens the call already knowing the

issue — turning a "warm transfer" into a "pre-worked transfer."
Proactive Payment Plan Offers Within Policy — Instead of only taking payments, AVA can offer pre-approved payment plan options (e.g., 3/6/12-month splits) within limits the practice conﬁgures, and set them up without needing a human biller at all for straightforward cases — most competitors require a human for anything beyond a single payment.

Cross-Account / Household Linking — For practices with family accounts, AVA can (with proper authorization on ﬁle) address balances across linked family members in one call instead of forcing separate calls per patient — a common patient pain point that's rarely solved.

Biller Load-Balancing & Skill Matching — Transfers aren't just "correct biller by category," but weighted by current biller workload, expertise (e.g., a biller who specializes in a speciﬁc payer), and even biller performance on similar past calls — a dynamic routing layer most rule-based IVR-replacement bots don't have.

"No Repeat Yourself" Guarantee Across Channels — If a patient previously texted or emailed AVA's sibling agent (e.g., Cora, the text/phone automation agent) about the same balance, AVA on the phone call already has that context — cross-agent continuity within the same practice, which is a differentiator speciﬁc to running a coordinated agent suite rather than a single point solution.

Real-Time Sentiment & Outcome Dashboard for Practice Managers — Beyond call logs, a live view of why patients are calling about billing (confusion vs. dispute vs. can't-afford), so practices can ﬁx root causes (e.g., unclear statements) instead of just handling volume — most competitor dashboards report call/deﬂection metrics, not root-cause categorization.

Consent-Based Balance Negotiation Guardrails — AVA can be conﬁgured with a negotiation ceiling (e.g., can approve prompt-pay discounts up to X%) so it can resolve some negotiation calls itself, with every offer logged for audit — a capability that sits between "just informs" and "hands off to human," which is largely unaddressed in the market today.

Post-Call Micro-Survey Baked into the Same Call — Instead of a separate outbound survey call/text, AVA asks one quick satisfaction question at natural call end and logs it against the call type — closing the feedback loop without adding a channel.

