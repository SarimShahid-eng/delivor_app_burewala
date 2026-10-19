{{-- Atlassian-style blue theme overrides (primary #1367D7). Included in all layouts. --}}
<style>
    :root { --brand:#1367D7; --brand-dark:#0F54B0; --brand-light:#4C9AFF; --brand-soft:#E9F2FF; }
    .topnav { background:var(--brand) !important; }
    .topnav .navbar-nav .nav-link { color:#fff !important; }
    .topnav .dropdown:hover>.nav-link,.topnav .navbar-nav .nav-link:focus,.topnav .navbar-nav .nav-link:hover { color:#fff !important; border-bottom-color:#fff !important; background:rgba(255,255,255,.12); }
    .navbar-custom { background:#fff !important; }
    .btn-primary,.btn-info { background-color:var(--brand) !important; border-color:var(--brand) !important; color:#fff !important; }
    .btn-primary:hover,.btn-info:hover,.btn-primary:focus,.btn-primary.active { background-color:var(--brand-dark) !important; border-color:var(--brand-dark) !important; }
    .btn-outline-primary { color:var(--brand) !important; border-color:var(--brand) !important; }
    .btn-outline-primary:hover { background:var(--brand) !important; color:#fff !important; }
    a { color:var(--brand); } a:hover { color:var(--brand-dark); }
    .text-primary { color:var(--brand) !important; } .bg-primary { background-color:var(--brand) !important; }
    .badge-primary { background-color:var(--brand) !important; }
    .page-item.active .page-link,.paginate_button.current,.dataTables_wrapper .dataTables_paginate .paginate_button.current { background:var(--brand) !important; border-color:var(--brand) !important; color:#fff !important; }
    .form-control:focus,.select2-container--default.select2-container--focus .select2-selection--multiple { border-color:var(--brand) !important; box-shadow:0 0 0 .15rem rgba(19,103,215,.2) !important; }
    .select2-container--default .select2-results__option--highlighted[aria-selected] { background-color:var(--brand) !important; }
    .custom-control-input:checked~.custom-control-label::before { background-color:var(--brand) !important; border-color:var(--brand) !important; }
    .progress-bar { background-color:var(--brand); }
    .nav-tabs .nav-link.active { color:var(--brand) !important; border-bottom-color:var(--brand) !important; }
    .authentication-bg,.authentication-bg-pattern { background-color:var(--brand) !important; background-image:linear-gradient(135deg,#1976F0 0%,#0F54B0 100%) !important; }
    .logo-box { background:#fff; }
    .brand-logo { display:inline-flex; align-items:center; gap:10px; text-decoration:none !important; }
    .brand-logo img { flex:none; }
    .logo-box .brand-logo { line-height:70px; }
    .logo-sm { overflow:hidden; }
    .brand-logo .brand-name { font-weight:800; font-size:20px; color:var(--brand); letter-spacing:.3px; }
</style>
