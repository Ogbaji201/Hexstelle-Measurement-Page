<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>IMeasure | HEXSTELLE Bespoke Fit</title>

<!-- Premium Fonts: Elegant + Modern -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet">

<style>
  /* ---------- RESET & BASE ---------- */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: #faf7f0;
    font-family: 'Inter', sans-serif;
    color: #1f1c18;
    scroll-behavior: smooth;
  }

  /* Main container */
  .container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 2rem 2rem 0 2rem;
  }

  /* ---- HEADER (refined) ---- */
  .header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    margin-bottom: 3.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #e9dfd3;
  }
  .brand {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    font-weight: 600;
    letter-spacing: -0.3px;
    color: #26221c;
  }
  .brand span {
    font-size: 0.7rem;
    letter-spacing: 2.2px;
    font-weight: 300;
    font-family: 'Inter', sans-serif;
    color: #9b8d7c;
    display: block;
    margin-top: 4px;
  }
  .invite {
    font-size: 0.8rem;
    font-weight: 400;
    color: #8a7b68;
    background: rgba(245, 240, 232, 0.6);
    padding: 6px 14px;
    border-radius: 40px;
    letter-spacing: 0.2px;
  }

  /* ---- HERO SECTION (balanced) ---- */
  .hero-section {
    display: grid;
    grid-template-columns: 1fr 0.9fr;
    gap: 3rem;
    margin-bottom: 4rem;
    align-items: center;
  }
  .hero-left h1 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 3.8rem;
    font-weight: 600;
    line-height: 1.15;
    letter-spacing: -1px;
    color: #26221c;
    margin-bottom: 1.2rem;
  }
  .hero-left .greeting {
    font-size: 1rem;
    font-weight: 500;
    color: #b2805c;
    margin-bottom: 0.5rem;
    letter-spacing: 0.3px;
  }
  .welcome-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.25rem;
    font-weight: 500;
    color: #3b3530;
    margin: 0.75rem 0 0.5rem;
    line-height: 1.4;
  }
  .intro-desc {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #6a5e51;
    margin: 0.75rem 0;
    max-width: 90%;
  }
  .help-badge {
    font-size: 0.75rem;
    background: #f0ebe3;
    display: inline-block;
    padding: 5px 15px;
    border-radius: 50px;
    color: #6a4e3a;
    margin-top: 0.5rem;
  }
  .hero-right img {
    width: 100%;
    max-height: 380px;
    object-fit: contain;
    border-radius: 28px;
    background: #f3eee7;
    box-shadow: 0 8px 20px rgba(0,0,0,0.02);
  }

  /* MAIN GRID (form + guide) */
  .main-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2.5rem;
    margin-bottom: 2rem;
  }

  /* cards styling */
  .form-card, .guide-card {
    background: #ffffff;
    border-radius: 2rem;
    padding: 2rem 1.8rem;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.02);
    border: 1px solid #ece2d6;
  }

  .section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.9rem;
    font-weight: 600;
    letter-spacing: -0.3px;
    margin-bottom: 0.25rem;
  }
  .sub-meta {
    font-size: 0.75rem;
    color: #aa9b88;
    margin-bottom: 1.5rem;
    border-left: 2px solid #d4c7b8;
    padding-left: 10px;
  }

  /* progress bar */
  .progress-wrap {
    margin: 1.5rem 0 1.8rem;
  }
  .progress-bar {
    height: 4px;
    background: #e6dfd6;
    border-radius: 10px;
  }
  .progress-fill {
    width: 0%;
    height: 100%;
    background: #2a241e;
    border-radius: 10px;
    transition: width 0.3s ease;
  }

  /* form steps + inputs */
  .form-step {
    display: none;
    animation: fadeSlide 0.25s ease;
  }
  .form-step.active {
    display: block;
  }
  @keyframes fadeSlide {
    from { opacity: 0; transform: translateY(8px);}
    to { opacity: 1; transform: translateY(0);}
  }

  h3 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.7rem;
    font-weight: 600;
    margin-bottom: 1.2rem;
    color: #2a241e;
  }
  .step-note {
    font-size: 0.75rem;
    color: #aa9a88;
    margin-bottom: 1.2rem;
    font-style: italic;
  }

  input, .upload-card input[type="file"] {
    width: 100%;
    padding: 0.9rem 1rem;
    margin-bottom: 1rem;
    border-radius: 18px;
    border: 1px solid #e9dfd3;
    background: #fefcf9;
    font-size: 0.85rem;
    font-family: 'Inter', sans-serif;
    transition: 0.2s;
  }
  input:focus {
    outline: none;
    border-color: #c8b59c;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(200, 181, 156, 0.12);
  }

  /* buttons refined */
  .form-navigation {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
  }
  button {
    flex: 1;
    padding: 0.85rem;
    border-radius: 50px;
    font-weight: 500;
    font-size: 0.85rem;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    background: #f4f0ea;
    color: #322c26;
  }
  .btn-next {
    background: #28221c;
    color: white;
  }
  .btn-submit {
    background: #1e1915;
    color: white;
  }
  .btn-back {
    background: transparent;
    border: 1px solid #e0d5ca;
    color: #7f6e5c;
  }
  button:hover {
    transform: translateY(-1px);
    opacity: 0.92;
  }

  /* GUIDE SECTION – image size controlled */
  .video-wrapper {
    margin: 1rem 0 1.5rem;
  }
  iframe {
    width: 100%;
    border-radius: 1.5rem;
    height: 210px;
    border: none;
    background: #f1ece4;
  }
  .measurement-img-card {
    margin: 1.2rem 0 0.5rem;
    border-radius: 1.5rem;
    overflow: hidden;
    background: #faf6f0;
    cursor: pointer;
    position: relative;
  }
  .guide-main-img {
    width: 100%;
    height: auto;
    max-height: 280px;
    object-fit: contain;
    display: block;
    border-radius: 1.2rem;
  }
  .tap-badge {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(4px);
    font-size: 0.7rem;
    padding: 5px 12px;
    border-radius: 30px;
    color: white;
    font-weight: 400;
  }
  .guide-caption h4 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    margin: 1rem 0 0.2rem;
  }
  .upload-card {
    background: #fbf8f3;
    border-radius: 1.5rem;
    padding: 1.3rem;
    margin-top: 1.8rem;
    border: 1px solid #ede3d7;
  }
  .upload-card h4 {
    font-family: 'Cormorant Garamond', serif;
    font-weight: 600;
    font-size: 1.3rem;
  }
  #photoPreview img {
    width: 100%;
    max-height: 180px;
    object-fit: cover;
    border-radius: 1rem;
    margin-top: 0.8rem;
    border: 1px solid #e2d5c8;
  }

  /* review preview */
  .preview-box {
    background: #fefaf5;
    padding: 1rem;
    border-radius: 1.2rem;
    max-height: 320px;
    overflow-y: auto;
    font-size: 0.8rem;
  }

  /* LIGHTBOX */
  .lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.92);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 2000;
  }
  .lightbox.active {
    display: flex;
  }
  .lightbox-img {
    max-width: 85vw;
    max-height: 85vh;
    border-radius: 1.5rem;
  }
  .close-lightbox {
    position: absolute;
    top: 30px;
    right: 45px;
    font-size: 3rem;
    color: white;
    cursor: pointer;
    font-weight: 300;
  }

  /* FOOTER – centered, elegant, HEXSTELLE brand intact */
  .footer-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 5rem 0 2.5rem;
    padding: 0 1rem;
  }
  .footer-card {
    max-width: 880px;
    width: 100%;
    background: #f5efe8;
    border-radius: 3rem;
    padding: 2.2rem 2rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    border: 1px solid #e7dfd5;
  }
  .footer-icon {
    width: 55px;
    opacity: 0.7;
  }
  .footer-mid {
    text-align: center;
    flex: 1;
    min-width: 220px;
  }
  .footer-mid h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    letter-spacing: -0.3px;
    color: #2c251f;
  }
  .footer-mid p {
    font-size: 0.85rem;
    color: #6e6051;
    line-height: 1.5;
    margin-bottom: 0.6rem;
  }
  .footer-thanks {
    font-family: 'Cormorant Garamond', serif;
    font-style: italic;
    font-size: 1.3rem;
    color: #b48666;
    margin-top: 0.3rem;
  }
  .footer-icon-right {
    width: 50px;
    opacity: 0.65;
  }

  /* responsive */
  @media (max-width: 880px) {
    .main-grid { grid-template-columns: 1fr; gap: 1.5rem; }
    .hero-section { grid-template-columns: 1fr; gap: 1.8rem; }
    .container { padding: 1.5rem 1.2rem 0; }
    .hero-left h1 { font-size: 2.8rem; }
  }
  @media (max-width: 560px) {
    .form-card, .guide-card { padding: 1.5rem; }
    .footer-card { flex-direction: column; text-align: center; gap: 1rem; padding: 1.8rem; }
  }
