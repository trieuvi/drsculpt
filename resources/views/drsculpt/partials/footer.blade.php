    <!--Footer -->
    <footer>
        <section id="footer" class="footer py-5">
            <div class="container-fluid wrapper">
                <div class="row m-0 m-lg-auto">
                    <div class="col-sm-6 col-md-6 col-xs-12 {{$agent->isMobile() ? 'text-center' : ''}}">
                        <p class="logo-f">Dr. Sculpt</p>
                        <p class="cool">CoolSculpting Center <br>San Diego, CA</p>

                        <p class="address">1707 Grand Avenue, Suite B, <br>San Diego, CA 92109</p>
                        <div class="mb-4"><a href="tel:+18582567548" title="Contact Us" class="btn1 blue ml-0">(858) 256-7548</a></div>
                        
                        <p class="hour">Hours of Operation:</p>
                        <ul class="hours list-unstyled">
                            <li><span>Monday</span> 10am-7pm</li>
                            <li><span>Tuesday</span> 10am-7pm</li>
                            <li><span>Wednesday</span> 10am-6pm</li>
                            <li><span>Thursday</span> 10am-7pm</li>
                            <li><span>Friday</span> 10am-3pm</li>
                            <li><span>Saturday</span> 11am-3pm</li>
                            <li><span>Sunday</span> 10am-1pm</li>
                        </ul>
                    </div>
                    @if(!$agent->isMobile())
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <h4 class="pb-3">Disclaimers and Legal Notices</h4>
                        <p class="">Disclaimers and Legal NoticesIf you are experiencing a life-threatening medical emergency, call 911 or go to your local emergency room immediately.<br><br><strong class="bold-text-2">*The same results featured here may NOT occur for all patients. &nbsp;In fact, the results achieved with our services may vary SIGNIFICANTLY with individual circumstances.</strong><br><br>Any highlighted anatomy is for illustrative purposes and does NOT precisely reflect the treated areas. This content features actors or models in addition to actual patients or healthcare providers. Reliance on any information provided here is solely at your own risk. The content of this Website is intended for informational purposes only and should not be used as a substitute for advice provided by a qualified healthcare professional.<br><br>“Dr. Sculpt”, “Cryo Contouring”, “Physique Hero”, “Hyper Sculpting”, “Accelerate”, “Lipo Breakdown”, “Lipo Edge”, “Absolute Abs”, “Downsize Your Thighs”, “Hercules”, “Less Friction”, “No Thanks Flanks”, “Right to Bear Arms”, “Streamline 360” are trademarks or registered trademarks of their respective owners.</p>
                    </div>
                    @endif
                </div>
                
                @if(!$agent->isMobile())
                <hr />
                <div class="d-flex justify-content-between mb-4">
                    <p class="cr-text">Copyright © {{ date('Y') }} Rayhawk corp. All rights reserved.</p>
                    <div>
                        <a class="links-none" href="/privacy-legal">Privacy & Legal</a> <span class="px-4">|</span><a class="links-none" href="/supporting-articles-research">Supporting Articles/Research</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <p>
                            <strong>CoolSculpting® Uses</strong><br/>The CoolSculpting® procedure is FDA-cleared for the treatment of visible fat bulges in the submental (under the chin) and submandibular (under the jawline) areas, thigh, abdomen, and flank, along with bra fat, back fat, underneath the buttocks (also knowns as banana roll) and upper arm. It is also FDA-cleared to affect the appearance of lax tissue with submental area treatments. The CoolSculpting® procedure is not a treatment for weight loss. <br/><br/><strong>CoolSculpting® Important Safety Information</strong><br/>The CoolSculpting® procedure is not for everyone. You should not have the CoolSculpting® procedure if you suffer from cryoglobulinemia, cold agglutinin disease, or paroxysmal cold hemoglobinuria.<br/><br/>Tell your doctor if you have any medical conditions including recent surgery, pre-existing hernia, and any known sensitivities or allergies. During the procedure you may experience sensations of pulling, tugging, mild pinching, intense cold, tingling, stinging, aching, and cramping at the treatment site. The sensations subside as the area becomes numb. <br/><br/>Following the procedure, typical side effects include temporary redness, swelling, blanching, bruising, firmness, tingling, stinging, tenderness, cramping, aching, itching, or skin sensitivity, and sensation of fullness in the back of the throat after submental or submandibular area treatment. <br/><br/>Rare side effects may also occur. CoolSculpting® may cause visible enlargement in the treated area which may develop two to five months after treatment and requires surgical intervention for correction. <br/><br/>Please see full Important Safety Information for additional information. <br/><strong>Patient Results May Vary.</strong>
                        </p>
                    </div>
                    
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <p>
                            <strong>CoolTone™ Uses </strong><br>The CoolTone™ device is FDA-cleared for improvement of abdominal tone, strengthening of the abdominal muscles, and development for firmer abdomen. CoolTone™ is also FDA-cleared for strengthening, toning, and firming of buttocks and thighs. <br/><br/><strong>CoolTone™ Important Safety Information </strong><br/>The CoolTone™ procedure is not for everyone. CoolTone™ should not be used in the head or heart area. You should not have the CoolTone™ treatment in areas with metal or electronic implants/devices like cardiac pacemakers, implanted hearing devices, implanted defibrillators, implanted neurostimulators, drug pumps, and hearing aids. Tell your doctor if you have any medical conditions and any known sensitivities or allergies as CoolTone™ should not be used over menstruating uterus, over areas of the skin that lack normal sensation, in areas of new bone growth, or in patients with fever, malignant tumor, hemorrhagic conditions, epilepsy, recent surgical procedure, pulmonary valve defect, pregnancy, sensitivity or allergy to latex. <br/><br/>CoolTone™ should be used with caution in patients with Graves’ disease (an autoimmune disorder that causes overactive thyroid), active bleeding disorders, or seizure disorders. <br/>Women who are close to menstruation may find that it comes sooner, or cramping is increased or intensified with CoolTone™ treatments, therefore, it is recommended to not undergo treatment during this time of the month. <br/><br/>Side effects may include, but are not limited to, muscular pain, temporary muscle spasm, temporary joint or tendon pain, and redness at or near the treatment site. <br/>Ask your Healthcare Provider if CoolTone™ is right for you. <br/><strong>Patient Results May Vary.</strong>
                        </p>
                    </div>
                </div>
                <hr />
                @endif

                @if($agent->isMobile())
                <hr class="footer-line"/>
                <div class="d-flex justify-content-between align-items-center more" id="use-safety">
                    <p>Use & safety information</p>
                    <i class="fa fa-chevron-down" aria-hidden="true" id="f-icon-use-safety"></i>
                </div>
                <div id="use-safety-content" style="display: none;" class="pt-3">
                    <p>
                        <strong>CoolSculpting® Uses</strong><br/>The CoolSculpting® procedure is FDA-cleared for the treatment of visible fat bulges in the submental (under the chin) and submandibular (under the jawline) areas, thigh, abdomen, and flank, along with bra fat, back fat, underneath the buttocks (also knowns as banana roll) and upper arm. It is also FDA-cleared to affect the appearance of lax tissue with submental area treatments. The CoolSculpting® procedure is not a treatment for weight loss. <br/><br/><strong>CoolSculpting® Important Safety Information</strong><br/>The CoolSculpting® procedure is not for everyone. You should not have the CoolSculpting® procedure if you suffer from cryoglobulinemia, cold agglutinin disease, or paroxysmal cold hemoglobinuria.<br/><br/>Tell your doctor if you have any medical conditions including recent surgery, pre-existing hernia, and any known sensitivities or allergies. During the procedure you may experience sensations of pulling, tugging, mild pinching, intense cold, tingling, stinging, aching, and cramping at the treatment site. The sensations subside as the area becomes numb. <br/><br/>Following the procedure, typical side effects include temporary redness, swelling, blanching, bruising, firmness, tingling, stinging, tenderness, cramping, aching, itching, or skin sensitivity, and sensation of fullness in the back of the throat after submental or submandibular area treatment. <br/><br/>Rare side effects may also occur. CoolSculpting® may cause visible enlargement in the treated area which may develop two to five months after treatment and requires surgical intervention for correction. <br/><br/>Please see full Important Safety Information for additional information. <br/><strong>Patient Results May Vary.</strong>
                    </p>
                    <p>
                        <strong>CoolTone™ Uses </strong><br>The CoolTone™ device is FDA-cleared for improvement of abdominal tone, strengthening of the abdominal muscles, and development for firmer abdomen. CoolTone™ is also FDA-cleared for strengthening, toning, and firming of buttocks and thighs. <br/><br/><strong>CoolTone™ Important Safety Information </strong><br/>The CoolTone™ procedure is not for everyone. CoolTone™ should not be used in the head or heart area. You should not have the CoolTone™ treatment in areas with metal or electronic implants/devices like cardiac pacemakers, implanted hearing devices, implanted defibrillators, implanted neurostimulators, drug pumps, and hearing aids. Tell your doctor if you have any medical conditions and any known sensitivities or allergies as CoolTone™ should not be used over menstruating uterus, over areas of the skin that lack normal sensation, in areas of new bone growth, or in patients with fever, malignant tumor, hemorrhagic conditions, epilepsy, recent surgical procedure, pulmonary valve defect, pregnancy, sensitivity or allergy to latex. <br/><br/>CoolTone™ should be used with caution in patients with Graves’ disease (an autoimmune disorder that causes overactive thyroid), active bleeding disorders, or seizure disorders. <br/>Women who are close to menstruation may find that it comes sooner, or cramping is increased or intensified with CoolTone™ treatments, therefore, it is recommended to not undergo treatment during this time of the month. <br/><br/>Side effects may include, but are not limited to, muscular pain, temporary muscle spasm, temporary joint or tendon pain, and redness at or near the treatment site. <br/>Ask your Healthcare Provider if CoolTone™ is right for you. <br/><strong>Patient Results May Vary.</strong>
                    </p>
                </div>
                <hr class="footer-line" />
                <div class="d-flex justify-content-between align-items-center more" id="legal-notice">
                    <p>Disclaimer Legal notise</p>
                    <i class="fa fa-chevron-down" aria-hidden="true" id="f-icon-legal-notice"></i>
                </div>
                <div  id="legal-notice-content" style="display: none;" class="pt-3">
                    <p>
                        If you are experiencing a life-threatening medical emergency, call 911 or go to your local emergency room immediately. <br/><strong>*The same results featured here may NOT occur for all patients. In fact, the results achieved with our services may vary SIGNIFICANTLY with individual circumstances.</strong> <br/><br/>Any highlighted anatomy is for illustrative purposes and does NOT precisely reflect the treated areas. This content features actors or models in addition to actual patients or healthcare providers. Reliance on any information provided here is solely at your own risk. The content of this Website is intended for informational purposes only and should not be used as a substitute for advice provided by a qualified healthcare professional. <br/><br/>“Dr. Sculpt”, “Cryo Contouring”, “Physique Hero”, “Hyper Sculpting”, “Accelerate”, “Lipo Breakdown”, “Lipo Edge”, “Absolute Abs”, “Downsize Your Thighs”, “Hercules”, “Less Friction”, “No Thanks Flanks”, “Right to Bear Arms”, “Streamline 360” are trademarks or registered trademarks of their respective owners.
                    </p>
                </div>
                <hr class="footer-line" />
                @endif

                <div>
                    <h3 class="refs py-4">References</h3>
                </div>

                @if($agent->isMobile())
                <div>
                    <p id="ref-1">1. &nbsp; Krueger N, Mai SV, Luebberding S, Sadick NS (26 June 2014). <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4079633" target="_blank" class="link-reference">"Cryolipolysis for noninvasive body contouring: clinical efficacy and patient satisfaction."</a>. Clin Cosmet Investig Dermatol. 7: 201–5. PMC <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4079633" target="_blank" class="link-reference">4079633</a>. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/25061326" target="_blank" class="link-reference">25061326</a>. doi:<a href="https://doi.org/10.2147%2FCCID.S44371" target="_blank" class="link-reference">10.2147/CCID.S44371</a>.</p>
                    <p id="ref-2">2. &nbsp; Ingargiola, MJ.; Motakef, S.; Chung, MT.; Vasconez, HC.; Sasaki, GH. (June 2015). <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4444424" target="_blank" class="link-reference">"Cryolipolysis for fat reduction and body contouring: safety and efficacy of current treatment paradigms"</a>. Plastic and Reconstructive Surgery. 135 (6): 1581–90. PMC <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4444424" target="_blank" class="link-reference">4444424</a>. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/26017594" target="_blank" class="link-reference">26017594</a>. doi:<a href="https://doi.org/10.1097%2FPRS.0000000000001236" target="_blank" class="link-reference">10.1097/PRS.0000000000001236</a>.</p>
                    <p id="ref-3">3. &nbsp; Derrick, CD; Shridharani, SM; Broyles, JM (June 2015). "The Safety and Efficacy of Cryolipolysis: A Systematic Review of Available Literature.". Aesthetic Surgery Journal. 35: 830–6. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/26038367" target="_blank" class="link-reference">26038367</a>. doi: <a href="https://doi.org/10.1093%2Fasj%2Fsjv039" target="_blank" class="link-reference">10.1093/asj/sjv039</a>.</p>
                    <p id="ref-4">4. &nbsp; Nelson, AA; Wasserman, D; Avram, MM (2009). "Cryolipolysis for reduction of excess adipose tissue". Seminars in Cutaneous Medicine and Surgery. 28 (4): 244–9. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/20123423" target="_blank" class="link-reference">20123423</a>. doi:<a href="https://doi.org/10.1016%2Fj.sder.2009.11.004" target="_blank" class="link-reference">10.1016/j.sder.2009.11.004</a></p>
                    <p id="ref-5">5. &nbsp; Coleman, SR; Sachdeva, K; Egbert, BM; Preciado, J; et al. (2009). <a href="http://www.springerlink.com/content/3h17qp3gk314ut17/fulltext.pdf?page=1" target="_blank" class="link-reference">"Clinical efficacy of noninvasive cryolipolysis and its effects on peripheral nerves"</a> (PDF). Aesthetic Plastic Surgery. 33 (4): 482–8. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/19296153" target="_blank" class="link-reference">19296153</a>. doi: <a href="https://doi.org/10.1007%2Fs00266-008-9286-8" target="_blank" class="link-reference">10.1007/s00266-008-9286-8</a>.</p>
                    <p id="ref-6">6. &nbsp; Avram, MM; Harry, RS (2009). "Cryolipolysis for subcutaneous fat layer reduction". Lasers in Surgery and Medicine. 41 (10): 703–8. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/20014262" target="_blank" class="link-reference">20014262</a>. doi:<a href="https://doi.org/10.1002%2Flsm.20864" target="_blank" class="link-reference"> 10.1002/lsm.20864</a>.</p>
                    <p id="ref-7">7. &nbsp; Meyer, Patricia Froes et al. (2016). <a href="https://www.hindawi.com/journals/cridm/2016/6052194/" target="_blank" class="link-reference">"Effects of Cryolipolysis on Abdominal Adiposity"</a>. Case Reports in Dermatological Medicine. doi:<a href="https://doi.org/10.1155%2F2016%2F6052194" target="_blank" class="link-reference">10.1155/2016/6052194</a>.</p>
                    <p id="ref-8">8. &nbsp; Manstein, D; Laubach, H; Watanabe, K; Farinelli, W; et al. (2008). "Selective cryolysis: A novel method of non-invasive fat removal". Lasers in Surgery and Medicine. 40 (9): 595–604. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/18951424" target="_blank" class="link-reference">18951424</a>. doi:<a href="https://doi.org/10.1002%2Flsm.20719" target="_blank" class="link-reference">10.1002/lsm.20719</a>.</p>
                    <p id="ref-9">9. &nbsp; Zelickson, B; Egbert, BM; Preciado, J; Allison, J; et al. (2009). "Cryolipolysis for noninvasive fat cell destruction: Initial results from a pig model". Dermatologic Surgery. 35 (10): 1462–70. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/19614940" target="_blank" class="link-reference">19614940</a>. doi:<a href="https://doi.org/10.1111%2Fj.1524-4725.2009.01259.x" target="_blank" class="link-reference">10.1111/j.1524-4725.2009.01259.x</a>.</p>
                </div>
                @else
                <div class="row">
                    <div class="col-lg-4">
                        <p id="ref-1">1. &nbsp; Krueger N, Mai SV, Luebberding S, Sadick NS (26 June 2014). <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4079633" target="_blank" class="link-reference">"Cryolipolysis for noninvasive body contouring: clinical efficacy and patient satisfaction."</a>. Clin Cosmet Investig Dermatol. 7: 201–5. PMC <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4079633" target="_blank" class="link-reference">4079633</a>. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/25061326" target="_blank" class="link-reference">25061326</a>. doi:<a href="https://doi.org/10.2147%2FCCID.S44371" target="_blank" class="link-reference">10.2147/CCID.S44371</a>.</p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-4">4. &nbsp; Nelson, AA; Wasserman, D; Avram, MM (2009). "Cryolipolysis for reduction of excess adipose tissue". Seminars in Cutaneous Medicine and Surgery. 28 (4): 244–9. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/20123423" target="_blank" class="link-reference">20123423</a>. doi:<a href="https://doi.org/10.1016%2Fj.sder.2009.11.004" target="_blank" class="link-reference">10.1016/j.sder.2009.11.004</a></p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-7">7. &nbsp; Meyer, Patricia Froes et al. (2016). <a href="https://www.hindawi.com/journals/cridm/2016/6052194/" target="_blank" class="link-reference">"Effects of Cryolipolysis on Abdominal Adiposity"</a>. Case Reports in Dermatological Medicine. doi:<a href="https://doi.org/10.1155%2F2016%2F6052194" target="_blank" class="link-reference">10.1155/2016/6052194</a>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p id="ref-2">2. &nbsp; Ingargiola, MJ.; Motakef, S.; Chung, MT.; Vasconez, HC.; Sasaki, GH. (June 2015). <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4444424" target="_blank" class="link-reference">"Cryolipolysis for fat reduction and body contouring: safety and efficacy of current treatment paradigms"</a>. Plastic and Reconstructive Surgery. 135 (6): 1581–90. PMC <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4444424" target="_blank" class="link-reference">4444424</a>. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/26017594" target="_blank" class="link-reference">26017594</a>. doi:<a href="https://doi.org/10.1097%2FPRS.0000000000001236" target="_blank" class="link-reference">10.1097/PRS.0000000000001236</a>.</p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-5">5. &nbsp; Coleman, SR; Sachdeva, K; Egbert, BM; Preciado, J; et al. (2009). <a href="http://www.springerlink.com/content/3h17qp3gk314ut17/fulltext.pdf?page=1" target="_blank" class="link-reference">"Clinical efficacy of noninvasive cryolipolysis and its effects on peripheral nerves"</a> (PDF). Aesthetic Plastic Surgery. 33 (4): 482–8. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/19296153" target="_blank" class="link-reference">19296153</a>. doi: <a href="https://doi.org/10.1007%2Fs00266-008-9286-8" target="_blank" class="link-reference">10.1007/s00266-008-9286-8</a>.</p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-8">8. &nbsp; Manstein, D; Laubach, H; Watanabe, K; Farinelli, W; et al. (2008). "Selective cryolysis: A novel method of non-invasive fat removal". Lasers in Surgery and Medicine. 40 (9): 595–604. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/18951424" target="_blank" class="link-reference">18951424</a>. doi:<a href="https://doi.org/10.1002%2Flsm.20719" target="_blank" class="link-reference">10.1002/lsm.20719</a>.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <p id="ref-3">3. &nbsp; Derrick, CD; Shridharani, SM; Broyles, JM (June 2015). "The Safety and Efficacy of Cryolipolysis: A Systematic Review of Available Literature.". Aesthetic Surgery Journal. 35: 830–6. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/26038367" target="_blank" class="link-reference">26038367</a>. doi: <a href="https://doi.org/10.1093%2Fasj%2Fsjv039" target="_blank" class="link-reference">10.1093/asj/sjv039</a>.</p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-6">6. &nbsp; Avram, MM; Harry, RS (2009). "Cryolipolysis for subcutaneous fat layer reduction". Lasers in Surgery and Medicine. 41 (10): 703–8. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/20014262" target="_blank" class="link-reference">20014262</a>. doi:<a href="https://doi.org/10.1002%2Flsm.20864" target="_blank" class="link-reference"> 10.1002/lsm.20864</a>.</p>
                    </div>
                    <div class="col-lg-4">
                        <p id="ref-9">9. &nbsp; Zelickson, B; Egbert, BM; Preciado, J; Allison, J; et al. (2009). "Cryolipolysis for noninvasive fat cell destruction: Initial results from a pig model". Dermatologic Surgery. 35 (10): 1462–70. PMID <a href="https://www.ncbi.nlm.nih.gov/pubmed/19614940" target="_blank" class="link-reference">19614940</a>. doi:<a href="https://doi.org/10.1111%2Fj.1524-4725.2009.01259.x" target="_blank" class="link-reference">10.1111/j.1524-4725.2009.01259.x</a>.</p>
                    </div>
                </div>
                @endif

                @if($agent->isMobile())
                <hr class="footer-line my-0"/>
                <div class="mobile-link-m py-4 px-2">
                    <a href="/privacy-legal" class="">Privacy & legal</a>
                </div>
                <hr class="footer-line my-0"/>
                <div class="mobile-link-m py-4 px-2">
                    <a href="#"><strong>Supporting Articles + resarch</strong></a>
                </div>
                <div class="mobile-link-m py-4 blue text-center">
                    <a href="https://www.coolmarketing.com/" target="_blank" title="Launch a Dr. Sculpt Center">Launch a Dr. Sculpt Center</a>
                </div>
                <div class="mobile-link-m pt-4 pb-0 mb-0 text-center">
                    <a href="#" class="">Powered by CoolMarketing</a>
                </div>
                @else
                <div class="row btn-footer mt-5">
                    <div class="col-lg-6 text-center bg-blue">
                        <a class="d-block" href="https://www.coolmarketing.com/" target="_blank" title="Launch a Dr. Sculpt Center">Launch a Dr. Sculpt Center</a>
                    </div>
                    <div class="col-lg-6 text-center bg-white">
                        <a class="d-block" href="https://www.coolmarketing.com/" target="_blank" title="Powered by CoolMarketing">Powered by CoolMarketing</a>
                    </div>
                </div>
                @endif
            </div>
        </section>
    </footer>
    <!--End Footer -->