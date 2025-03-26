<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">

  <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="LT_G_EfdnlIh6YOe04LCAxEQN-uzPQfkaxoQTJy8O1RoI56uaP2LPNNGAKkcg8my8LwZlfFvg_TKNrIvycn4JA" />

  <title>CodePen</title>



  

<style type="text/css">@font-face {font-family:Lato;font-style:normal;font-weight:400;src:url(/cf-fonts/s/lato/5.0.18/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Lato;font-style:normal;font-weight:400;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:normal;font-weight:700;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:normal;font-weight:700;src:url(/cf-fonts/s/lato/5.0.18/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Lato;font-style:normal;font-weight:900;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/900/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:normal;font-weight:900;src:url(/cf-fonts/s/lato/5.0.18/latin/900/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:400;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/400/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:400;src:url(/cf-fonts/s/lato/5.0.18/latin/400/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:700;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/700/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:700;src:url(/cf-fonts/s/lato/5.0.18/latin/700/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:900;src:url(/cf-fonts/s/lato/5.0.18/latin-ext/900/italic.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Lato;font-style:italic;font-weight:900;src:url(/cf-fonts/s/lato/5.0.18/latin/900/italic.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}</style>
  <link rel="stylesheet" href="https://cpwebassets.codepen.io/assets/global/global-29e205b89fa5377a7d301848f69f23b6c1755f42509b9126b14f26ab3c9a2b95.css" media="all" />
  <link rel="stylesheet" href="https://cpwebassets.codepen.io/assets/page/page-f0d7b495e63e1bc150e9d461c0ba20300ce8893aeb3cbf80995b95271e4720ae.css" media="all" />
  <link rel="stylesheet" href="https://cpwebassets.codepen.io/assets/packs/css/everypage-e46cc382.css" />

    <meta property="og:image" content="https://cpwebassets.codepen.io/assets/social/facebook-default-05cf522ae1d4c215ae0f09d866d97413a2204b6c9339c6e7a1b96ab1d4a7340f.png">
<meta property="og:title" content="CodePen">
<meta property="og:description" content="An online code editor, learning environment, and community for front-end web development using HTML, CSS and JavaScript code snippets, projects, and web applications.">


  <link rel="apple-touch-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-touch-de50acbf5d634ec6791894eba4ba9cf490f709b3d742597c6fc4b734e6492a5a.png">


  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



</head>


<body class=" not-team logged-in">

  

  


  <div id="react-page"></div>

  <noscript>

  <input type="checkbox" class="modal-closing-trick" id="modal-closing-trick">

  <div class="overlay noscript-overlay" style="display: block;"></div>

  <div class="modal modal-message group modal-warning">

    <div class="modal-title">CodePen doesn't work very well without JavaScript.</div>

    <p>We're all for progressive enhancement, but CodePen is a bit unique in that it's all about writing and showing front end code, including JavaScript. It's required to use most of the features of CodePen.</p>

    <p>Need to know how to enable it? <a href="http://enable-javascript.com/" target="_blank" rel="noopener">Go here.</a></p>

    <label class="button button-medium" for="modal-closing-trick">Close this, use anyway.</label>

  </div>

</noscript>

   <textarea id="init-data" style="display:none">{&quot;__browser&quot;:{&quot;country&quot;:&quot;BR&quot;,&quot;device&quot;:&quot;unknown_device&quot;,&quot;mobile&quot;:false,&quot;name&quot;:&quot;chrome&quot;,&quot;platform&quot;:&quot;linux&quot;,&quot;version&quot;:&quot;134&quot;},&quot;__constants&quot;:{},&quot;__CPDATA&quot;:{&quot;domain_iframe&quot;:&quot;https://cdpn.io&quot;,&quot;environment&quot;:&quot;production&quot;,&quot;host&quot;:&quot;codepen.io&quot;,&quot;iframe_allow&quot;:&quot;accelerometer *; bluetooth *; camera *; encrypted-media *; display-capture *; geolocation *; gyroscope *; microphone *; midi *; clipboard-read *; clipboard-write *; web-share *; serial *; xr-spatial-tracking *&quot;,&quot;iframe_sandbox&quot;:&quot;allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups-to-escape-sandbox allow-popups allow-presentation allow-same-origin allow-scripts allow-top-navigation-by-user-activation&quot;},&quot;__graphql&quot;:{&quot;data&quot;:{&quot;data&quot;:{&quot;sessionUser&quot;:{&quot;id&quot;:&quot;GWVjRP&quot;,&quot;name&quot;:&quot;Thiago Berson De Sousa&quot;,&quot;title&quot;:&quot;Thiago Berson De Sousa&quot;,&quot;avatar&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?format=auto&amp;version=0&quot;,&quot;currentContext&quot;:{&quot;id&quot;:&quot;GWVjRP&quot;,&quot;title&quot;:&quot;Thiago Berson De Sousa&quot;,&quot;name&quot;:&quot;Thiago Berson De Sousa&quot;,&quot;avatar&quot;:&quot;https://assets.codepen.io/t-1/user-default-avatar.jpg?format=auto&amp;version=0&quot;,&quot;username&quot;:&quot;Thiago-Berson-De-Sousa&quot;,&quot;__typename&quot;:&quot;User&quot;},&quot;currentTeamId&quot;:null,&quot;username&quot;:&quot;Thiago-Berson-De-Sousa&quot;,&quot;admin&quot;:false,&quot;anon&quot;:false,&quot;pro&quot;:false,&quot;verified&quot;:false,&quot;featureFlags&quot;:[],&quot;teams&quot;:[],&quot;__typename&quot;:&quot;User&quot;}}},&quot;url&quot;:&quot;https://codepen.io/graphql&quot;,&quot;api&quot;:&quot;cprails&quot;},&quot;__user&quot;:{&quot;anon&quot;:false,&quot;base_url&quot;:&quot;/Thiago-Berson-De-Sousa/&quot;,&quot;cohorts&quot;:[],&quot;current_team_hashid&quot;:null,&quot;current_team_id&quot;:0,&quot;hashid&quot;:&quot;GWVjRP&quot;,&quot;id&quot;:14203919,&quot;itemType&quot;:&quot;user&quot;,&quot;name&quot;:&quot;Thiago Berson De Sousa&quot;,&quot;paid&quot;:false,&quot;tier&quot;:0,&quot;username&quot;:&quot;Thiago-Berson-De-Sousa&quot;,&quot;created_at&quot;:&quot;2025-03-20T10:54:41.038Z&quot;,&quot;email_verified&quot;:false,&quot;collections_count&quot;:0,&quot;collections_private_count&quot;:0,&quot;followers_count&quot;:0,&quot;followings_count&quot;:0,&quot;pens_count&quot;:1,&quot;pens_private_count&quot;:0,&quot;projects_count&quot;:0,&quot;projects_private_count&quot;:0},&quot;__firebase&quot;:{&quot;config&quot;:{&quot;apiKey&quot;:&quot;AIzaSyBgLAe7N_MdFpuVofMkcQLGwwhUu5tuxls&quot;,&quot;authDomain&quot;:&quot;codepen-store-production.firebaseapp.com&quot;,&quot;databaseURL&quot;:&quot;https://codepen-store-production.firebaseio.com&quot;,&quot;disabled&quot;:false,&quot;projectId&quot;:&quot;codepen-store-production&quot;},&quot;token&quot;:&quot;eyJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJodHRwczovL2lkZW50aXR5dG9vbGtpdC5nb29nbGVhcGlzLmNvbS9nb29nbGUuaWRlbnRpdHkuaWRlbnRpdHl0b29sa2l0LnYxLklkZW50aXR5VG9vbGtpdCIsImNsYWltcyI6eyJvd25lcklkIjoiR1dWalJQIiwiYWRtaW4iOmZhbHNlfSwiZXhwIjoxNzQzMDA5MDMxLCJpYXQiOjE3NDMwMDU0MzEsImlzcyI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInN1YiI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInVpZCI6IkdXVmpSUCJ9.mR735_fvNAErFfWNJ54ZKn341dheRaAYvGCrrsvFMYeI51Zqd3aQEXpmAqqWY6tYQOg8laiT45vK9NNs69a_6Fp20YYTf43khDPocMYxx9Ac-jDBtSFxGMUF-W-tmQzOwsg1XkEME6fZZvKXB__X-wfwIb50FMjRFRx8DXOQr4xGHUOP3w4xC2eh-Bt49K2oEILNXojxA34Npbn6cNWelTfdhA29EKePHpxHRxu-ZA9Lf_zc3zjrYe6YZGHc2bMhdhLz16S8kiixykqxKVFW2kSPG-JxUZSMOTiABq2KkbCjhKlkwP0m3P2sbTjmDZxGvrsMCBd_dIU_h57CLn9h9A&quot;},&quot;__pay_stripe_public_key&quot;:&quot;pk_live_2GndomDfiklqpSNQn8FrGuwZSMIMzha7DkLJqlYe7IR0ihKAlKdiHg68JJc5eVPt68rzAjzAAVXcUwjySHRCsgjQQ00gtRBUFNH&quot;,&quot;__pay_braintree_env&quot;:&quot;production&quot;}</textarea>

  <script src="https://cpwebassets.codepen.io/assets/common/browser_support-2c1a3d31dbc6b5746fb7dacdbc81dd613906db219f13147c66864a6c3448246c.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-54bd34e7e5f9e787775f.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/3-d1c767eaafdb7284a528.chunk.js"></script>
<script src="https://cpwebassets.codepen.io/assets/packs/js/everypage-8469761bfcad7dff4fc1.js"></script>
  

  

</body>

</html>