</style>
</head>
<body>

<div class="container">

  <!-- header with HEXSTELLE branding -->
  <div class="header">
    <div class="brand">IMeasure<br><span>BY HEXSTELLE</span></div>
    <div class="invite">Welcome to your exclusive HEXSTELLE measurement experience</div>
  </div>

  <!-- hero section -->
  <div class="hero-section">
    <div class="hero-left">
      <div class="greeting">✧ made for you ✧</div>
      <h1>Your silhouette,<br>perfected by HEXSTELLE.</h1>
      <p class="welcome-text">To honour your unique form, share your measurements with us.</p>
      <p class="intro-desc">HEXSTELLE translates your proportions into a garment that moves with you. Every detail is crafted with care.</p>
      <div class="help-badge">📏 video guide + interactive diagrams</div>
    </div>
    <div class="hero-right">
      <img src="{{ asset('images/measurements/Hexstelle.png') }}" alt="HEXSTELLE elegance" style="max-width:100%; border-radius: 32px;">
    </div>
  </div>

  <!-- main grid: form + guide -->
  <div class="main-grid">
    <!-- LEFT: multi-step form -->
    <div class="form-card">
      <div class="section-title">Your measurements</div>
      <div class="sub-meta">all in centimeters (cm)</div>
      <div class="progress-wrap">
        <div class="progress-bar"><div class="progress-fill" id="progressFill"></div></div>
      </div>

      <form method="POST" action="/submit" id="multiStepForm">
        @csrf
        <!-- step 1 personal -->
        <div class="form-step active">
          <h3>Personal details</h3>
          <input type="text" name="name" placeholder="Full name" autocomplete="off">
          <input type="tel" name="phone" placeholder="Phone number">
          <input type="email" name="email" placeholder="Email address">
          <input type="text" name="address" placeholder="Delivery address">
        </div>
        <!-- step 2 upper -->
        <div class="form-step">
          <h3>Upper body</h3>
          <p class="step-note">Measure around fullest part, tape straight</p>
          <input name="shoulder" placeholder="Shoulder width (cm)">
          <input name="bust" placeholder="Bust circumference (cm)">
          <input name="underbust" placeholder="Underbust (cm)">
          <input name="shoulder_bust" placeholder="Shoulder to bust point (cm)">
          <input name="shoulder_underbust" placeholder="Shoulder to underbust (cm)">
          <input name="nipple_distance" placeholder="Nipple to nipple (cm)">
        </div>
        <!-- step 3 chest -->
        <div class="form-step">
          <h3>Chest & torso</h3>
          <input name="across_chest" placeholder="Across chest (cm)">
          <input name="front_bust_arc" placeholder="Front bust arc (cm)">
          <input name="underarm" placeholder="Under arm circumference (cm)">
        </div>
        <!-- step 4 waist -->
        <div class="form-step">
          <h3>Waist & hip</h3>
          <input name="waist" placeholder="Waist (cm)">
          <input name="hip" placeholder="Hip circumference (cm)">
          <input name="full_front_length" placeholder="Full front length (shoulder to waist)">
          <input name="nape_waist" placeholder="Nape to waist (cm)">
        </div>
        <!-- step 5 back -->
        <div class="form-step">
          <h3>Back & shoulders</h3>
          <input name="across_back" placeholder="Across back (cm)">
          <input name="back_shoulder" placeholder="Back shoulder width (cm)">
          <input name="round_shoulder" placeholder="Round shoulder (cm)">
        </div>
        <!-- step 6 arms -->
        <div class="form-step">
          <h3>Arms & sleeves</h3>
          <input name="sleeve_elbow" placeholder="Shoulder to elbow (cm)">
          <input name="sleeve_wrist" placeholder="Shoulder to wrist (cm)">
          <input name="bicep" placeholder="Bicep circumference (cm)">
          <input name="elbow" placeholder="Elbow circumference (cm)">
          <input name="wrist" placeholder="Wrist circumference (cm)">
        </div>
        <!-- step 7 lower -->
        <div class="form-step">
          <h3>Lower body</h3>
          <input name="knee" placeholder="Knee circumference (cm)">
          <input name="single_knee" placeholder="Single knee circumference (cm)">
          <input name="thigh" placeholder="Thigh measurement (cm)">
          <input name="crouch_depth" placeholder="Crotch depth (cm)">
          <input name="ankle" placeholder="Ankle measurement (cm)">
        </div>
        <!-- step 8 lengths -->
        <div class="form-step">
          <h3>Lengths & finishing</h3>
          <input name="waist_knee" placeholder="Side waist to knee (cm)">
          <input name="waist_ankle" placeholder="Side waist to ankle (cm)">
          <input name="waist_floor" placeholder="Side waist to floor (cm)">
          <input name="waist_gown" placeholder="Side waist to gown length (cm)">
        </div>
        <!-- step 9 review -->
        <div class="form-step">
          <h3>Review & submit</h3>
          <div id="previewBox" class="preview-box"></div>
        </div>

        <div class="form-navigation">
          <button type="button" id="prevBtn" class="btn-back">Back</button>
          <button type="button" id="nextBtn" class="btn-next">Next step</button>
          <button type="submit" id="submitBtn" class="btn-submit">Submit to HEXSTELLE</button>
        </div>
      </form>
    </div>

    <!-- RIGHT: guide section -->
    <div class="guide-card">
      <div class="section-title" style="font-size:1.7rem;">Measurement guide</div>
      <div class="sub-meta">watch + tap diagrams to enlarge</div>
      
      <div class="video-wrapper">
        <iframe src="{{ asset('images/measurements/video.mp4') }}" title="measuring tutorial" loading="lazy"></iframe>
      </div>

      <!-- measurement image container - properly sized -->
      <div class="measurement-img-card" id="imgTrigger">
        <img src="{{ asset('images/measurements/front_and_back.png') }}" alt="full body measurement guide" class="guide-main-img" id="guideImage">
        <div class="tap-badge">🔍 tap to zoom</div>
      </div>
      <div class="guide-caption">
        <h4>Front & back reference</h4>
        <p style="font-size:0.75rem; color:#9b8c7a;">HEXSTELLE's precise measuring points — professional fit starts here.</p>
      </div>

      <!-- upload section optional -->
      <div class="upload-card">
        <h4>📸 Reference photos (optional)</h4>
        <p style="font-size:0.7rem; margin-bottom:10px;">Share clear full-body photos for enhanced precision</p>
        <input type="file" id="photoUpload" accept="image/*">
        <div id="photoPreview"></div>
      </div>
    </div>
  </div>
