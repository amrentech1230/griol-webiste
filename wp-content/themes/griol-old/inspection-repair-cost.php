<?php
/*
 * Template Name: Service – Inspection Repair Cost
 */

get_header();

$dir = get_template_directory_uri() . '/assets/images';
?>

<section style="
position:relative;
background:#f5f5f5;
overflow:hidden;
">

  <!-- HERO -->
  <div style="
    position:relative;
    min-height:620px;
    display:flex;
    align-items:center;
    ">

    <!-- BG IMAGE -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/compliance.jpg" alt="Inspection Costs" style="
            position:absolute;
            inset:0;
            width:100%;
            height:100%;
            object-fit:cover;
            ">

    <!-- OVERLAY -->
    <div style="
        position:absolute;
        inset:0;
        background:linear-gradient(90deg,
        rgba(10,15,25,.92) 10%,
        rgba(10,15,25,.78) 45%,
        rgba(10,15,25,.45) 100%);
        "></div>

    <!-- CONTENT -->
    <div style="
        position:relative;
        z-index:5;
        width:100%;
        max-width:1200px;
        margin:auto;
        padding:120px 20px 140px;
        ">

      <!-- BREADCRUMB -->
      <div style="
            display:flex;
            flex-wrap:wrap;
            gap:8px;
            align-items:center;
            margin-bottom:22px;
            color:#d7d7d7;
            font-size:14px;
            ">
        <a href="<?php echo home_url('/'); ?>" style="color:#d7d7d7;text-decoration:none;">Home</a>
        <span>›</span>
        <a href="#" style="color:#d7d7d7;text-decoration:none;">Remedial Works</a>
        <span>›</span>
        <span style="color:#fff;">Costs & Pricing</span>
      </div>

      <!-- LABEL -->
      <div style="
            color:#ff3b30;
            text-transform:uppercase;
            letter-spacing:3px;
            font-size:13px;
            font-weight:600;
            margin-bottom:18px;
            ">
        Transparent Pricing
      </div>

      <!-- TITLE -->
      <h1 style="
            max-width:760px;
            font-size:clamp(42px,5vw,76px);
            line-height:1.05;
            font-weight:800;
            color:#fff;
            margin:0 0 24px;
            ">
        Fire Door Inspection &
        <br>
        Remediation Costs
      </h1>

      <!-- DESC -->
      <p style="
            max-width:760px;
            color:#d7d7d7;
            font-size:20px;
            line-height:1.7;
            margin-bottom:34px;
            ">
        Transparent fire door pricing for London and the South East.
        Indicative costs for inspections, seal replacement,
        closer repairs, glazing replacement and full FD30S or FD60S door installations.
        No hidden call-out fees.
      </p>

      <!-- BUTTONS -->
      <div style="
            display:flex;
            gap:16px;
            flex-wrap:wrap;
            margin-bottom:28px;
            ">

        <a href="#quote" style="
                background:#ef3b33;
                color:#fff;
                text-decoration:none;
                padding:17px 30px;
                border-radius:8px;
                font-weight:700;
                font-size:16px;
                display:inline-flex;
                align-items:center;
                justify-content:center;
                min-width:250px;
                ">
          Get a Fixed-Price Quote
        </a>

        <a href="tel:02034882247" style="
                border:1px solid rgba(255,255,255,.28);
                color:#fff;
                text-decoration:none;
                padding:17px 30px;
                border-radius:8px;
                font-weight:700;
                font-size:16px;
                display:inline-flex;
                align-items:center;
                justify-content:center;
                min-width:220px;
                backdrop-filter:blur(4px);
                ">
          ☎ Call 020 3488 2247
        </a>

      </div>

      <!-- FEATURES -->
      <div style="
            display:flex;
            flex-wrap:wrap;
            gap:26px;
            color:#d9d9d9;
            font-size:15px;
            ">

        <div>✓ FDIS Certified Inspectors</div>
        <div>✓ No Hidden Fees</div>
        <div>✓ Portfolio Rates Available</div>
        <div>✓ London & South East Coverage</div>

      </div>

    </div>

  </div>

  <!-- FLOATING STATS -->
  <div style="
    position:relative;
    z-index:10;
    max-width:1200px;
    margin:-70px auto 0;
    padding:0 20px 70px;
    ">

    <div style="
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
        gap:22px;
        ">

      <!-- CARD -->
      <div style="
            background:#fff;
            border-radius:16px;
            padding:30px 26px;
            box-shadow:0 10px 35px rgba(0,0,0,.10);
            border:1px solid #ececec;
            ">

        <div style="
                color:#7d7d7d;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:18px;
                font-weight:600;
                ">
          Inspection
        </div>

        <div style="
                display:flex;
                align-items:flex-end;
                gap:8px;
                margin-bottom:10px;
                ">

          <span style="
                    color:#ff3b30;
                    font-size:18px;
                    font-weight:600;
                    ">
            from
          </span>

          <span style="
                    color:#131722;
                    font-size:56px;
                    line-height:1;
                    font-weight:800;
                    ">
            £8
          </span>

        </div>

        <div style="
                color:#777;
                font-size:14px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border-radius:16px;
            padding:30px 26px;
            box-shadow:0 10px 35px rgba(0,0,0,.10);
            border:1px solid #ececec;
            ">

        <div style="
                color:#7d7d7d;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:18px;
                font-weight:600;
                ">
          Seal Replacement
        </div>

        <div style="
                display:flex;
                align-items:flex-end;
                gap:8px;
                margin-bottom:10px;
                ">

          <span style="
                    color:#ff3b30;
                    font-size:18px;
                    font-weight:600;
                    ">
            from
          </span>

          <span style="
                    color:#131722;
                    font-size:56px;
                    line-height:1;
                    font-weight:800;
                    ">
            £50
          </span>

        </div>

        <div style="
                color:#777;
                font-size:14px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border-radius:16px;
            padding:30px 26px;
            box-shadow:0 10px 35px rgba(0,0,0,.10);
            border:1px solid #ececec;
            ">

        <div style="
                color:#7d7d7d;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:18px;
                font-weight:600;
                ">
          Closer Replacement
        </div>

        <div style="
                display:flex;
                align-items:flex-end;
                gap:8px;
                margin-bottom:10px;
                ">

          <span style="
                    color:#ff3b30;
                    font-size:18px;
                    font-weight:600;
                    ">
            from
          </span>

          <span style="
                    color:#131722;
                    font-size:56px;
                    line-height:1;
                    font-weight:800;
                    ">
            £90
          </span>

        </div>

        <div style="
                color:#777;
                font-size:14px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border-radius:16px;
            padding:30px 26px;
            box-shadow:0 10px 35px rgba(0,0,0,.10);
            border:1px solid #ececec;
            ">

        <div style="
                color:#7d7d7d;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:18px;
                font-weight:600;
                ">
          FD30S Installation
        </div>

        <div style="
                display:flex;
                align-items:flex-end;
                gap:8px;
                margin-bottom:10px;
                ">

          <span style="
                    color:#ff3b30;
                    font-size:18px;
                    font-weight:600;
                    ">
            from
          </span>

          <span style="
                    color:#131722;
                    font-size:56px;
                    line-height:1;
                    font-weight:800;
                    ">
            £400
          </span>

        </div>

        <div style="
                color:#777;
                font-size:14px;
                ">
          supply & fit
        </div>

      </div>

    </div>

  </div>

</section>