</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightboxOverlay">
  <span class="close-lightbox" id="closeLightboxBtn">&times;</span>
  <img src="" alt="enlarged view" class="lightbox-img" id="lightboxImage">
</div>

<!-- FOOTER – centered, HEXSTELLE privacy message -->
<div class="footer-wrapper">
  <div class="footer-card">
    <img class="footer-icon" src="https://cdn-icons-png.flaticon.com/512/1041/1041916.png" alt="privacy shield">
    <div class="footer-mid">
      <h2>Your privacy is important to HEXSTELLE.</h2>
      <p>Your measurements are safe and will only be used by HEXSTELLE for your outfit.</p>
      <div class="footer-thanks">Thank you for trusting us ♡</div>
    </div>
    <img class="footer-icon-right" src="https://cdn-icons-png.flaticon.com/512/2589/2589175.png" alt="elegance">
  </div>
</div>

<script>
  (function() {
    // ----- step logic -----
    let currentIdx = 0;
    const steps = document.querySelectorAll('.form-step');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressFill = document.getElementById('progressFill');
    const allInputs = Array.from(document.querySelectorAll('#multiStepForm input'));
    
    function updateProgress() {
      let percent = ((currentIdx + 1) / steps.length) * 100;
      progressFill.style.width = percent + '%';
    }
    
    function generatePreview() {
      const previewDiv = document.getElementById('previewBox');
      if (!previewDiv) return;
      let html = `<div style="font-weight:600; margin-bottom:12px;">✧ measurement summary ✧</div>`;
      let hasData = false;
      allInputs.forEach(inp => {
        if(inp.value.trim() !== "" && inp.name) {
          html += `<div style="display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid #eee6dd;">
                    <span style="color:#7f6b58;">${inp.placeholder || inp.name}</span>
                    <strong>${escapeHtml(inp.value)}</strong>
                  </div>`;
          hasData = true;
        }
      });
      if(!hasData) html += `<div style="color:#aa9a88;">No data entered yet — fill your measurements.</div>`;
      previewDiv.innerHTML = html;
    }
    
    function escapeHtml(str) {
      if(!str) return '';
      return str.replace(/[&<>]/g, function(m) {
        if(m === '&') return '&amp;';
        if(m === '<') return '&lt;';
        if(m === '>') return '&gt;';
        return m;
      });
    }
    
    function showStep(index) {
      steps.forEach((step, i) => {
        step.classList.toggle('active', i === index);
      });
      if(index === 0) prevBtn.style.display = 'none';
      else prevBtn.style.display = 'inline-block';
      
      if(index === steps.length - 1) {
        nextBtn.style.display = 'none';
        submitBtn.style.display = 'inline-block';
        generatePreview();
      } else {
        nextBtn.style.display = 'inline-block';
        submitBtn.style.display = 'none';
      }
      updateProgress();
    }
    
    function nextStep() { if(currentIdx < steps.length-1) { currentIdx++; showStep(currentIdx); } }
    function prevStep() { if(currentIdx > 0) { currentIdx--; showStep(currentIdx); } }
    
    prevBtn.addEventListener('click', prevStep);
    nextBtn.addEventListener('click', nextStep);
    
    // NO localStorage - data clears on refresh
    allInputs.forEach(inp => {
      inp.value = '';
      inp.addEventListener('input', function() {
        if(currentIdx === steps.length-1) generatePreview();
      });
    });
    
    showStep(0);
    
    // ----- LIGHTBOX -----
    const guideImg = document.getElementById('guideImage');
    const lightboxWrap = document.getElementById('lightboxOverlay');
    const lightboxImg = document.getElementById('lightboxImage');
    const closeLight = document.getElementById('closeLightboxBtn');
    
    if(guideImg) {
      guideImg.addEventListener('click', (e) => {
        e.stopPropagation();
        lightboxImg.src = guideImg.src;
        lightboxWrap.classList.add('active');
      });
    }
    function closeLightboxFn() { lightboxWrap.classList.remove('active'); }
    if(closeLight) closeLight.addEventListener('click', closeLightboxFn);
    if(lightboxWrap) lightboxWrap.addEventListener('click', (e) => { if(e.target === lightboxWrap) closeLightboxFn(); });
    
    // ----- photo upload preview -----
    const photoUp = document.getElementById('photoUpload');
    const previewContainer = document.getElementById('photoPreview');
    if(photoUp) {
      photoUp.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if(file) {
          const reader = new FileReader();
          reader.onload = function(ev) {
            previewContainer.innerHTML = `<img src="${ev.target.result}" alt="preview" style="max-width:100%; border-radius: 20px;">`;
          };
          reader.readAsDataURL(file);
        } else { previewContainer.innerHTML = ''; }
      });
    }
    
    // ========== IMAGE UPLOAD FUNCTION (ImgBB) ==========
    async function uploadImageToImgBB(imageFile) {
      const formData = new FormData();
      formData.append('image', imageFile);
      
      // FREE ImgBB API key (from https://api.imgbb.com/)
      const apiKey = '035543d85ecae8050d785da5bdde36db'; 
      const url = `https://api.imgbb.com/1/upload?key=${apiKey}`;
      
      try {
        const response = await fetch(url, {
          method: 'POST',
          body: formData
        });
        const data = await response.json();
        if (data.success) {
          return data.data.url;
        } else {
          console.error('Upload failed:', data);
          return null;
        }
      } catch (error) {
        console.error('Error uploading image:', error);
        return null;
      }
    }
    
    // ========== WHATSAPP SUBMIT WITH IMAGE ==========
    let uploadedImageUrl = null;
    let isUploading = false;
    
    const submitFormBtn = document.getElementById('submitBtn');
    
    submitFormBtn.addEventListener('click', async (e) => {
      e.preventDefault();
      
      const photoFile = document.getElementById('photoUpload').files[0];
      
      // Upload photo if exists and not already uploaded
      if (photoFile && !uploadedImageUrl && !isUploading) {
        isUploading = true;
        submitFormBtn.innerHTML = "📤 Uploading image...";
        submitFormBtn.disabled = true;
        
        uploadedImageUrl = await uploadImageToImgBB(photoFile);
        
        if (uploadedImageUrl) {
          console.log('Image uploaded:', uploadedImageUrl);
        } else {
          alert('Image upload failed, but measurements will still be sent.');
        }
        
        isUploading = false;
      }
      
      // Prepare WhatsApp message
      submitFormBtn.innerHTML = "Preparing message...";
      submitFormBtn.disabled = true;
      
      const phoneNumber = "+2348140892471";
      const orderRef = 'HX-' + new Date().getFullYear() + '-' + Math.floor(100000 + Math.random() * 900000);
      
      let message = `NEW MEASUREMENT SUBMISSION ✨%0A%0A`;
      message += `📌 Order Reference: ${orderRef}%0A`;
      message += `👗 HEXSTELLE Client%0A%0A`;
      message += `📏 MEASUREMENTS:%0A`;
      message += `────────────────%0A`;
      
      let hasFields = false;
      allInputs.forEach(field => {
        const fieldValue = field.value.trim();
        if(fieldValue !== "" && field.placeholder && field.placeholder !== "") {
          hasFields = true;
          message += `• ${field.placeholder}: ${fieldValue}%0A`;
        }
      });
      
      if(!hasFields) message += `⚠️ No measurement data provided.%0A`;
      
      // Add image link if uploaded
      if (uploadedImageUrl) {
        message += `%0A📸 REFERENCE PHOTO:%0A`;
        message += `${uploadedImageUrl}%0A`;
      }
      
      message += `%0A💕 Sent from HEXSTELLE Measurement Page`;
      
      const waUrl = `https://wa.me/${phoneNumber}?text=${message}`;
      window.open(waUrl, '_blank');
      
      setTimeout(() => {
        submitFormBtn.innerHTML = "Submit to HEXSTELLE";
        submitFormBtn.disabled = false;
      }, 2000);
    });
  })();

</script>
</body>
</html> 