<section style="background:#f5f5f5;padding:90px 20px;">

  <div style="max-width:1100px;margin:auto;">

    <!-- TOP CONTENT -->
    <div style="max-width:760px;margin-bottom:45px;">

      <div style="
            color:#ff3b30;
            text-transform:uppercase;
            letter-spacing:3px;
            font-size:13px;
            font-weight:700;
            margin-bottom:18px;
            ">
        Inspection Pricing
      </div>

      <h2 style="
            font-size:54px;
            line-height:1.1;
            color:#101828;
            margin:0 0 24px;
            font-weight:800;
            ">
        Fire Door Inspection Costs
      </h2>

      <p style="
            font-size:20px;
            line-height:1.8;
            color:#4b5563;
            margin:0;
            ">
        Our FDIS-certified inspections scale with portfolio size —
        the more doors you manage, the lower the per-door rate.
        Every inspection includes a digital report, timestamped photographs,
        a compliance certificate and a clear pass/fail outcome with
        priority remediation schedules.
      </p>

    </div>

    <!-- PRICING GRID -->
    <div style="
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
        gap:22px;
        margin-bottom:35px;
        ">

      <!-- CARD -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:28px;
            ">

        <div style="
                color:#6b7280;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:20px;
                font-weight:700;
                ">
          Single Visit
        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#111827;
                margin-bottom:22px;
                ">
          1 – 5 doors
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#101828;
                margin-bottom:8px;
                ">
          £25 – £35
        </div>

        <div style="
                color:#6b7280;
                font-size:15px;
                ">
          per door
        </div>

      </div>

      <!-- FEATURED CARD -->
      <div style="
            background:#0f172a;
            border-radius:16px;
            padding:28px;
            position:relative;
            overflow:hidden;
            ">

        <div style="
                display:flex;
                justify-content:space-between;
                align-items:center;
                margin-bottom:22px;
                ">

          <div style="
                    color:#ff3b30;
                    text-transform:uppercase;
                    letter-spacing:2px;
                    font-size:12px;
                    font-weight:700;
                    ">
            Most Popular
          </div>

          <div style="
                    background:#ff3b30;
                    color:#fff;
                    font-size:11px;
                    padding:6px 10px;
                    border-radius:5px;
                    font-weight:700;
                    ">
            POPULAR
          </div>

        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#fff;
                margin-bottom:22px;
                ">
          6 – 20 doors
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#ff3b30;
                margin-bottom:8px;
                ">
          £18 – £28
        </div>

        <div style="
                color:#cbd5e1;
                font-size:15px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:28px;
            ">

        <div style="
                color:#6b7280;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:20px;
                font-weight:700;
                ">
          Volume Rate
        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#111827;
                margin-bottom:22px;
                ">
          21 – 50 doors
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#101828;
                margin-bottom:8px;
                ">
          £12 – £20
        </div>

        <div style="
                color:#6b7280;
                font-size:15px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:28px;
            ">

        <div style="
                color:#6b7280;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:20px;
                font-weight:700;
                ">
          Portfolio Rate
        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#111827;
                margin-bottom:22px;
                ">
          51 – 100 doors
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#101828;
                margin-bottom:8px;
                ">
          £10 – £16
        </div>

        <div style="
                color:#6b7280;
                font-size:15px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:28px;
            ">

        <div style="
                color:#6b7280;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:20px;
                font-weight:700;
                ">
          Bespoke Rate
        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#111827;
                margin-bottom:22px;
                ">
          100+ doors
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#101828;
                margin-bottom:8px;
                ">
          £8 – £14
        </div>

        <div style="
                color:#6b7280;
                font-size:15px;
                ">
          per door
        </div>

      </div>

      <!-- CARD -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:28px;
            ">

        <div style="
                color:#6b7280;
                text-transform:uppercase;
                letter-spacing:2px;
                font-size:12px;
                margin-bottom:20px;
                font-weight:700;
                ">
          Per Door, All-Inclusive
        </div>

        <div style="
                font-size:20px;
                font-weight:700;
                color:#111827;
                margin-bottom:22px;
                ">
          PPM Contracts
        </div>

        <div style="
                font-size:52px;
                line-height:1;
                font-weight:800;
                color:#101828;
                margin-bottom:8px;
                ">
          £35 – £90/yr
        </div>

        <div style="
                color:#6b7280;
                font-size:15px;
                ">
          per door
        </div>

      </div>

    </div>

    <!-- BOTTOM BOXES -->
    <div style="
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(420px,1fr));
        gap:22px;
        ">

      <!-- LEFT BOX -->
      <div style="
            background:#fff;
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:32px;
            ">

        <h3 style="
                margin:0 0 25px;
                font-size:24px;
                color:#111827;
                ">
          Every inspection includes
        </h3>

        <div style="
                display:flex;
                flex-direction:column;
                gap:18px;
                color:#374151;
                font-size:17px;
                ">

          <div>✓ Digital compliance report</div>
          <div>✓ Timestamped photographs</div>
          <div>✓ Compliance certificate</div>
          <div>✓ Pass / fail reporting per door</div>
          <div>✓ Priority remediation schedule</div>

        </div>

      </div>

      <!-- RIGHT BOX -->
      <div style="
            background:linear-gradient(135deg,#ff3b30,#ff7a18);
            border-radius:16px;
            padding:32px;
            color:#fff;
            ">

        <div style="
                font-size:22px;
                font-weight:800;
                margin-bottom:22px;
                ">
          Emergency & Same-Week Inspection
        </div>

        <p style="
                color:rgba(255,255,255,.92);
                font-size:17px;
                line-height:1.8;
                margin-bottom:30px;
                ">
          Need urgent compliance evidence ahead of enforcement,
          insurance or sale? We mobilise certified inspectors within
          48 hours across London and the South East.
        </p>

        <div style="
                font-size:58px;
                line-height:1;
                font-weight:800;
                margin-bottom:10px;
                ">
          + £150
        </div>

        <div style="
                font-size:18px;
                margin-bottom:28px;
                ">
          mobilisation
        </div>

        <a href="#" style="
                display:inline-flex;
                align-items:center;
                gap:10px;
                background:#fff;
                color:#111827;
                text-decoration:none;
                padding:16px 24px;
                border-radius:10px;
                font-weight:700;
                ">
          Request emergency inspection →
        </a>

      </div>

    </div>

  </div>

</section>
<!-- =========================================================
FULL FIRE DOOR SERVICES SECTION
========================================================= -->

<section style="padding:100px 20px;background:#f5f7fa;font-family:Inter,sans-serif;overflow:hidden;">

  <div style="max-width:1250px;margin:0 auto;">

    <!-- =========================================================
    HERO
    ========================================================= -->

    <div style="max-width:900px;margin-bottom:70px;">

      <span style="
        display:inline-block;
        color:#dc2626;
        font-size:13px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        margin-bottom:18px;
      ">
        Fire Door Services
      </span>

      <h2 style="
        font-size:64px;
        line-height:1.05;
        font-weight:800;
        color:#111827;
        margin:0 0 24px;
      ">
        Fire Door Inspection, Remediation & Installation
      </h2>

      <p style="
        font-size:20px;
        line-height:1.9;
        color:#4b5563;
        margin:0;
        max-width:950px;
      ">
        Professional fire door inspection, remedial works, certified installation
        and ongoing planned preventative maintenance services across
        Greater London and the Home Counties.
      </p>

    </div>

    <!-- =========================================================
    REMEDIAL WORKS
    ========================================================= -->

    <div style="
      background:#fff;
      border-radius:28px;
      padding:50px;
      margin-bottom:45px;
      box-shadow:0 10px 40px rgba(0,0,0,0.06);
    ">

      <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:20px;
        flex-wrap:wrap;
        margin-bottom:40px;
      ">

        <div>

          <span style="
            color:#dc2626;
            font-size:13px;
            font-weight:700;
            letter-spacing:2px;
            text-transform:uppercase;
            display:block;
            margin-bottom:10px;
          ">
            Remedial Works
          </span>

          <h3 style="
            margin:0;
            font-size:42px;
            color:#111827;
            font-weight:800;
          ">
            Repair & Remediation Costs
          </h3>

        </div>

        <div style="
          background:#fee2e2;
          color:#dc2626;
          padding:12px 18px;
          border-radius:999px;
          font-size:14px;
          font-weight:700;
        ">
          Same-Day Minor Remedials Available
        </div>

      </div>

      <p style="
        color:#4b5563;
        font-size:18px;
        line-height:1.9;
        margin:0 0 35px;
      ">
        Targeted remediation almost always beats replacement on cost.
        Restoring a non-compliant doorset back to certified specification
        is faster, less disruptive and supports your audit trail with
        post-remediation certification.
      </p>

      <!-- GRID -->
      <div class="repair-grid" style="
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:18px;
      ">

        <!-- ITEM -->
        <div class="repair-card">
          <span>Intumescent seal installation</span>
          <strong>£50</strong>
        </div>

        <div class="repair-card">
          <span>Intumescent seal replacement</span>
          <strong>£30</strong>
        </div>

        <div class="repair-card">
          <span>Door closer adjustment</span>
          <strong>£25</strong>
        </div>

        <div class="repair-card">
          <span>Door closer installation / replacement (standard overhead fire rated)</span>
          <strong>£45</strong>
        </div>

        <div class="repair-card">
          <span>Door gap rectification</span>
          <strong>£75-150</strong>
        </div>

        <div class="repair-card">
          <span>Under door gap rectification (threshold supply & fit)</span>
          <strong>£40-100</strong>
        </div>

        <div class="repair-card">
          <span>Hinge set replacement (standard fire rated + pads)</span>
          <strong>£50</strong>
        </div>

        <div class="repair-card">
          <span>Ironmongery installation/replacement</span>
          <strong>From £40</strong>
        </div>

        <div class="repair-card">
          <span>Repairs for small damage and holes using intumescent filler</span>
          <strong>From £30</strong>
        </div>

        <div class="repair-card">
          <span>Certified fire glazing replacement (supply and fit)</span>
          <strong>From £100</strong>
        </div>

      </div>

      <!-- CTA -->
      <div style="
        margin-top:35px;
        background:#111827;
        border-radius:22px;
        padding:35px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:25px;
        flex-wrap:wrap;
      ">

        <div style="max-width:760px;">

          <h4 style="
            margin:0 0 12px;
            color:#fff;
            font-size:30px;
            font-weight:800;
          ">
            Same-day minor remedials
          </h4>

          <p style="
            margin:0;
            color:#d1d5db;
            line-height:1.8;
            font-size:17px;
          ">
            Available during inspection visits with no additional call-out fee.
            Restore compliance the same day we attend.
          </p>

        </div>

        <a href="#" style="
          background:#dc2626;
          color:#fff;
          text-decoration:none;
          padding:16px 34px;
          border-radius:12px;
          font-weight:700;
          white-space:nowrap;
        ">
          Book Combined Visit
        </a>

      </div>

    </div>

    <!-- =========================================================
    INSTALLATION WORKS
    ========================================================= -->

    <div style="
      background:#111827;
      border-radius:28px;
      padding:55px;
      margin-bottom:45px;
      color:#fff;
    ">

      <span style="
        color:#fca5a5;
        font-size:13px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        display:block;
        margin-bottom:12px;
      ">
        Installation & Supply
      </span>

      <h3 style="
        font-size:46px;
        font-weight:800;
        margin:0 0 20px;
      ">
        Certified Fire Door Installation
      </h3>

      <p style="
        color:#d1d5db;
        font-size:18px;
        line-height:1.9;
        margin:0 0 40px;
        max-width:900px;
      ">
        Certified installers delivering compliant FD30 and FD60 rated
        door sets across residential, commercial and mixed-use buildings.
      </p>

      <!-- GRID -->
      <div class="install-grid" style="
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:20px;
      ">

        <div class="install-card">
          <h4>FD30s standard door and hardware installation</h4>
          <div>from £350</div>
        </div>

        <div class="install-card">
          <h4>FD60s standard door and hardware installation</h4>
          <div>from £500</div>
        </div>

        <div class="install-card">
          <h4>Full door set or door assembly replacement</h4>
          <div>from £600</div>
        </div>

        <div class="install-card">
          <h4>FD30s with vision panel installation</h4>
          <div>from £450</div>
        </div>

      </div>

      <!-- INFO -->
      <div style="
        margin-top:35px;
        background:#dc2626;
        border-radius:20px;
        padding:30px;
      ">

        <h4 style="
          margin:0 0 15px;
          font-size:24px;
          font-weight:800;
          color:#fff;
        ">
          Installation Lead Times
        </h4>

        <p style="
          margin:0;
          color:#fff;
          line-height:1.9;
          font-size:17px;
        ">
          Typically 1–2 weeks for standard door sets; bespoke
          configurations may take longer.
        </p>

      </div>

    </div>

    <!-- =========================================================
    INSPECTION COSTS
    ========================================================= -->

    <div style="
      background:#fff;
      border-radius:28px;
      padding:50px;
      margin-bottom:45px;
      box-shadow:0 10px 40px rgba(0,0,0,0.06);
    ">

      <span style="
        color:#dc2626;
        font-size:13px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        display:block;
        margin-bottom:12px;
      ">
        Inspection Pricing
      </span>

      <h3 style="
        font-size:44px;
        color:#111827;
        font-weight:800;
        margin:0 0 20px;
      ">
        Fire Door Inspection Costs
      </h3>

      <p style="
        color:#4b5563;
        font-size:18px;
        line-height:1.9;
        margin:0 0 35px;
      ">
        Professional fire door inspections across Greater London
        and the Home Counties with detailed compliance reporting
        and digital audit trails.
      </p>

      <!-- PRICING -->
      <div class="inspection-grid" style="
        display:grid;
        grid-template-columns:repeat(4,1fr);
        gap:18px;
      ">

        <div class="inspection-card">
          <h4>1–5 Doors</h4>
          <div>£30</div>
          <span>Per Door</span>
        </div>

        <div class="inspection-card">
          <h4>6–20 Doors</h4>
          <div>£20</div>
          <span>Per Door</span>
        </div>

        <div class="inspection-card">
          <h4>20–50 Doors</h4>
          <div>£17</div>
          <span>Per Door</span>
        </div>

        <div class="inspection-card">
          <h4>50+ Doors</h4>
          <div>£15</div>
          <span>Per Door</span>
        </div>

      </div>

    </div>

    <!-- =========================================================
    PPM AGREEMENT
    ========================================================= -->

    <div style="
      background:linear-gradient(135deg,#111827,#1f2937);
      border-radius:32px;
      padding:60px;
      color:#fff;
    ">

      <span style="
        color:#fca5a5;
        font-size:13px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        display:block;
        margin-bottom:14px;
      ">
        Planned Preventative Maintenance
      </span>

      <h2 style="
        font-size:56px;
        line-height:1.1;
        margin:0 0 24px;
        font-weight:800;
        max-width:1000px;
      ">
        Scheduled Fire Door Care (PPM Agreements)
      </h2>

      <p style="
        font-size:19px;
        line-height:1.9;
        color:#d1d5db;
        max-width:1000px;
        margin-bottom:45px;
      ">
        Locking in an annual Planned Preventative Maintenance (PPM)
        agreement is the smartest way to handle your legal safety
        obligations while keeping overheads low.
      </p>

      <p style="
        font-size:18px;
        line-height:1.9;
        color:#d1d5db;
        max-width:1050px;
        margin-bottom:50px;
      ">
        By bundling regular technical assessments with proactive
        on-site servicing into one predictable yearly rate, you
        eliminate the high costs of emergency reactive repairs.
        Every rate we provide is tailored precisely to your specific
        property layout and required visiting schedule.
      </p>

      <!-- FEATURES -->
      <h3 style="
        font-size:36px;
        margin:0 0 30px;
        font-weight:800;
      ">
        What Your Covered Plan Delivers
      </h3>

      <div class="ppm-grid" style="
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:20px;
        margin-bottom:50px;
      ">

        <div class="ppm-card">
          <h4>Compliant Assessments</h4>
          <p>
            Thorough regulated safety checks carried out at whatever
            interval your building type legally requires.
          </p>
        </div>

        <div class="ppm-card">
          <h4>Proactive Servicing</h4>
          <p>
            Hardware adjustment, closer tuning, smoke/intumescent seal
            evaluations and tolerance testing during every visit.
          </p>
        </div>

        <div class="ppm-card">
          <h4>Built-in Basic Repairs</h4>
          <p>
            Minor preventative fixes completed immediately on-site,
            covered by an agreed yearly threshold per door leaf.
          </p>
        </div>

        <div class="ppm-card">
          <h4>Digital Audit Trail</h4>
          <p>
            Electronic maintenance logs and structural safety
            certification issued after every site visit.
          </p>
        </div>

        <div class="ppm-card">
          <h4>Priority Emergency Bookings</h4>
          <p>
            Front-of-the-line scheduling if unexpected critical
            defects appear between service windows.
          </p>
        </div>

        <div class="ppm-card">
          <h4>Tailored Visit Scheduling</h4>
          <p>
            Quarterly, twice-yearly or annual attendance plans
            depending on your risk assessment requirements.
          </p>
        </div>

      </div>

      <!-- RATES -->
      <div style="
        background:rgba(255,255,255,0.05);
        border:1px solid rgba(255,255,255,0.08);
        border-radius:24px;
        padding:40px;
        margin-bottom:40px;
      ">

        <h3 style="
          margin:0 0 20px;
          font-size:34px;
          font-weight:800;
        ">
          Transparent Baseline Rates
        </h3>

        <p style="
          color:#d1d5db;
          line-height:1.9;
          font-size:18px;
          margin:0 0 20px;
        ">
          Our structured maintenance service plans start from
          £30 per door, per mandated inspection visit.
        </p>

        <p style="
          color:#d1d5db;
          line-height:1.9;
          font-size:18px;
          margin:0;
        ">
          Your finalized bespoke rate will reflect the scale of your
          real estate portfolio and the exact level of the basic repair
          allowance built into the contract.
        </p>

      </div>

      <!-- NOTE -->
      <div style="
        background:#dc2626;
        border-radius:20px;
        padding:30px;
        margin-bottom:40px;
      ">

        <p style="
          margin:0;
          color:#fff;
          line-height:1.9;
          font-size:17px;
        ">
          Please note these flat rates cover routine maintenance and
          safety certification. Major structural overhauls or complete
          ironmongery swaps are priced separately through individual quotations.
        </p>

      </div>

      <!-- CTA -->
      <div style="
        background:#fff;
        border-radius:26px;
        padding:45px;
        color:#111827;
      ">

        <span style="
          color:#dc2626;
          font-size:13px;
          font-weight:700;
          letter-spacing:2px;
          text-transform:uppercase;
          display:block;
          margin-bottom:12px;
        ">
          Request Your Tailored Proposal
        </span>

        <h3 style="
          margin:0 0 20px;
          font-size:42px;
          font-weight:800;
        ">
          Get Your Fixed Proposal Within 48 Hours
        </h3>

        <p style="
          margin:0 0 30px;
          color:#4b5563;
          line-height:1.9;
          font-size:18px;
          max-width:950px;
        ">
          To receive a competitive per-door price structure,
          simply send us your portfolio information.
        </p>

        <!-- LIST -->
        <div style="
          display:grid;
          grid-template-columns:repeat(2,1fr);
          gap:20px;
          margin-bottom:35px;
        ">

          <div style="
            background:#f9fafb;
            border-radius:18px;
            padding:24px;
          ">
            <h4 style="margin:0 0 12px;font-size:20px;">
              Site & Door Counts
            </h4>

            <p style="
              margin:0;
              color:#4b5563;
              line-height:1.8;
            ">
              Number of sites and approximate
              fire door quantities per location.
            </p>

          </div>

          <div style="
            background:#f9fafb;
            border-radius:18px;
            padding:24px;
          ">
            <h4 style="margin:0 0 12px;font-size:20px;">
              Property Information
            </h4>

            <p style="
              margin:0;
              color:#4b5563;
              line-height:1.8;
            ">
              HMO, residential, commercial
              or mixed-use property types and postcodes.
            </p>

          </div>

        </div>

        <!-- LARGE SITE NOTE -->
        <div style="
          background:#111827;
          border-radius:18px;
          padding:28px;
        ">

          <h4 style="
            margin:0 0 12px;
            color:#fff;
            font-size:24px;
          ">
            Large Portfolio Projects
          </h4>

          <p style="
            margin:0;
            color:#d1d5db;
            line-height:1.9;
            font-size:17px;
          ">
            For larger sites managing 50+ doorset units,
            we prefer to arrange a brief walkthrough visit
            to ensure our proposal is fully accurate from day one.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- =========================================================
STYLES
========================================================= -->

<style>

.repair-card{
  background:#f9fafb;
  border:1px solid #e5e7eb;
  border-radius:16px;
  padding:22px;
  display:flex;
  justify-content:space-between;
  gap:20px;
  align-items:center;
  transition:0.3s ease;
}

.repair-card:hover{
  transform:translateY(-4px);
  border-color:#dc2626;
}

.repair-card span{
  font-size:17px;
  font-weight:600;
  color:#111827;
  line-height:1.6;
}

.repair-card strong{
  color:#dc2626;
  font-size:24px;
  font-weight:800;
  white-space:nowrap;
}

.install-card{
  background:#1f2937;
  border-radius:20px;
  padding:30px;
}

.install-card h4{
  margin:0 0 16px;
  font-size:20px;
  color:#fff;
  line-height:1.5;
}

.install-card div{
  color:#f87171;
  font-size:34px;
  font-weight:800;
}

.inspection-card{
  background:#f9fafb;
  border-radius:22px;
  padding:32px;
  text-align:center;
}

.inspection-card h4{
  margin:0 0 14px;
  color:#111827;
  font-size:20px;
}

.inspection-card div{
  color:#dc2626;
  font-size:42px;
  font-weight:800;
  margin-bottom:8px;
}

.inspection-card span{
  color:#6b7280;
}

.ppm-card{
  background:rgba(255,255,255,0.06);
  border-radius:20px;
  padding:28px;
}

.ppm-card h4{
  margin:0 0 14px;
  font-size:22px;
  color:#fff;
}

.ppm-card p{
  margin:0;
  color:#d1d5db;
  line-height:1.9;
}

@media(max-width:991px){

  .repair-grid,
  .install-grid,
  .ppm-grid,
  .inspection-grid{
    grid-template-columns:1fr 1fr !important;
  }

}

@media(max-width:768px){

  h2{
    font-size:40px !important;
  }

  h3{
    font-size:30px !important;
  }

  .repair-grid,
  .install-grid,
  .ppm-grid,
  .inspection-grid{
    grid-template-columns:1fr !important;
  }

  section{
    padding:70px 16px !important;
  }

  div[style*="padding:60px"],
  div[style*="padding:55px"],
  div[style*="padding:50px"]{
    padding:28px !important;
  }

}

</style>
<!-- FD30S / FD60S SECTION -->
<section style="padding:90px 20px;background:#f5f5f5;font-family:Inter,sans-serif;">

  <div style="max-width:1100px;margin:0 auto;">

    <!-- HEADER -->
    <div style="max-width:760px;margin-bottom:45px;">

      <h2 style="
        font-size:52px;
        line-height:1.1;
        font-weight:800;
        color:#111827;
        margin:0 0 24px;
      ">
        FD30S & FD60S Supply, Delivery & Installation
      </h2>

      <p style="
        font-size:20px;
        line-height:1.8;
        color:#4b5563;
        margin:0;
      ">
        Certified doorsets supplied and installed by experienced fire door
        joiners. Every installation is signed off with photographic evidence,
        plug/label verification and a certificate of installation aligned
        to BM TRADA / FIRAS guidance.
      </p>

    </div>

    <!-- TOP CARDS -->
    <div class="fd-grid" style="
      display:grid;
      grid-template-columns:repeat(2,1fr);
      gap:22px;
      margin-bottom:35px;
    ">

      <!-- FD30S -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:16px;
        padding:34px;
        position:relative;
      ">

        <span style="
          position:absolute;
          top:22px;
          right:22px;
          background:#ffe5e5;
          color:#ff3b30;
          font-size:12px;
          font-weight:700;
          padding:6px 10px;
          border-radius:6px;
        ">
          30-minute rated
        </span>

        <h3 style="
          font-size:38px;
          color:#111827;
          margin:0 0 20px;
          font-weight:800;
        ">
          FD30S
        </h3>

        <div style="
          font-size:54px;
          font-weight:800;
          color:#111827;
          margin-bottom:5px;
        ">
          £400 – £750
        </div>

        <div style="
          color:#6b7280;
          font-size:16px;
          margin-bottom:28px;
        ">
          fully supplied & installed
        </div>

        <p style="
          color:#4b5563;
          font-size:17px;
          line-height:1.7;
          margin-bottom:26px;
        ">
          Ideal for flat entrance doors, riser cupboards and corridor sets
          in residential and commercial buildings.
        </p>

        <ul style="
          list-style:none;
          padding:0;
          margin:0;
          display:flex;
          flex-direction:column;
          gap:14px;
        ">

          <li style="display:flex;align-items:center;gap:12px;color:#111827;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certified door leaf
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#111827;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certified frame & architrave
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#111827;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Compliant ironmongery
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#111827;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Installation & sign-off
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#111827;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certificate of installation
          </li>

        </ul>

      </div>

      <!-- FD60S -->
      <div style="
        background:#111827;
        border-radius:16px;
        padding:34px;
        position:relative;
      ">

        <span style="
          position:absolute;
          top:22px;
          right:22px;
          background:#ff3b30;
          color:#fff;
          font-size:12px;
          font-weight:700;
          padding:6px 10px;
          border-radius:6px;
        ">
          60-minute rated
        </span>

        <h3 style="
          font-size:38px;
          color:#fff;
          margin:0 0 20px;
          font-weight:800;
        ">
          FD60S
        </h3>

        <div style="
          font-size:54px;
          font-weight:800;
          color:#ff3b30;
          margin-bottom:5px;
        ">
          £650 – £950
        </div>

        <div style="
          color:#d1d5db;
          font-size:16px;
          margin-bottom:28px;
        ">
          fully supplied & installed
        </div>

        <p style="
          color:#e5e7eb;
          font-size:17px;
          line-height:1.7;
          margin-bottom:26px;
        ">
          For high-risk locations including plant rooms, stairwell separation,
          hospitals and high-rise compartmentation.
        </p>

        <ul style="
          list-style:none;
          padding:0;
          margin:0;
          display:flex;
          flex-direction:column;
          gap:14px;
        ">

          <li style="display:flex;align-items:center;gap:12px;color:#fff;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certified door leaf
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#fff;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certified frame & architrave
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#fff;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Compliant ironmongery
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#fff;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Installation & sign-off
          </li>

          <li style="display:flex;align-items:center;gap:12px;color:#fff;font-size:16px;">
            <span style="color:#ff3b30;">◉</span>
            Certificate of installation
          </li>

        </ul>

      </div>

    </div>

    <!-- BREAKDOWN CARD -->
    <div style="
      background:#fff;
      border:1px solid #e5e7eb;
      border-radius:16px;
      padding:36px;
    ">

      <h3 style="
        font-size:34px;
        color:#111827;
        font-weight:800;
        margin:0 0 34px;
      ">
        Where your money goes — typical FD30S breakdown
      </h3>

      <!-- ROW -->
      <div style="margin-bottom:26px;">

        <div style="
          display:flex;
          justify-content:space-between;
          margin-bottom:10px;
          font-size:16px;
          color:#111827;
          font-weight:600;
        ">
          <span>Certified door leaf</span>
          <span>£190 <span style="color:#ff3b30;">38%</span></span>
        </div>

        <div style="
          width:100%;
          height:10px;
          background:#e5e7eb;
          border-radius:50px;
          overflow:hidden;
        ">
          <div style="
            width:38%;
            height:100%;
            background:#f97316;
            border-radius:50px;
          "></div>
        </div>

      </div>

      <!-- ROW -->
      <div style="margin-bottom:26px;">

        <div style="
          display:flex;
          justify-content:space-between;
          margin-bottom:10px;
          font-size:16px;
          color:#111827;
          font-weight:600;
        ">
          <span>Frame & architrave</span>
          <span>£90 <span style="color:#ff3b30;">18%</span></span>
        </div>

        <div style="
          width:100%;
          height:10px;
          background:#e5e7eb;
          border-radius:50px;
          overflow:hidden;
        ">
          <div style="
            width:18%;
            height:100%;
            background:#f97316;
            border-radius:50px;
          "></div>
        </div>

      </div>

      <!-- ROW -->
      <div style="margin-bottom:26px;">

        <div style="
          display:flex;
          justify-content:space-between;
          margin-bottom:10px;
          font-size:16px;
          color:#111827;
          font-weight:600;
        ">
          <span>Ironmongery (closer, hinges, seals)</span>
          <span>£110 <span style="color:#ff3b30;">22%</span></span>
        </div>

        <div style="
          width:100%;
          height:10px;
          background:#e5e7eb;
          border-radius:50px;
          overflow:hidden;
        ">
          <div style="
            width:22%;
            height:100%;
            background:#f97316;
            border-radius:50px;
          "></div>
        </div>

      </div>

      <!-- ROW -->
      <div style="margin-bottom:26px;">

        <div style="
          display:flex;
          justify-content:space-between;
          margin-bottom:10px;
          font-size:16px;
          color:#111827;
          font-weight:600;
        ">
          <span>Installation labour</span>
          <span>£85 <span style="color:#ff3b30;">17%</span></span>
        </div>

        <div style="
          width:100%;
          height:10px;
          background:#e5e7eb;
          border-radius:50px;
          overflow:hidden;
        ">
          <div style="
            width:17%;
            height:100%;
            background:#f97316;
            border-radius:50px;
          "></div>
        </div>

      </div>

      <!-- ROW -->
      <div style="margin-bottom:16px;">

        <div style="
          display:flex;
          justify-content:space-between;
          margin-bottom:10px;
          font-size:16px;
          color:#111827;
          font-weight:600;
        ">
          <span>Certification & sign-off</span>
          <span>£25 <span style="color:#ff3b30;">5%</span></span>
        </div>

        <div style="
          width:100%;
          height:10px;
          background:#e5e7eb;
          border-radius:50px;
          overflow:hidden;
        ">
          <div style="
            width:5%;
            height:100%;
            background:#f97316;
            border-radius:50px;
          "></div>
        </div>

      </div>

      <p style="
        color:#6b7280;
        font-size:14px;
        margin:25px 0 0;
        line-height:1.7;
      ">
        Volume discounts available from 10+ doorsets. Non-standard sizes
        and vision panel upgrades quoted on application.
      </p>

    </div>

  </div>

</section>

<!-- RESPONSIVE -->
<style>
  @media(max-width:991px) {

    .fd-grid {
      grid-template-columns: 1fr !important;
    }

  }

  @media(max-width:768px) {

    h2 {
      font-size: 38px !important;
    }

    .fd-grid>div {
      padding: 24px !important;
    }

  }
</style>
<section style="padding:90px 20px;background:#f7f7f7;font-family:Inter,sans-serif;">

  <div style="max-width:1120px;margin:auto;">

    <span style="
      color:#ef4444;
      font-size:13px;
      font-weight:700;
      letter-spacing:2px;
      display:inline-block;
      margin-bottom:18px;
      text-transform:uppercase;
    ">
      Key Variables
    </span>

    <h2 style="
      font-size:58px;
      line-height:1.1;
      font-weight:700;
      color:#0f172a;
      margin:0 0 24px;
    ">
      What Affects the Final Cost
    </h2>

    <p style="
      max-width:760px;
      font-size:18px;
      line-height:1.8;
      color:#4b5563;
      margin:0 0 60px;
    ">
      Six variables drive almost every fire door inspection and remediation quote.
      We work transparently across all of them.
    </p>

    <div style="
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:26px;
    ">

      <!-- Card 1 -->
      <div style="
        background:#fff;
        border:1px solid #fca5a5;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fee2e2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          🏢
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Portfolio Size
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          Larger portfolios unlock significantly reduced per-door rates.
        </p>
      </div>

      <!-- Card 2 -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fef2f2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          🛡️
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Door Specification
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          FD30s vs FD60s, glazed panels and certified ironmongery.
        </p>
      </div>

      <!-- Card 3 -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fef2f2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          📍
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Access Conditions
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          Tenanted properties, high-rise access and out-of-hours work.
        </p>
      </div>

      <!-- Card 4 -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fef2f2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          🔧
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Scope of Defects
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          Minor remedials vs full leaf or frame replacement.
        </p>
      </div>

      <!-- Card 5 -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fef2f2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          📋
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Frame Condition
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          Frame integrity affects whether retrofit or replacement applies.
        </p>
      </div>

      <!-- Card 6 -->
      <div style="
        background:#fff;
        border:1px solid #e5e7eb;
        border-radius:18px;
        padding:34px 28px;
        min-height:190px;
      ">

        <div style="
          width:48px;
          height:48px;
          border-radius:12px;
          background:#fef2f2;
          display:flex;
          align-items:center;
          justify-content:center;
          margin-bottom:28px;
          color:#ef4444;
          font-size:20px;
        ">
          🕒
        </div>

        <h3 style="
          font-size:20px;
          font-weight:700;
          color:#111827;
          margin:0 0 14px;
        ">
          Urgency
        </h3>

        <p style="
          font-size:16px;
          line-height:1.7;
          color:#6b7280;
          margin:0;
        ">
          Same-week, emergency and out-of-hours premium scheduling.
        </p>
      </div>

    </div>
  </div>
</section>
<section style="padding:110px 20px;background:#f7f7f7;font-family:Inter,sans-serif;">

  <div style="
    max-width:1120px;
    margin:0 auto;
    display:grid;
    grid-template-columns:1.1fr 0.9fr;
    gap:36px;
    align-items:start;
  ">

    <!-- LEFT CONTENT -->
    <div>

      <span style="
        color:#ef4444;
        font-size:13px;
        font-weight:700;
        letter-spacing:2px;
        text-transform:uppercase;
        display:inline-block;
        margin-bottom:20px;
      ">
        PPM Contracts
      </span>

      <h2 style="
        font-size:58px;
        line-height:1.1;
        font-weight:700;
        color:#0f172a;
        margin:0 0 28px;
      ">
        Annual PPM Contract Pricing
      </h2>

      <p style="
        font-size:18px;
        line-height:1.9;
        color:#4b5563;
        max-width:680px;
        margin:0 0 42px;
      ">
        Planned Preventative Maintenance contracts wrap inspections, minor
        remedials and priority scheduling into a single annual per-door fee —
        making compliance predictable and demonstrably auditable year on year.
      </p>

      <!-- DARK CARD -->
      <div style="
        background:#0b1220;
        border-radius:20px;
        padding:34px 32px;
        max-width:520px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
      ">

        <div style="
          color:#cbd5e1;
          font-size:13px;
          font-weight:700;
          letter-spacing:1px;
          text-transform:uppercase;
          margin-bottom:16px;
        ">
          All-Inclusive
        </div>

        <div style="
          font-size:62px;
          line-height:1;
          font-weight:700;
          color:#ef4444;
          margin-bottom:10px;
        ">
          £35 – £90
        </div>

        <div style="
          color:#ffffff;
          font-size:18px;
          margin-bottom:34px;
        ">
          per door, per year
        </div>

        <!-- FEATURES -->
        <div style="
          display:flex;
          flex-direction:column;
          gap:18px;
        ">

          <div style="display:flex;align-items:center;gap:14px;">
            <span style="color:#ef4444;font-size:18px;">✓</span>
            <span style="color:#ffffff;font-size:17px;">
              Scheduled compliance inspections
            </span>
          </div>

          <div style="display:flex;align-items:center;gap:14px;">
            <span style="color:#ef4444;font-size:18px;">✓</span>
            <span style="color:#ffffff;font-size:17px;">
              Routine maintenance visits
            </span>
          </div>

          <div style="display:flex;align-items:center;gap:14px;">
            <span style="color:#ef4444;font-size:18px;">✓</span>
            <span style="color:#ffffff;font-size:17px;">
              Minor remedials included
            </span>
          </div>

          <div style="display:flex;align-items:center;gap:14px;">
            <span style="color:#ef4444;font-size:18px;">✓</span>
            <span style="color:#ffffff;font-size:17px;">
              Priority emergency scheduling
            </span>
          </div>

          <div style="display:flex;align-items:center;gap:14px;">
            <span style="color:#ef4444;font-size:18px;">✓</span>
            <span style="color:#ffffff;font-size:17px;">
              Annual compliance certificate
            </span>
          </div>

        </div>
      </div>
    </div>

    <!-- RIGHT CARD -->
    <div>

      <div style="
        background:#ffffff;
        border:1px solid #e5e7eb;
        border-radius:20px;
        padding:34px 30px;
      ">

        <!-- TITLE -->
        <div style="
          display:flex;
          align-items:center;
          gap:12px;
          margin-bottom:18px;
        ">
          <span style="color:#ef4444;font-size:20px;">↘</span>

          <h3 style="
            margin:0;
            font-size:34px;
            line-height:1.2;
            font-weight:700;
            color:#0f172a;
          ">
            PPM vs Reactive Maintenance
          </h3>
        </div>

        <p style="
          font-size:16px;
          color:#6b7280;
          margin:0 0 36px;
        ">
          Indicative 5-year cost for a 50-door portfolio.
        </p>

        <!-- BAR 1 -->
        <div style="
          display:flex;
          justify-content:space-between;
          align-items:center;
          margin-bottom:14px;
        ">
          <span style="
            font-size:17px;
            font-weight:600;
            color:#111827;
          ">
            PPM Contract
          </span>

          <span style="
            font-size:17px;
            font-weight:700;
            color:#ef4444;
          ">
            £14,500
          </span>
        </div>

        <div style="
          width:100%;
          height:14px;
          background:#e5e7eb;
          border-radius:999px;
          overflow:hidden;
          margin-bottom:34px;
        ">
          <div style="
            width:45%;
            height:100%;
            background:linear-gradient(90deg,#ef4444,#f97316);
          "></div>
        </div>

        <!-- BAR 2 -->
        <div style="
          display:flex;
          justify-content:space-between;
          align-items:center;
          margin-bottom:14px;
        ">
          <span style="
            font-size:17px;
            font-weight:600;
            color:#111827;
          ">
            Reactive Maintenance
          </span>

          <span style="
            font-size:17px;
            font-weight:700;
            color:#111827;
          ">
            £32,000
          </span>
        </div>

        <div style="
          width:100%;
          height:14px;
          background:#e5e7eb;
          border-radius:999px;
          overflow:hidden;
          margin-bottom:36px;
        ">
          <div style="
            width:100%;
            height:100%;
            background:#0f172a;
          "></div>
        </div>

        <!-- SAVINGS BOX -->
        <div style="
          background:#fef2f2;
          border:1px solid #fecaca;
          border-radius:16px;
          padding:24px;
        ">

          <div style="
            font-size:18px;
            color:#111827;
            margin-bottom:8px;
          ">
            Average saving:
            <span style="
              color:#ef4444;
              font-size:34px;
              font-weight:700;
            ">
              £17,500
            </span>
            over 5 years
          </div>

          <p style="
            margin:0;
            font-size:15px;
            color:#6b7280;
            line-height:1.7;
          ">
            ...plus full audit trail, fewer enforcement risks and predictable
            budgeting.
          </p>

        </div>

      </div>
    </div>

  </div>
</section>

<section
  style="background: linear-gradient(180deg, #0b1220 0%, #09111f 100%); padding: 80px 20px; font-family: Arial, sans-serif; color: #ffffff;">

  <div style="max-width: 1200px; margin: 0 auto;">

    <p
      style="color: #ff2d2d; font-size: 14px; letter-spacing: 2px; font-weight: 700; margin-bottom: 20px; text-transform: uppercase;">
      Risk vs Reward
    </p>

    <h2 style="font-size: 52px; font-weight: 700; margin: 0 0 25px; line-height: 1.2;">
      Compliance vs Non-Compliance
    </h2>

    <p style="font-size: 24px; color: #d1d5db; margin-bottom: 60px; line-height: 1.6;">
      The true cost of fire door compliance is small. The cost of getting it wrong is unlimited.
    </p>

    <div style="display: flex; gap: 30px; flex-wrap: wrap;">

      <!-- Left Card -->
      <div
        style="flex: 1; min-width: 320px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 18px; padding: 35px;">

        <div style="display: flex; align-items: center; margin-bottom: 30px;">

          <div
            style="width: 48px; height: 48px; background: rgba(255,45,45,0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px;">
            <span style="color: #ff2d2d; font-size: 22px;">🛡️</span>
          </div>

          <h3 style="font-size: 34px; margin: 0; font-weight: 700;">
            Compliant Landlord
          </h3>
        </div>

        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Predictable annual budget (£35–£90 per door)
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Full documented audit trail
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Lower insurance premiums
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Protected rental income
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Defensible position vs enforcement
          </li>

          <li style="display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">✔</span>
            Peace of mind for tenants and staff
          </li>
        </ul>
      </div>

      <!-- Right Card -->
      <div
        style="flex: 1; min-width: 320px; background: rgba(120,0,0,0.15); border: 1px solid rgba(255,45,45,0.4); border-radius: 18px; padding: 35px;">

        <div style="display: flex; align-items: center; margin-bottom: 30px;">

          <div
            style="width: 48px; height: 48px; background: #ff2d2d; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 16px;">
            <span style="color: #ffffff; font-size: 22px;">⚠</span>
          </div>

          <h3 style="font-size: 34px; margin: 0; font-weight: 700;">
            Non-Compliance Risks
          </h3>
        </div>

        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Enforcement notices and prohibition orders
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Loss of rental income during voids
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Legal costs and prosecution
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Insurance invalidated or premiums spiked
          </li>

          <li style="margin-bottom: 18px; display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Unlimited fines under the Fire Safety Order
          </li>

          <li style="display: flex; align-items: flex-start; color: #ffffff; font-size: 22px;">
            <span style="color: #ff2d2d; margin-right: 12px;">❗</span>
            Custodial sentences for responsible persons
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section style="background:#f7f7f7; padding:80px 20px; font-family:Arial, sans-serif; color:#111827;">

  <div style="max-width:1200px; margin:0 auto;">

    <!-- Top Section -->
    <div style="margin-bottom:100px;">

      <p
        style="color:#ff3b30; font-size:14px; font-weight:700; letter-spacing:2px; text-transform:uppercase; margin-bottom:18px;">
        Next Steps
      </p>

      <h2 style="font-size:52px; line-height:1.2; margin:0 0 20px; font-weight:700;">
        How to Get Your Fixed-Price Quote
      </h2>

      <p style="font-size:22px; line-height:1.7; color:#4b5563; max-width:850px; margin-bottom:50px;">
        Four ways to start. Whichever you choose, you'll have a fixed-price quote within
        <strong>2 working hours.</strong>
      </p>

      <!-- Cards -->
      <div style="display:flex; gap:24px; flex-wrap:wrap;">

        <!-- Card 1 -->
        <div
          style="flex:1; min-width:240px; background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:28px;">

          <div
            style="width:52px; height:52px; background:#fff1f1; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:24px;">
            <span style="color:#ff3b30; font-size:22px;">📞</span>
          </div>

          <h3 style="font-size:26px; margin:0 0 10px; font-weight:700;">
            Phone
          </h3>

          <p style="font-size:18px; color:#6b7280; margin:0 0 24px;">
            020 3488 2247
          </p>

          <a href="#" style="color:#ff3b30; text-decoration:none; font-size:18px; font-weight:600;">
            Speak to a surveyor →
          </a>
        </div>

        <!-- Card 2 -->
        <div
          style="flex:1; min-width:240px; background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:28px;">

          <div
            style="width:52px; height:52px; background:#fff1f1; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:24px;">
            <span style="color:#ff3b30; font-size:22px;">✉️</span>
          </div>

          <h3 style="font-size:26px; margin:0 0 10px; font-weight:700;">
            Email
          </h3>

          <p style="font-size:18px; color:#6b7280; margin:0 0 24px;">
            quotes@griol.co.uk
          </p>

          <a href="#" style="color:#ff3b30; text-decoration:none; font-size:18px; font-weight:600;">
            Send your brief →
          </a>
        </div>

        <!-- Card 3 -->
        <div
          style="flex:1; min-width:240px; background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:28px;">

          <div
            style="width:52px; height:52px; background:#fff1f1; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:24px;">
            <span style="color:#ff3b30; font-size:22px;">📨</span>
          </div>

          <h3 style="font-size:26px; margin:0 0 10px; font-weight:700;">
            Online Form
          </h3>

          <p style="font-size:18px; color:#6b7280; margin:0 0 24px;">
            Fixed-price within 2 hours
          </p>

          <a href="#" style="color:#ff3b30; text-decoration:none; font-size:18px; font-weight:600;">
            Get a quote →
          </a>
        </div>

        <!-- Card 4 -->
        <div
          style="flex:1; min-width:240px; background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:28px;">

          <div
            style="width:52px; height:52px; background:#fff1f1; border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:24px;">
            <span style="color:#ff3b30; font-size:22px;">📅</span>
          </div>

          <h3 style="font-size:26px; margin:0 0 10px; font-weight:700;">
            Site Survey
          </h3>

          <p style="font-size:18px; color:#6b7280; margin:0 0 24px;">
            Free for portfolios 20+
          </p>

          <a href="#" style="color:#ff3b30; text-decoration:none; font-size:18px; font-weight:600;">
            Book a survey →
          </a>
        </div>

      </div>
    </div>

    <!-- FAQ Section -->
    <div>

      <p
        style="color:#ff3b30; font-size:14px; font-weight:700; letter-spacing:2px; text-transform:uppercase; margin-bottom:18px;">
        Common Questions
      </p>

      <h2 style="font-size:52px; line-height:1.2; margin:0 0 45px; font-weight:700;">
        Fire Door Cost FAQs
      </h2>

      <!-- FAQ Grid -->
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(450px,1fr)); gap:20px;">

        <!-- FAQ Item -->
        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            How much does a fire door inspection cost?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            How much does seal replacement cost?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            How much does a fire door replacement cost?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            Can I replace only the leaf?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            Do you charge call-out fees?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

        <div
          style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px 28px; display:flex; justify-content:space-between; align-items:center;">
          <span style="font-size:20px; font-weight:500;">
            Is remediation cheaper than replacement?
          </span>
          <span style="color:#ff3b30; font-size:28px;">+</span>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- CTA SECTION -->
<section
  style="background: linear-gradient(90deg, #eb1c24 0%, #ff6a1a 100%); padding: 90px 20px; text-align: center; font-family: Arial, sans-serif;">

  <div style="max-width: 1100px; margin: 0 auto;">

    <h2 style="font-size: 64px; line-height: 1.2; color: #ffffff; margin: 0 0 20px; font-weight: 700;">
      Ready for a Fixed-Price Quote?
    </h2>

    <p style="font-size: 22px; color: rgba(255,255,255,0.9); margin-bottom: 40px;">
      We respond within 2 working hours.
    </p>

    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">

      <!-- White Button -->
      <a href="#"
        style="background: #ffffff; color: #111827; text-decoration: none; padding: 18px 34px; border-radius: 10px; font-size: 20px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center;">
        Get a Quote Online
      </a>

      <!-- Transparent Button -->
      <a href="tel:02034882247"
        style="background: transparent; color: #ffffff; text-decoration: none; padding: 18px 34px; border-radius: 10px; border: 2px solid rgba(255,255,255,0.8); font-size: 20px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center;">
        ☎ Call 020 3488 2247
      </a>

    </div>

  </div>
</section>


<!-- RELATED GUIDES SECTION -->
<section style="background: #f7f7f7; padding: 90px 20px; font-family: Arial, sans-serif;">

  <div style="max-width: 1200px; margin: 0 auto;">

    <!-- Heading Row -->
    <div
      style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 50px; flex-wrap: wrap; gap: 20px;">

      <div>
        <p
          style="color: #ff3b30; font-size: 14px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 18px;">
          Resources
        </p>

        <h2 style="font-size: 52px; line-height: 1.2; margin: 0; color: #111827; font-weight: 700;">
          Related Guides
        </h2>
      </div>

      <a href="#" style="color: #ff3b30; text-decoration: none; font-size: 20px; font-weight: 600;">
        All services →
      </a>

    </div>

    <!-- Cards -->
    <div style="display: flex; gap: 24px; flex-wrap: wrap;">

      <!-- Card 1 -->
      <div
        style="flex: 1; min-width: 250px; background: #ffffff; border: 1px solid #e5e7eb; border-radius: 18px; padding: 30px;">

        <div
          style="width: 52px; height: 52px; background: #fff1f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
          <span style="color: #ff3b30; font-size: 22px;">📄</span>
        </div>

        <h3 style="font-size: 28px; line-height: 1.4; margin: 0 0 18px; color: #111827; font-weight: 700;">
          What a Fire Door Inspection Finds
        </h3>

        <p style="font-size: 18px; line-height: 1.7; color: #6b7280; margin-bottom: 28px;">
          The 30+ compliance criteria every certified inspection covers.
        </p>

        <a href="#" style="color: #ff3b30; text-decoration: none; font-size: 18px; font-weight: 600;">
          Read guide →
        </a>
      </div>

      <!-- Card 2 -->
      <div
        style="flex: 1; min-width: 250px; background: #ffffff; border: 1px solid #e5e7eb; border-radius: 18px; padding: 30px;">

        <div
          style="width: 52px; height: 52px; background: #fff1f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
          <span style="color: #ff3b30; font-size: 22px;">📄</span>
        </div>

        <h3 style="font-size: 28px; line-height: 1.4; margin: 0 0 18px; color: #111827; font-weight: 700;">
          Real Cost Example: HMO Project
        </h3>

        <p style="font-size: 18px; line-height: 1.7; color: #6b7280; margin-bottom: 28px;">
          Worked example breakdown of a 24-door HMO remediation in London.
        </p>

        <a href="#" style="color: #ff3b30; text-decoration: none; font-size: 18px; font-weight: 600;">
          Read guide →
        </a>
      </div>

      <!-- Card 3 -->
      <div
        style="flex: 1; min-width: 250px; background: #ffffff; border: 1px solid #f3b0b0; border-radius: 18px; padding: 30px;">

        <div
          style="width: 52px; height: 52px; background: #fff1f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
          <span style="color: #ff3b30; font-size: 22px;">📄</span>
        </div>

        <h3 style="font-size: 28px; line-height: 1.4; margin: 0 0 18px; color: #111827; font-weight: 700;">
          UK Fire Door Compliance Guide
        </h3>

        <p style="font-size: 18px; line-height: 1.7; color: #6b7280; margin-bottom: 28px;">
          Fire Safety (England) Regulations 2022 explained for landlords.
        </p>

        <a href="#" style="color: #ff3b30; text-decoration: none; font-size: 18px; font-weight: 600;">
          Read guide →
        </a>
      </div>

      <!-- Card 4 -->
      <div
        style="flex: 1; min-width: 250px; background: #ffffff; border: 1px solid #f3b0b0; border-radius: 18px; padding: 30px;">

        <div
          style="width: 52px; height: 52px; background: #fff1f1; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
          <span style="color: #ff3b30; font-size: 22px;">📄</span>
        </div>

        <h3 style="font-size: 28px; line-height: 1.4; margin: 0 0 18px; color: #ff3b30; font-weight: 700;">
          Landlord Compliance Guide
        </h3>

        <p style="font-size: 18px; line-height: 1.7; color: #6b7280; margin-bottom: 28px;">
          Your statutory duties under the Regulatory Reform Order 2005.
        </p>

        <a href="#" style="color: #ff3b30; text-decoration: none; font-size: 18px; font-weight: 600;">
          Read guide →
        </a>
      </div>

    </div>

  </div>
</section>

<section style="width:100%; background:#0d1420; padding:70px 0; font-family:Arial, sans-serif;">
  <div
    style="max-width:1100px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:30px; padding:0 20px;">

    <!-- Left Content -->
    <div style="max-width:600px;">
      <h2 style="color:#ffffff; font-size:48px; line-height:1.2; font-weight:700; margin:0 0 20px;">
        Need a certified fire door inspection?
      </h2>

      <p style="color:#c7d0db; font-size:18px; line-height:1.7; margin:0;">
        Stay compliant with UK fire safety regulations. Book a no-obligation site survey
        with our qualified inspectors.
      </p>
    </div>

    <!-- Right Buttons -->
    <div style="display:flex; align-items:center; gap:15px;">

      <!-- Request Button -->
      <a href="#"
        style="display:inline-flex; align-items:center; justify-content:center; background:#ff1f1f; color:#ffffff; text-decoration:none; padding:18px 34px; border-radius:6px; font-size:16px; font-weight:600; box-shadow:0 8px 20px rgba(255,0,0,0.25); transition:0.3s;">
        Request Inspection
      </a>

      <!-- Call Button -->
      <a href="tel:+0000000000"
        style="display:inline-flex; align-items:center; justify-content:center; gap:10px; background:transparent; color:#ffffff; text-decoration:none; padding:18px 30px; border:1px solid rgba(255,255,255,0.2); border-radius:6px; font-size:16px; font-weight:600;">

        <span style="font-size:18px;">📞</span>
        Call Now
      </a>

    </div>
  </div>
</section>

<?php get_footer(); ?>