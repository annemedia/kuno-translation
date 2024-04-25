// ADD NEW TRANSLATION

// Copy the whole function "translate_en" and rename the copy to eg. "translate_de".
// Translate the text on the right after =>. Don't change the strings on the left ("page_title", "nav_manage_fundraiser", etc.).
// Do NOT translate the parts of text in curly brackets {GUID}, {AMOUNT}, {DATE}, etc.
// Keep the 'quotes' around the translation and the comma after the translation.
// If you need to use single quotes inside the translation, add a slash \ in front, like this \'example\'
// or use a ‘smart quote’ like this ’ instead.
// HTML is allowed in translations. Do NOT translate any HTML tags, classes, or URL links.

// HOW TO SUBMIT COMPLETED TRANSLATION
// a) Fork this repo and submit a  new file via pull request For example, translation_de.php... https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request?tool=webui
// or
// b) simply paste it here https://paste.sethforprivacy.com/ and share the link with us on X at https://x.com/annemedia_web

// Thank you for taking the time to help the Monero Community.


function translate_en($string) {
  static $strings = array(
    'site_name' => 'Kuno',
    'page_title' => 'Kuno – Fundraise with Monero',
    'page_title_error' => 'Error | Kuno – Fundraise with Monero',
    'page_title_search' => 'Search | Kuno – Fundraise with Monero',
    'page_title_fediverse' => 'Fediverse | Kuno – Fundraise with Monero',
    'page_title_reset_password' => 'Reset Password | Kuno – Fundraise with Monero',
    'page_title_edit_fundraiser' => 'Edit Fundraiser | Kuno – Fundraise with Monero',
    'page_title_new_fundraiser' => 'New Fundraiser | Kuno – Fundraise with Monero',
    'pagination' => 'Page {NUM} of {NUM_PAGES}',
    'pagination_fundraisers' => 'Displaying {START}-{END} of {TOTAL} fundraisers',
    'pagination_donations' => 'Displaying {START}-{END} of {TOTAL} donations',
    'pagination_submit' => 'Go',
    'nav_manage_fundraiser' => 'Manage Fundraisers',
    'nav_search' => 'Search fundraisers...',
    'nav_fundraiser_progress' => 'Fundraiser progress:',
    'nav_edit_fundraiser' => 'Edit fundraiser:',
    'nav_logout' => 'Logout',
    'footer_description' => 'Fundraise with Monero',
    'footer_contact' => 'Contact: support [at] anne.media',
    'footer_language' => 'Language:',
    'footer_light_mode' => 'Light Mode',
    'footer_dark_mode' => 'Dark Mode',
    'footer_manage_fundraiser' => 'Manage your fundraiser:',
    'footer_new_fundraiser' => 'New Fundraiser',
    'footer_edit_fundraiser' => 'Edit Fundraiser',
    'footer_reset_password' => 'Reset Password',
    'footer_quick_links' => 'Quick Links:',
    'footer_search_fundraisers' => 'Search Fundraisers',
    'footer_search_fediverse' => 'Search Fediverse',
    'footer_marketplace' => 'Marketplace',
    'footer_rss_feed' => 'RSS Feed',
    'footer_faq' => 'FAQ',
    'email_new_donation_subject' => '[Kuno] New {DONATION} XMR donation to #{GUID}',
    'email_new_donation_body' => 'Your fundraiser received a new donation!
         <br><br>Fundraiser: {TITLE}
         <br>Donation: {DONATION} XMR
         <br>Date: {DATE}
         <br><br>Total donations: {TOTAL} XMR
         <br>Total supporters: {SUPPORTERS}
         <br>Visit your fundraiser: https://kuno.anne.media/{TYPE}/{GUID}/
         <br><br>Deactivate email notifications here:
         <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
    'email_reset_password_subject' => '[Kuno] Reset password',
    'email_reset_password_body' => 'Visit this link to reset your password: {URL} or enter this code: {CODE} (Valid for 24 hours)',
    'homepage_title' => 'Easy fundraising <br> for everyone',
    'homepage_subtitle' => 'Raise money or donate to a good cause with Monero',
    'homepage_point1' => 'Start a fundraiser for free',
    'homepage_point2' => 'Receive Monero (which you can exchange to cash)',
    'homepage_point3' => 'Zero fees, works globally, no bank account required',
    'homepage_button_start_fundraiser' => 'Start a fundraiser',
    'homepage_button_browse_fundraisers' => 'Browse fundraisers',
    'homepage_bar' => 'The fair alternative to GoFundMe and Kickstarter',
    'homepage_heading_browse_fundraisers' => 'Browse {AMOUNT} fundraisers',
    'homepage_heading_total_raised' => 'Over {AMOUNT} XMR raised!',
    'homepage_top_categories' => 'Top Categories',
    'homepage_recent_donations' => 'Recent Donations',
    'homepage_all_categories' => 'All categories',
    'homepage_launch_in_one_click' => 'Launch your fundraiser in 1 click',
    'homepage_get_started_free' => 'Get started for free',
    'homepage_info_heading1' => 'Monero is cash for the internet',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                 Monero is a fast and secure way to send and receive money online.
                </p>
                <p class="monero-info-p kuno">
                 No bank account, application or government ID is required. Simply download a wallet for your phone or computer to send and receive money worldwide with one click.
                </p>
                <p class="monero-info-p kuno">
                Monero’s simplicity and accessibility makes it an ideal payment method for online stores, remote work, remittances, tips, fundraisers and more.
                </p>',
    'homepage_link_download_mobile' => 'Download for mobile',
    'homepage_link_download_desktop' => 'Download for desktop',
    'homepage_info_heading2' => 'Uncensorable donations',
    'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                With Monero, your money belongs to you.
                </p>
                <p class="monero-info-p kuno">
                Monero is peer-to-peer software and doesn’t rely on third parties or corporations. Transactions can’t be censored, funds can’t be frozen and users can’t be deplatformed.
                </p>
                <p class="monero-info-p kuno">
                Whether you raise funds with Monero or donate to a good cause, you can have peace of mind that the recipient receives 100% of the donation.
                </p>',
    'homepage_link_official_website' => 'Official website',
    'homepage_link_overview' => 'Overview',
    'homepage_link_buy_monero' => 'Buy Monero',
    'homepage_info_heading3' => 'Spend it anywhere',
    'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                Exchange Monero to cash, shop online or pay bills.
                </p>
                <p class="monero-info-p kuno">
                It’s easy to exchange Monero to physical cash with <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> or a <a href="https://coinatmradar.com">Crypto ATM</a> (no bank account required).
                </p>
                <p class="monero-info-p kuno">
                Marketplaces like <a href="https://moneromarket.io">MoneroMarket</a> and directories like <a href="https://monerica.com">Monerica</a> and <a href="https://acceptedhere.io">AcceptedHere</a> help you to buy what you need with Monero.
                </p>
                <p class="monero-info-p kuno">
                In addition, <a href="https://cakepay.com">CakePay</a> and <a href="https://coincards.com">CoinCards</a> offer prepaid Visa cards and gift cards to thousands of businesses. Personal shoppers like <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> and <a href="https://shopinbit.com">ShopInBit</a> offer a convenient way to pay invoices with Monero.
                </p>
                <p class="monero-info-p kuno">
                Monero’s flexibility makes it easy to raise funds to pay bills, kickstart your project or support a charity.
                </p>',
    'homepage_link_exchange_to_cash' => 'Exchange to cash',
    'homepage_link_shop_online' => 'Shop online',
    'homepage_link_marketplace' => 'Marketplace',
    'homepage_use_case_heading1' => 'For charities',
    'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                  A local cat shelter needs donations for cat food and vet bills.
                </p>
                <p class="use-case-p kuno">
                  They setup a Kuno Fundraiser, share the link in social media and receive donations.
                </p>
                <p class="use-case-p kuno">
                  The shelter uses the fundraised Monero to buy Petsmart gift cards with CakePay and withdraws cash to pay the vet bill with a Crypto ATM.
                </p>
                <p class="use-case-p kuno">
                  Each donor receives an update with photos of the cats.
                </p>',
    'homepage_use_case_heading2' => 'For individuals',
    'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                  Alice needs to raise money for medical bills.
                </p>
                <p class="use-case-p kuno">
                  Her daughter helps her to setup a Kuno Fundraiser and shares it with their community.
                </p>
                <p class="use-case-p kuno">
                  They collect enough money and exchange it to cash with LocalMonero.
                </p>
                <p class="use-case-p kuno">
                  Alice writes a heartfelt thank you letter for each donor as a token of appreciation.
                </p>',
    'homepage_use_case_heading3' => 'For startups',
    'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                  An indie dev wants to create a new game.
                </p>
                <p class="use-case-p kuno">
                  He sets up a Kuno Fundraiser and shares it with gaming communities.
                </p>
                <p class="use-case-p kuno">
                  He reaches the goal and uses the funds to hire Monero-friendly artists from MoneroMarket and buy game assets with a CakePay virtual debit card.
                </p>
                <p class="use-case-p kuno">
                  Each donor gets a free copy of the game.
                </p>',
    'homepage_use_case_heading4' => 'For content creators',
    'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                  A band uploads their covers and original music to Youtube.
                </p>
                <p class="use-case-p kuno">
                  They setup a Kuno Donation Page to receive Monero donations.
                </p>
                <p class="use-case-p kuno">
                  Fans can also suggest songs or comment during livestreams by making a donation.
                </p>
                <p class="use-case-p kuno">
                  This offers a better way to sustainably monetize their content, compared to ads.
                </p>',
    'homepage_use_case_heading5' => 'For you',
    'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                  With Kuno, everyone can raise money for their project, cause or startup.
                </p>
                <p class="use-case-p kuno">
                  All you need is a Monero wallet and a goal.
                </p>',
    'fundraiser_heading_goal' => 'Goal',
    'fundraiser_heading_raised' => 'Raised',
    'fundraiser_heading_percentage_funded' => 'funded',
    'fundraiser_heading_donations' => 'Donations',
    'fundraiser_heading_supporters' => 'Supporters',
    'fundraiser_heading_comments' => 'Comments',
    'fundraiser_heading_support' => 'Support',
    'fundraiser_heading_share' => 'Share',
    'fundraiser_heading_about' => 'About',
    'fundraiser_heading_photos' => 'Photos',
    'fundraiser_heading_contact' => 'Contact',
    'fundraiser_heading_date' => 'Published:',
    'fundraiser_heading_supporters' => 'Supporters',
    'fundraiser_heading_new_comment' => 'Write a comment',
    'fundraiser_heading_new_fundraiser' => 'New Fundraiser',
    'fundraiser_heading_edit_fundraiser' => 'Edit Fundraiser',
    'fundraiser_heading_logout' => 'Logout',
    'fundraiser_support_text' => 'Send any amount of Monero to:',
    'fundraiser_share_text' => 'Copy the link to share this fundraiser with friends or social media:',
    'fundraiser_open_in_wallet' => 'Open in wallet',
    'fundraiser_info_point1' => 'You donate directly to the recipient’s wallet',
    'fundraiser_info_point2' => 'No middlemen or fees',
    'fundraiser_info_point3' => 'Donations are synced every 5 minutes',
    'fundraiser_full_size_photo' => 'Full-size photo',
    'fundraiser_no_donations' => 'No donations yet',
    'fundraiser_supporters' => '{AMOUNT} supporters',
    'fundraiser_button_support' => 'Support',
    'fundraiser_donate_with_monero' => 'Donate with Monero:',
    'fundraiser_comment_form_placeholder_txid' => 'TXID',
    'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Example: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
    'fundraiser_comment_form_placeholder_email' => 'Email (optional, for fundraiser rewards)',
    'fundraiser_comment_form_placeholder_comment' => 'Write a public comment',
    'fundraiser_comment_form_submit' => 'Comment',
    'search' => 'Search',
    'search_heading' => 'Search fundraisers',
    'search_text' => 'Search fundraisers...',
    'search_sort_by_new' => 'Sort by new',
    'search_sort_by_recently_donated' => 'Sort by recently donated',
    'search_sort_by_percentage_funded' => 'Sort by percentage funded',
    'search_sort_by_goal' => 'Sort by goal',
    'search_all_categories' => 'All categories',
    'search_no_fundraisers_found' => 'No fundraisers found',
    'search_fediverse_heading' => 'Search Fediverse',
    'search_fediverse_text' => 'Search Fediverse fundraisers...',
    'search_fediverse_no_fundraisers_found' => 'No Fediverse fundraisers found',
    'search_fediverse_peers_list' => 'List of federated instances:',
    'login_invite_code_heading' => 'New Fundraiser',
    'login_invite_code_text' => 'Enter an invite code to start a new fundraiser.',
    'login_invite_code_note' => 'If you don’t have an invite code, please contact support.',
    'login_invite_code_form' => 'Invite code',
    'login_invite_code_form_placeholder' => 'Invite code',
    'login_invite_code_submit' => 'Continue',
    'login_fundraiser_form_fundraiser' => 'Fundraiser',
    'login_fundraiser_heading' => 'Edit Fundraiser',
    'login_fundraiser_text' => 'Enter the fundraiser code and password to edit your fundraiser.',
    'login_fundraiser_note' => 'The code is in the URL:',
    'login_fundraiser_forgot_password' => 'Forgot password?',
    'login_fundraiser_form_fundraiser' => 'Fundraiser',
    'login_fundraiser_form_fundraiser_placeholder' => 'Fundraiser code (e.g. ae21)',
    'login_fundraiser_form_password' => 'Password',
    'login_fundraiser_form_password_placeholder' => 'Password',
    'login_fundraiser_form_submit' => 'Edit Fundraiser',
    'edit_fundraiser_heading_fundraiser_details' => 'Fundraiser details',
    'edit_fundraiser_fundraiser_details_text' => 'Describe your fundraiser and add photos.',
    'edit_fundraiser_form_optional' => '(Optional)',
    'edit_fundraiser_form_more_info' => '(More info)',
    'edit_fundraiser_form_title' => 'Title',
    'edit_fundraiser_form_title_placeholder' => 'Fundraiser title',
    'edit_fundraiser_form_photo' => 'Photo',
    'edit_fundraiser_form_additional_photos' => 'Additional photos',
    'edit_fundraiser_form_description' => 'Description',
    'edit_fundraiser_form_description_placeholder' => 'Describe your fundraiser. Add fundraiser rewards, milestones or contact details, if necessary.',
    'edit_fundraiser_form_tags' => 'Tags',
    'edit_fundraiser_form_tags_placeholder' => 'Category, tags, etc.',
    'edit_fundraiser_form_contact' => 'Contact',
    'edit_fundraiser_form_contact_placeholder' => 'Email, website, Twitter, Matrix, etc.',
    'edit_fundraiser_form_visibility' => 'Set fundraiser to private (not displayed in search results, donors will need the direct link)',
    'edit_fundraiser_heading_goal' => 'Goal',
    'edit_fundraiser_goal_text' => 'Set your goal and Monero address.',
    'edit_fundraiser_get_wallet' => 'No Monero wallet? Get one here.',
    'edit_fundraiser_form_goal' => 'Goal',
    'edit_fundraiser_form_goal_placeholder' => 'Goal (XMR)',
    'edit_fundraiser_form_donation_page' => 'No goal – I want to make a Donation Page',
    'edit_fundraiser_form_monero_address' => 'Monero address',
    'edit_fundraiser_form_monero_address_placeholder' => 'Example: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
    'edit_fundraiser_form_view_key' => 'Secret view key',
    'edit_fundraiser_form_view_key_placeholder' => 'Example: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
    'edit_fundraiser_heading_password' => 'Password',
    'edit_fundraiser_password_text' => 'Set a password to edit your fundraiser later.',
    'edit_fundraiser_widthdrawal_warning' => "Avoid withdrawing partial balances during ongoing fundraisers. Monero uses full balances for payments, leaving the remaining amounts as new transactions. This would be falsely calculated as a donation, and your fundraiser progress will be inaccurate. If you need to use funds on the go, always withdraw your full balance, leaving no 'change'.",
    'edit_fundraiser_form_email' => 'Email',
    'edit_fundraiser_form_email_placeholder' => 'Email (optional, for password resets)',
    'edit_fundraiser_form_password' => 'Password',
    'edit_fundraiser_form_new_password_placeholder' => 'Password',
    'edit_fundraiser_form_edit_password_placeholder' => 'Password (leave blank if no change)',
    'edit_fundraiser_form_email_notifications' => 'Email me when my fundraiser receives a new donation',
    'edit_fundraiser_form_submit_edit' => 'Update Fundraiser',
    'edit_fundraiser_form_submit_new' => 'Start Fundraiser',
    'edit_fundraiser_heading_supporters' => 'Fundraiser Supporters',
    'edit_fundraiser_supporters_text' => 'If a supporter has entered their email address, you will see it here (e.g. for fundraiser rewards).',
    'edit_fundraiser_no_supporters' => 'No email submissions yet',
    'edit_fundraiser_supporters_email' => 'Email',
    'edit_fundraiser_supporters_comment' => 'Comment',
    'edit_fundraiser_supporters_amount' => 'Amount',
    'edit_fundraiser_supporters_txid' => 'TXID',
    'edit_fundraiser_supporters_tx_key' => 'TX Key',
    'edit_fundraiser_supporters_date' => 'Date',
    'edit_fundraiser_heading_manage_fundraiser' => 'Manage Fundraiser',
    'edit_fundraiser_fix_view_key' => 'Please add a valid view key in order to reactivate your fundraiser.',
    'edit_fundraiser_deactivate_fundraiser' => 'Deactivate Fundraiser',
    'edit_fundraiser_reactivate_fundraiser' => 'Reactivate Fundraiser',
    'edit_fundraiser_delete_fundraiser' => 'Delete Your Data',
    'reset_password_heading' => 'Reset Password',
    'reset_password_description' => 'Enter the fundraiser code and your email address to reset your password.',
    'reset_password_note' => '(If you didn’t add an email address, please contact support.)',
    'reset_password_form_fundraiser' => 'Fundraiser',
    'reset_password_form_fundraiser_placeholder' => 'Fundraiser code (e.g. ae21)',
    'reset_password_form_email' => 'Email',
    'reset_password_form_email_placeholder' => 'Email',
    'reset_password_form_confirmation_code' => 'Confirmation code',
    'reset_password_form_confirmation_code_placeholder' => 'Confirmation code',
    'reset_password_form_new_password' => 'New password',
    'reset_password_form_new_password_placeholder' => 'New password',
    'reset_password_form_submit' => 'Reset Password',
    'success' => 'Success',
    'success_form_submitted' => 'Form successfully submitted',
    'success_new_fundraiser' => 'Your fundraiser is active: <a href="https://kuno.anne.media/fundraiser/{GUID}/">View your fundraiser here</a><br>Bookmark this link to edit your fundraiser: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edit fundraiser #{GUID}</a>',
    'success_new_donation_page' => 'Your donation page is active: <a href="https://kuno.anne.media/donate/{GUID}/">View your donation page here</a><br>Bookmark this link to edit your donation page: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edit donation page #{GUID}</a>',
    'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Your fundraiser has been updated.</a>',
    'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Click here to edit your fundraiser</a>',
    'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Your donation page has been updated.</a>',
    'success_fundraiser_deactivated' => 'Fundraiser deactivated',
    'success_fundraiser_reactivated' => 'Fundraiser reactivated',
    'success_fundraiser_deleted' => 'Fundraiser deleted',
    'success_valid_invite_code' => 'Valid invite code. You can now start a fundraiser.',
    'success_valid_confirmation_code' => 'Valid confirmation code',
    'success_check_email_for_password_reset_code' => 'Check your email address for a password reset code',
    'success_password_reset' => 'Password changed, you can now <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">edit your fundraiser</a>',
    'success_comment_sent' => 'Comment sent!',
    'success_image_uploaded' => 'Image uploaded',
    'error' => 'Error',
    'error_please_refresh' => 'Please refresh and try again.',
    'error_form_expired' => 'Form expired, please refresh',
    'error_form_ratelimited' => 'Ratelimited, please wait {RATELIMIT} seconds',
    'error_session_expired' => 'Session expired, please login again',
    'error_page_not_found' => 'Page not found',
    'error_fundraiser_not_found' => 'Fundraiser not found',
    'error_email_not_found' => 'No email address is set, please contact support',
    'error_invalid_email' => 'Please enter a valid email address',
    'error_invalid_email_for_notifications' => 'Please enter a valid email address to enable notifications',
    'error_invalid_confirmation_code' => 'Confirmation code is invalid or expired',
    'error_invalid_monero_address' => 'Invalid Monero address (Please enter your primary address, which starts with 4)',
    'error_invalid_view_key' => 'Invalid view key (Please enter your private/secret view key)',
    'error_invalid_address' => 'Invalid Monero address (Please enter your primary address, which starts with 4)',
    'error_entered_public_view_key' => 'Invalid view key (Please enter your private/secret view key, not public view key)',
    'error_entered_public_spend_key' => 'Invalid view key (Please enter your private/secret view key, not public spend key)',
    'error_entered_private_spend_key' => 'Invalid view key (Please enter your private/secret view key, not private spend key)',
    'error_invalid_private_view_key' => 'Invalid view key (Please enter your private/secret view key)',
    'error_invalid_txid' => 'Invalid TXID',
    'error_invalid_tx_key' => 'Please enter a valid TX key (also known as TX proof)',
    'error_invalid_txid' => 'Please enter a valid invite code',
    'error_incorrect_email' => 'Incorrect email address',
    'error_incorrect_password' => 'Incorrect password',
    'error_monero_address_already_used' => 'There is already a fundraiser/donation page with this Monero address',
    'error_missing_fundraiser_code_or_email' => 'Please enter your fundraiser code and email address',
    'error_missing_password_reset_code_or_password' => 'Please enter your password reset code and new password',
    'error_missing_txid_or_tx_key' => 'Please enter both the TXID and TX key (also known as TX proof)',
    'error_missing_password' => 'Please enter your password',
    'error_missing_view_key' => 'Please enter a valid private view key',
    'error_title_too_long' => 'Title must be between 1-80 characters',
    'error_description_too_long' => 'Description must be shorter than 8000 characters',
    'error_tags_too_long' => 'Tags must be shorter than 250 characters',
    'error_contact_details_too_long' => 'Contact details must be shorter than 250 characters',
    'error_goal_must_be_positive' => 'Fundraiser goal must be a positive number',
    'error_image_incorrect_file_type' => 'Image must be a PNG or JPEG',
    'error_image_maximum_image_size' => 'Max image size 2 MB',
    'error_image_invalid' => 'Invalid image',
    'error_image_storage_full' => 'Storage full',
    'error_image_missing' => 'Please upload an image',
    'translate_help' => 'It would be fantastic if Kuno was accessible in more languages. Help us with translations at <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
    'wallets_header' => 'Monero: <span class="text3">Wallet Choices</span>',
    'monero_gui_wallet' => 'An open-source graphical user interface (GUI) wallet developed by the Monero community, completely free to use, suitable for both beginners and advanced users.',
    'cake_wallet' => 'Securely store, send and exchange your crypto with ease. Privately buy gift cards and pay at the counter with crypto, piece of cake.',
    'monerujo_wallet' => 'Android Wallet for Monero. With Monerujo, you can seamlessly move back and forth between several wallets. Making a new one is as simple as a few taps.',
    'feather_wallet' => 'Feather is a free, open-source Monero wallet for Linux, Tails, Windows and macOS. Easy-to-use, small, fast and beginner friendly.'    
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}

function translate_eo($string) {
  static $strings = array(
    'site_name' => 'Kuno',
    'page_title' => 'Kuno – Monkolektu kun Monero',
    'page_title_error' => 'Eraro | Kuno – Monkolektu kun Monero',
    'page_title_search' => 'Serĉo | Kuno – Monkolektu kun Monero',
    'page_title_fediverse' => 'Fediverso | Kuno – Monkolektu kun Monero',
    'page_title_reset_password' => 'Restarigu pasvorton | Kuno – Monkolektu kun Monero',
    'page_title_edit_fundraiser' => 'Redaktu monkolekton | Kuno – Monkolektu kun Monero',
    'page_title_new_fundraiser' => 'Nova monkolekto | Kuno – Monkolektu kun Monero',
    'pagination' => 'Paĝo {NUM} el {NUM_PAGES}',
    'pagination_fundraisers' => 'Montrante {START}-{END} el {TOTAL} monkolektoj',
    'pagination_donations' => 'Montrante {START}-{END} of {TOTAL} donacoj',
    'pagination_submit' => 'Iru',
    'nav_manage_fundraiser' => 'Administru monkolekton',
    'nav_search' => 'Serĉu monkolektojn...',
    'nav_fundraiser_progress' => 'Monkolekta progreso:',
    'nav_edit_fundraiser' => 'Redaktu monkolekton:',
    'nav_logout' => 'Elsalutu',
    'footer_description' => 'Monkolektu kun Monero',
    'footer_contact' => 'Kontakto: support [at] anne.media',
    'footer_language' => 'Lingvo:',
    'footer_light_mode' => 'Luma reĝimo',
    'footer_dark_mode' => 'Malluma reĝimo',
    'footer_manage_fundraiser' => 'Administru vian monkolekton:',
    'footer_new_fundraiser' => 'Nova monkolekto',
    'footer_edit_fundraiser' => 'Redaktu monkolekton',
    'footer_reset_password' => 'Restarigu pasvorton',
    'footer_quick_links' => 'Rapidaj ligoj:',
    'footer_search_fundraisers' => 'Serĉu monkolektojn',
    'footer_search_fediverse' => 'Serĉu Fediverson',
    'footer_marketplace' => 'Merkato',
    'footer_rss_feed' => 'RSS-fluo',
    'footer_faq' => 'FAQ',
    'email_new_donation_subject' => '[Kuno] Nova {DONATION} XMR donaco al #{GUID}',
    'email_new_donation_body' => 'Via monkolekto ricevis novan donacon!
         <br><br>Monkolekto: {TITLE}
         <br>Donaco: {DONATION} XMR
         <br>Dato: {DATE}
         <br><br>Totalaj donacoj: {TOTAL} XMR
         <br>Totalaj subtenantoj: {SUPPORTERS}
         <br>Vizitu vian monkolekton: https://kuno.anne.media/{TYPE}/{GUID}/
         <br><br>Malaktivigu retpoŝtajn sciigojn ĉi tie:
         <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
    'email_reset_password_subject' => '[Kuno] Restarigu pasvorton',
    'email_reset_password_body' => 'Vizitu ĉi tiun ligon por restarigi vian pasvorton: {URL} aŭ enigu ĉi tiun kodon: {CODE} (valida dum 24 horoj)',
    'homepage_title' => 'Facila monkolektado <br> por ĉiuj',
    'homepage_subtitle' => 'Akiru monon aŭ donacu al bona afero kun Monero',
    'homepage_point1' => 'Komencu monkolekton senpage',
    'homepage_point2' => 'Ricevu Moneron (kiun vi povas interŝanĝi al kontanto)',
    'homepage_point3' => 'Nulaj kotizoj, tutmonde disponebla, ne necesas bankkonto',
    'homepage_button_start_fundraiser' => 'Komencu monkolekton',
    'homepage_button_browse_fundraisers' => 'Foliumu monkolektojn',
    'homepage_bar' => 'La justa alternativo al GoFundMe kaj Kickstarter',
    'homepage_heading_browse_fundraisers' => 'Foliumu {AMOUNT} monkolektojn',
    'homepage_heading_total_raised' => 'Pli ol {AMOUNT} XMR kolektitaj!',
    'homepage_top_categories' => 'Popularaj kategorioj',
    'homepage_recent_donations' => 'Lastatempaj donacoj',
    'homepage_all_categories' => 'Ĉiuj kategorioj',
    'homepage_launch_in_one_click' => 'Komencu vian monkolekton per unu klako',
    'homepage_get_started_free' => 'Komencu senpage',
    'homepage_info_heading1' => 'Monero estas kontanto por la interreto',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                Monero estas rapida kaj sekura maniero sendi kaj ricevi monon interrete.
                </p>
                <p class="monero-info-p kuno">
                Ne necesas bankkonto, aplikaĵo aŭ registara identigilo. Simple elŝutu monujon por via telefono aŭ komputilo por sendi kaj ricevi monon tutmonde per unu klako.
                </p>
                <p class="monero-info-p kuno">
                La simpleco kaj alirebleco de Monero igas ĝin ideala pagmetodo por interretaj butikoj, fora laboro, monsendaĵoj, konsiletoj, monkolektoj kaj pli.
                </p>',
    'homepage_link_download_mobile' => 'Elŝutu por telefono',
    'homepage_link_download_desktop' => 'Elŝutu por komputilo',
    'homepage_info_heading2' => 'Necenzureblaj donacoj',
    'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                Kun Monero, via mono apartenas al vi.
                </p>
                <p class="monero-info-p kuno">
                Monero estas programaro kaj ne dependas de triaj aŭ korporacioj. Transakcioj ne povas esti cenzuritaj, fondusoj ne povas esti frostigitaj kaj uzantoj ne povas esti deplatformitaj.
                </p>
                <p class="monero-info-p kuno">
                Ĉu vi kolektas monon kun Monero aŭ donacas al bona afero, vi povas havi trankvilon, ke la ricevanto ricevas 100% de la donaco.
                </p>',
    'homepage_link_official_website' => 'Oficiala retejo',
    'homepage_link_overview' => 'Superrigardo',
    'homepage_link_buy_monero' => 'Aĉetu Moneron',
    'homepage_info_heading3' => 'Elspezu ĝin ie ajn',
    'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                Ŝanĝu Moneron por kontanti, aĉetu interrete aŭ pagu fakturojn.
                </p>
                <p class="monero-info-p kuno">
                Estas facile interŝanĝi Moneron al fizika mono kun <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> aŭ <a href="https://coinatmradar.com">Crypto ATM</a> (ne necesas bankkonto).
                </p>
                <p class="monero-info-p kuno">
                Merkatoj kiel <a href="https://moneromarket.io">MoneroMarket</a> kaj adresaroj kiel <a href="https://monerica.com">Monerica</a> kaj <a href="https://acceptedhere.io">AcceptedHere</a> helpas vin aĉeti tion, kion vi bezonas per Monero.
                </p>
                <p class="monero-info-p kuno">
                Krome, <a href="https://cakepay.com">CakePay</a> kaj <a href="https://coincards.com">CoinCards</a> ofertas antaŭpagitajn Visa-kartojn kaj donackartojn al miloj da entreprenoj. Personaj aĉetantoj kiel <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> kaj <a href="https://shopinbit.com">ShopInBit</a> ofertas oportunan manieron pagi fakturojn per Monero.
                </p>
                <p class="monero-info-p kuno">
                La fleksebleco de Monero faciligas kolekti monon por pagi fakturojn, komenci vian projekton aŭ subteni bonfaradon.
                </p>',
    'homepage_link_exchange_to_cash' => 'Ŝanĝu al kontanto',
    'homepage_link_shop_online' => 'Aĉetu interrete',
    'homepage_link_marketplace' => 'Merkato',
    'homepage_use_case_heading1' => 'Por bonfaradoj',
    'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                  Loka katŝirmejo bezonas donacojn por katmanĝaĵo kaj bestkuracistoj.
                </p>
                <p class="use-case-p kuno">
                  Ili starigas Kuno monkolekton, kunhavigas la ligon en sociaj amaskomunikiloj kaj ricevas donacojn.
                </p>
                <p class="use-case-p kuno">
                  La ŝirmejo uzas la kolektitajn Monerojn por aĉeti Petsmart-donackartojn kun CakePay kaj eltiras kontanton por pagi la fakturon per Crypto ATM.
                </p>
                <p class="use-case-p kuno">
                  Ĉiu donacanto ricevas ĝisdatigon kun fotoj de la katoj.
                </p>',
    'homepage_use_case_heading2' => 'Por individuoj',
    'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                  Alice bezonas kolekti monon por medicinaj fakturoj.
                </p>
                <p class="use-case-p kuno">
                  Ŝia filino helpas ŝin starigi Kuno monkolekton kaj kunhavigas ĝin kun ilia komunumo.
                </p>
                <p class="use-case-p kuno">
                  Ili kolektas sufiĉe da mono kaj interŝanĝas ĝin al kontanto kun LocalMonero.
                </p>
                <p class="use-case-p kuno">
                  Alico skribas koran dankon por ĉiu donacanto kiel signo de aprezo.
                </p>',
    'homepage_use_case_heading3' => 'Por noventreprenoj',
    'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                  Indie programisto volas krei novan ludon.
                </p>
                <p class="use-case-p kuno">
                  Li starigas Kuno monkolekton kaj kunhavigas ĝin kun ludkomunumoj.
                </p>
                <p class="use-case-p kuno">
                  Li atingas la celon kaj uzas la financon por dungi Monero-amikajn artistojn de MoneroMarket kaj aĉeti ludaktivaĵojn per virtuala debetkarto CakePay.
                </p>
                <p class="use-case-p kuno">
                  Ĉiu donacanto ricevas senpagan kopion de la ludo.
                </p>',
    'homepage_use_case_heading4' => 'Por kreintoj de enhavo',
    'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                  Grupo alŝutas siajn kovrojn kaj originan muzikon al Youtube.
                </p>
                <p class="use-case-p kuno">
                  Ili starigas Kuno donacan paĝon por ricevi Monero donacojn.
                </p>
                <p class="use-case-p kuno">
                  Fervoruloj ankaŭ povas sugesti kantojn aŭ komenti dum elsendo per donaco.
                </p>
                <p class="use-case-p kuno">
                  Ĉi tio ofertas pli bonan manieron daŭripove moneti ilian enhavon, kompare kun reklamoj.
                </p>',
    'homepage_use_case_heading5' => 'Por vi',
    'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                  Kun Kuno, ĉiuj povas kolekti monon por sia projekto, afero aŭ novkomerco.
                </p>
                <p class="use-case-p kuno">
                  Ĉio, kion vi bezonas, estas Monero monujo kaj celo.
                </p>',
    'fundraiser_heading_goal' => 'Celo',
    'fundraiser_heading_raised' => 'Kolektitaj',
    'fundraiser_heading_percentage_funded' => 'financita',
    'fundraiser_heading_donations' => 'Donacoj',
    'fundraiser_heading_supporters' => 'Subtenantoj',
    'fundraiser_heading_comments' => 'Komentoj',
    'fundraiser_heading_support' => 'Subtenu',
    'fundraiser_heading_share' => 'Kunhavigu',
    'fundraiser_heading_about' => 'Priskribo',
    'fundraiser_heading_photos' => 'Fotoj',
    'fundraiser_heading_contact' => 'Kontakto',
    'fundraiser_heading_date' => 'Eldonita:',
    'fundraiser_heading_supporters' => 'Subtenantoj',
    'fundraiser_heading_new_comment' => 'Skribu komenton',
    'fundraiser_heading_new_fundraiser' => 'Nova monkolekto',
    'fundraiser_heading_edit_fundraiser' => 'Redaktu monkolekton',
    'fundraiser_heading_logout' => 'Elsalutu',
    'fundraiser_support_text' => 'Sendu ian Moneron al:',
    'fundraiser_share_text' => 'Kopiu la ligon por kunhavigi ĉi tiun monkolekton kun amikoj aŭ sociaj amaskomunikiloj:',
    'fundraiser_open_in_wallet' => 'Malfermita en monujo',
    'fundraiser_info_point1' => 'Vi donacas rekte al la monujo de la ricevanto',
    'fundraiser_info_point2' => 'Neniuj intermedioj aŭ kotizoj',
    'fundraiser_info_point3' => 'Donacoj estas sinkronigitaj ĉiun 5 minutojn',
    'fundraiser_full_size_photo' => 'Plengranda foto',
    'fundraiser_no_donations' => 'Ankoraŭ neniuj donacoj',
    'fundraiser_supporters' => '{AMOUNT} subtenantoj',
    'fundraiser_button_support' => 'Subtenu',
    'fundraiser_donate_with_monero' => 'Donu per Monero:',
    'fundraiser_comment_form_placeholder_txid' => 'TXID',
    'fundraiser_comment_form_placeholder_tx_key' => 'TX-ŝlosilo (Ekz: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
    'fundraiser_comment_form_placeholder_email' => 'Retpoŝto (nedeviga, por monkolektaj rekompencoj)',
    'fundraiser_comment_form_placeholder_comment' => 'Skribu publikan komenton',
    'fundraiser_comment_form_submit' => 'Komentu',
    'search' => 'Serĉo',
    'search_heading' => 'Serĉu monkolektojn',
    'search_text' => 'Serĉu monkolektojn...',
    'search_sort_by_new' => 'Ordigu per nova',
    'search_sort_by_recently_donated' => 'Ordigu per lastatempaj donacoj',
    'search_sort_by_percentage_funded' => 'Ordigu per procenta financita',
    'search_sort_by_goal' => 'Ordigu per celo',
    'search_all_categories' => 'Ĉiuj kategorioj',
    'search_no_fundraisers_found' => 'Neniuj monkolektoj trovitaj',
    'search_fediverse_heading' => 'Serĉu Fediverson',
    'search_fediverse_text' => 'Serĉu fediversajn monkolektojn...',
    'search_fediverse_no_fundraisers_found' => 'Neniuj fediversaj monkolektoj trovitaj',
    'search_fediverse_peers_list' => 'Listo de federaciaj kazoj:',
    'login_invite_code_heading' => 'Nova monkolekto',
    'login_invite_code_text' => 'Enigu invititan kodon por krei novan monkolekton.',
    'login_invite_code_note' => 'Se vi ne havas invititan kodon, bonvolu kontakti subtenon.',
    'login_invite_code_form' => 'Invitita kodo',
    'login_invite_code_form_placeholder' => 'Invitita kodo',
    'login_invite_code_submit' => 'Daŭrigu',
    'login_fundraiser_form_fundraiser' => 'Monkolekto',
    'login_fundraiser_heading' => 'Redaktu monkolekton',
    'login_fundraiser_text' => 'Enigu la monkolektan kodon kaj pasvorton por redakti vian monkolekton.',
    'login_fundraiser_note' => 'La kodo estas en la URL:',
    'login_fundraiser_forgot_password' => 'Ĉu vi forgesis la pasvorton?',
    'login_fundraiser_form_fundraiser' => 'Monkolekto',
    'login_fundraiser_form_fundraiser_placeholder' => 'Monkolekta kodo (ekz. ae21)',
    'login_fundraiser_form_password' => 'Pasvorto',
    'login_fundraiser_form_password_placeholder' => 'Pasvorto',
    'login_fundraiser_form_submit' => 'Redaktu monkolekton',
    'edit_fundraiser_heading_fundraiser_details' => 'Monkolektaj detaloj',
    'edit_fundraiser_fundraiser_details_text' => 'Priskribu vian monkolekton kaj aldonu fotojn.',
    'edit_fundraiser_form_optional' => '(Nedeviga)',
    'edit_fundraiser_form_more_info' => '(Pli da informoj)',
    'edit_fundraiser_form_title' => 'Titolo',
    'edit_fundraiser_form_title_placeholder' => 'Monkolekta titolo',
    'edit_fundraiser_form_photo' => 'Foto',
    'edit_fundraiser_form_additional_photos' => 'Pliaj fotoj',
    'edit_fundraiser_form_description' => 'Priskribo',
    'edit_fundraiser_form_description_placeholder' => 'Priskribu vian monkolekton. Aldonu monkolektajn rekompencojn, mejloŝtonojn aŭ kontaktajn detalojn, se necese.',
    'edit_fundraiser_form_tags' => 'Etikedoj',
    'edit_fundraiser_form_tags_placeholder' => 'Kategorio, etikedoj, ktp.',
    'edit_fundraiser_form_contact' => 'Kontakto',
    'edit_fundraiser_form_contact_placeholder' => 'Retpoŝto, retejo, Twitter, Matrix, ktp.',
    'edit_fundraiser_form_visibility' => 'Agordu monkolekton al private (ne montrita en serĉrezultoj, donacantoj bezonos la rektan ligon)',
    'edit_fundraiser_heading_goal' => 'Celo',
    'edit_fundraiser_goal_text' => 'Agordu vian celon kaj Monero adreson.',
    'edit_fundraiser_form_goal' => 'Celo',
    'edit_fundraiser_form_goal_placeholder' => 'Celo (XMR)',
    'edit_fundraiser_form_donation_page' => 'Neniu celo - mi volas krei donacan paĝon',
    'edit_fundraiser_form_monero_address' => 'Monero adreso',
    'edit_fundraiser_form_monero_address_placeholder' => 'Ekz: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
    'edit_fundraiser_form_view_key' => 'Sekreta vida ŝlosilo',
    'edit_fundraiser_form_view_key_placeholder' => 'Ekz: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
    'edit_fundraiser_heading_password' => 'Pasvorto',
    'edit_fundraiser_password_text' => 'Agordu pasvorton por redakti vian monkolekton poste.',  
    'edit_fundraiser_widthdrawal_warning' => 'Evitu retiri partajn ekvilibrojn dum daŭraj kvestistoj. Monero uzas plenajn saldojn por pagoj, lasante la ceterajn kvantojn kiel novaj transakcioj. Ĉi tio estus malvere kalkulita kiel donaco, kaj via kvestprogreso estos malpreciza. Se vi bezonas uzi financon survoje, ĉiam retiru vian plenan saldon, lasante neniun "ŝanĝon".',  
    'edit_fundraiser_form_email' => 'Retpoŝto',
    'edit_fundraiser_form_email_placeholder' => 'Retpoŝto (nedeviga, por pasvortaj restarigoj)',
    'edit_fundraiser_form_password' => 'Pasvorto',
    'edit_fundraiser_form_new_password_placeholder' => 'Pasvorto',
    'edit_fundraiser_form_edit_password_placeholder' => 'Pasvorto (lasu malplenan se ne ŝanĝiĝas)',
    'edit_fundraiser_form_email_notifications' => 'Retpoŝtu min kiam mia monkolekto ricevas novan donacon',
    'edit_fundraiser_form_submit_edit' => 'Ĝisdatigu monkolekton',
    'edit_fundraiser_form_submit_new' => 'Komencu monkolekton',
    'edit_fundraiser_heading_supporters' => 'Subtenantoj',
    'edit_fundraiser_supporters_text' => 'Se subtenanto enigis sian retpoŝtadreson, vi vidos ĝin ĉi tie (ekz. por monkolektaj rekompencoj).',
    'edit_fundraiser_no_supporters' => 'Ankoraŭ neniuj retpoŝtaj sendaĵoj',
    'edit_fundraiser_supporters_email' => 'Retpoŝto',
    'edit_fundraiser_supporters_comment' => 'Komento',
    'edit_fundraiser_supporters_amount' => 'Donaco',
    'edit_fundraiser_supporters_txid' => 'TXID',
    'edit_fundraiser_supporters_tx_key' => 'TX ŝlosilo',
    'edit_fundraiser_supporters_date' => 'Dato',
    'edit_fundraiser_heading_manage_fundraiser' => 'Administru monkolekton',
    'edit_fundraiser_fix_view_key' => 'Bonvolu aldoni validan vidan ŝlosilon por reaktivigi vian kveston.',
    'edit_fundraiser_deactivate_fundraiser' => 'Malaktivigu monkolekton',
    'edit_fundraiser_reactivate_fundraiser' => 'Reaktivigu monkolekton',
    'edit_fundraiser_delete_fundraiser' => 'Forigu Viajn Datumojn',
    'reset_password_heading' => 'Restarigu pasvorton',
    'reset_password_description' => 'Enigu la monkolektan kodon kaj vian retpoŝtan adreson por restarigi vian pasvorton.',
    'reset_password_note' => '(Se vi ne aldonis retpoŝtan adreson, bonvolu kontakti subtenon.)',
    'reset_password_form_fundraiser' => 'Monkolekto',
    'reset_password_form_fundraiser_placeholder' => 'Monkolekta kodo (ekz. ae21)',
    'reset_password_form_email' => 'Retpoŝto',
    'reset_password_form_email_placeholder' => 'Retpoŝto',
    'reset_password_form_confirmation_code' => 'Konfirma kodo',
    'reset_password_form_confirmation_code_placeholder' => 'Konfirma kodo',
    'reset_password_form_new_password' => 'Nova pasvorto',
    'reset_password_form_new_password_placeholder' => 'Nova pasvorto',
    'reset_password_form_submit' => 'Restarigu pasvorton',
    'success' => 'Sukceso',
    'success_form_submitted' => 'Formularo sukcese prezentita',
    'success_new_fundraiser' => 'Via monkolekto estas aktiva: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Rigardu vian monkolekton ĉi tie</a><br>Marku ĉi tiun ligon por redakti vian monkolekton:<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Redaktu monkolekton #{GUID}</a>',
    'success_new_donation_page' => 'Via donacpaĝo estas aktiva: <a href="https://kuno.anne.media/donate/{GUID}/">Rigardu vian donacpaĝon ĉi tie</a><br>Marku ĉi tiun ligon por redakti vian donacpaĝon: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Redaktu donacpaĝon #{GUID}</a>',
    'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Via monkolekto estis ĝisdatigita.</a>',
    'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Alklaku ĉi tie por redakti vian monkolekton</a>',
    'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Via donacpaĝo estis ĝisdatigita.</a>',
    'success_fundraiser_deactivated' => 'Monkolekto malaktivigita',
    'success_fundraiser_reactivated' => 'Monkolekto reaktivigita',
    'success_fundraiser_deleted' => 'Monkolekto forigita',
    'success_valid_invite_code' => 'Valida invitita kodo. Vi nun povas krei monkolekton.',
    'success_valid_confirmation_code' => 'Valida konfirma kodo',
    'success_check_email_for_password_reset_code' => 'Kontrolu vian retpoŝton por pasvorta restariga kodo',
    'success_password_reset' => 'Pasvorto ĝisdatigita, vi nun povas <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">redakti vian monkolekton</a>',
    'success_comment_sent' => 'Komento sendita!',
    'success_image_uploaded' => 'Bildo alŝutita',
    'error' => 'Eraro',
    'error_please_refresh' => 'Bonvolu refreŝigi kaj reprovi.',
    'error_form_expired' => 'Formo eksvalidiĝis, bonvolu refreŝigi.',
    'error_form_ratelimited' => 'Taksu limigita, bonvolu atendi {RATELIMIT} sekundojn',
    'error_session_expired' => 'Kunsido eksvalidiĝis, bonvolu ensaluti denove.',
    'error_page_not_found' => 'Paĝo ne trovita',
    'error_fundraiser_not_found' => 'Monkolekto ne trovita',
    'error_email_not_found' => 'Neniu retpoŝta adreso estas trovita, bonvolu kontakti subtenon',
    'error_invalid_email' => 'Bonvolu enigi validan retpoŝtan adreson',
    'error_invalid_email_for_notifications' => 'Bonvolu enigi validan retpoŝtan adreson por ebligi sciigojn',
    'error_invalid_confirmation_code' => 'Konfirma kodo ne validas aŭ eksvalidiĝis',
    'error_invalid_monero_address' => 'Nevalida Monero adreso (bonvolu enigi vian ĉefan adreson, kiu komenciĝas per 4)',
    'error_invalid_view_key' => 'Nevalida vida ŝlosilo (bonvolu enigi vian privatan/sekretan vidan ŝlosilon)',
    'error_invalid_address' => 'Nevalida Monero adreso (bonvolu enigi vian ĉefan adreson, kiu komenciĝas per 4)',
    'error_entered_public_view_key' => 'Nevalida vida ŝlosilo (bonvolu enigi vian privatan/sekretan vidan ŝlosilon, ne publikan vidan ŝlosilon)',
    'error_entered_public_spend_key' => 'Nevalida vida ŝlosilo (bonvolu enigi vian privatan/sekretan vidan ŝlosilon, ne publikan elspezan ŝlosilon)',
    'error_entered_private_spend_key' => 'Nevalida vida ŝlosilo (bonvolu enigi vian privatan/sekretan vidan ŝlosilon, ne privatan elspezan ŝlosilon)',
    'error_invalid_private_view_key' => 'Nevalida vida ŝlosilo (bonvolu enigi vian privatan/sekretan vidan ŝlosilon)',
    'error_invalid_txid' => 'Nevalida TXID',
    'error_invalid_tx_key' => 'Bonvolu enigi validan TX ŝlosilon (ankaŭ nomatan TX pruvo)',
    'error_invalid_invite_code' => 'Bonvolu enigi validan invititan kodon',
    'error_incorrect_email' => 'Malĝusta retpoŝta adreso',
    'error_incorrect_password' => 'Malĝusta pasvorto',
    'error_monero_address_already_used' => 'Estas jam monkolekto aŭ donacpaĝo kun ĉi tiu Monero adreso',
    'error_missing_fundraiser_code_or_email' => 'Bonvolu enigi vian monkolektan kodon kaj retpoŝtan adreson',
    'error_missing_password_reset_code_or_password' => 'Bonvolu enigi vian pasvortan restarigan kodon kaj novan pasvorton',
    'error_missing_txid_or_tx_key' => 'Bonvolu enigi ambaŭ la TXID kaj TX ŝlosilon (ankaŭ nomatan TX pruvo)',
    'error_missing_password' => 'Bonvolu enigi vian pasvorton',
    'error_missing_view_key' => 'Bonvolu enigi validan privatan vidan ŝlosilon',
    'error_title_too_long' => 'Titolo devas esti inter 1-80 signoj',
    'error_description_too_long' => 'Priskribo devas esti pli mallonga ol 8000 signoj',
    'error_tags_too_long' => 'Etikedoj devas esti pli mallongaj ol 250 signoj',
    'error_contact_details_too_long' => 'Kontaktaj detaloj devas esti pli mallongaj ol 250 signoj',
    'error_goal_must_be_positive' => 'Monkolekta celo devas esti pozitiva nombro',
    'error_image_incorrect_file_type' => 'Bildo devas esti PNG aŭ JPEG',
    'error_image_maximum_image_size' => 'Maksimuma bilda grandeco 2 MB',
    'error_image_invalid' => 'Nevalida bildo',
    'error_image_storage_full' => 'Stokado plena',
    'error_image_missing' => 'Bonvolu alŝuti bildon',
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}

function translate_es($string) {
    static $strings = array(
      'site_name' => 'Kuno',
      'page_title' => 'Kuno – Recaudar fondos con Monero',
      'page_title_error' => 'Error | Kuno – Recaudar fondos con Monero',
      'page_title_search' => 'Búsqueda | Kuno – Recaudar fondos con Monero',
      'page_title_fediverse' => 'Fediverse | Kuno – Fundraise with Monero',
      'page_title_reset_password' => 'Restablecer contraseña | Kuno – Recaudar fondos con Monero',
      'page_title_edit_fundraiser' => 'Editar recaudación de fondos | Kuno – Recaudar fondos con Monero',
      'page_title_new_fundraiser' => 'Nueva recaudación de fondos | Kuno – Recaudar fondos con Monero',
      'pagination' => 'Pagina {NUM} of {NUM_PAGES}',
      'pagination_fundraisers' => 'Visualizar {START}-{END} of {TOTAL} recaudación',
      'pagination_donations' => 'Visualizar {START}-{END} of {TOTAL} donaciones',
      'pagination_submit' => 'Ir a',
      'nav_manage_fundraiser' => 'Gestionar la recaudación de fondos',
      'nav_search' => 'Buscar recaudación de fondos...',
      'nav_fundraiser_progress' => 'Progresos en la recaudación de fondos:',
      'nav_edit_fundraiser' => 'Editar la recaudación de fondos:',
      'nav_logout' => 'Cerrar sesión',
      'footer_description' => 'Recaudar fondos con Monero',
      'footer_contact' => 'Contacto: support [at] anne.media',
      'footer_language' => 'Idioma:',
      'footer_light_mode' => 'Modo luminoso',
      'footer_dark_mode' => 'Modo oscuro',
      'footer_manage_fundraiser' => 'Gestiona tu recaudación de fondos:',
      'footer_new_fundraiser' => 'Nueva recaudación de fondos',
      'footer_edit_fundraiser' => 'Editar recaudación de fondos',
      'footer_reset_password' => 'Restablecer contraseña',
      'footer_quick_links' => 'Enlaces rápidos:',
      'footer_search_fundraisers' => 'Búsqueda de recaudaciones',
      'footer_search_fediverse' => 'Buscar en Fediverse',
      'footer_marketplace' => 'Marketplace',
      'footer_rss_feed' => 'RSS Feed',
      'footer_faq' => 'FAQ',
      'email_new_donation_subject' => '[Kuno] Nueva{DONATION} XMR donacion a #{GUID}',
      'email_new_donation_body' => 'Tu recaudación ha recibido una nueva donación!
           <br><br>Recaudación de fondos: {TITLE}
           <br>Donacion: {DONATION} XMR
           <br>Fecha: {DATE}
           <br><br>Total donaciones: {TOTAL} XMR
           <br>Total colaboradores: {SUPPORTERS}
           <br>Visite su Recaudación de Fondos: https://kuno.anne.media/{TYPE}/{GUID}/
           <br><br>Desactive aquí las notificaciones por correo electrónico:
           <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
      'email_reset_password_subject' => '[Kuno] Restablecer contraseña',
      'email_reset_password_body' => 'Visite este enlace para restablecer su contraseña: {URL} o introduzca este código: {CODE} (Valid for 24 hours)',
      'homepage_title' => 'Fácil recaudación de fondos <br> para todos',
      'homepage_subtitle' => 'Recauda dinero o dona a una buena causa con Monero',
      'homepage_point1' => 'Recaudación de fondos gratuita',
      'homepage_point2' => 'Recibe Monero (que puedes cambiar por dinero en efectivo)',
      'homepage_point3' => 'Sin comisiones, funciona en todo el mundo, no requiere cuenta bancaria',
      'homepage_button_start_fundraiser' => 'Iniciar una recaudación de fondos',
      'homepage_button_browse_fundraisers' => 'Recaudación de fondos',
      'homepage_bar' => 'La alternativa justa a GoFundMe y Kickstarter',
      'homepage_heading_browse_fundraisers' => 'Buscar  {AMOUNT} recaudadores de fondos',
      'homepage_heading_total_raised' => 'Más de  {AMOUNT} XMR recaudados!',
      'homepage_top_categories' => 'Categorías principales',
      'homepage_recent_donations' => 'Donaciones recientes',
      'homepage_all_categories' => 'Todas las categorías',
      'homepage_launch_in_one_click' => 'Inicie su recaudación de fondos en 1 clic',
      'homepage_get_started_free' => 'Empezar gratis',
      'homepage_info_heading1' => 'Monero es dinero para Internet',
      'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                   Monero es una forma rápida y segura de enviar y recibir dinero en línea.
                  </p>
                  <p class="monero-info-p kuno">
                   No se necesita cuenta bancaria, ni identificación gubernamental. Sólo tiene que descargar un monedero para su teléfono u ordenador para enviar y recibir dinero en todo el mundo con un solo clic.
  
                  </p>
                  <p class="monero-info-p kuno">
                  La sencillez y accesibilidad de Monero lo convierten en un método de pago ideal para tiendas online, trabajo a distancia, remesas, propinas, recaudación de fondos y mucho más.
                  </p>',
      'homepage_link_download_mobile' => 'Descargar para móvil',
      'homepage_link_download_desktop' => 'Descargar para ordenador',
      'homepage_info_heading2' => 'Donaciones sin censura',
      'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                  Con Monero, tu dinero te pertenece.
                  </p>
                  <p class="monero-info-p kuno">
    Monero es software y no depende de terceras partes o corporaciones. Las transacciones no pueden ser censuradas, los fondos no pueden ser congelados y los usuarios no pueden ser desactivados.
                  </p>
                  <p class="monero-info-p kuno">
                  Tanto si recauda fondos con Monero como si dona a una buena causa, puede tener la tranquilidad de que el beneficiario recibe el 100% de la donación.
                  </p>',
      'homepage_link_official_website' => 'Web oficial',
      'homepage_link_overview' => 'Resumen',
      'homepage_link_buy_monero' => 'Comprar Monero',
      'homepage_info_heading3' => 'Gástalo donde quieras',
      'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                  Cambie Monero por dinero en efectivo, compre en Internet o pague facturas.
                  </p>
                  <p class="monero-info-p kuno">
                  Es fácil cambiar Monero a dinero físico con <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> or a <a href="https://coinatmradar.com">Crypto ATM</a> (no necesita cuenta bancaria).
                  </p>
                  <p class="monero-info-p kuno">
                  En mercados como <a href="https://moneromarket.io">MoneroMarket</a> y en directorios como <a href="https://monerica.com">Monerica</a> y <a href="https://acceptedhere.io">AcceptedHere</a> le ayudará a comprar lo que necesite con Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  Ademas, <a href="https://cakepay.com">CakePay</a> y <a href="https://coincards.com">CoinCards</a> ofrecen tarjetas Visa prepago y tarjetas regalo de miles de comercios. Compradores personales como <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> y<a href="https://shopinbit.com">ShopInBit</a> ofrecen una forma cómoda de pagar facturas con Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  La flexibilidad de Monero facilita la recaudación de fondos para pagar facturas, poner en marcha un proyecto o apoyar a una organización benéfica.
                  </p>',
      'homepage_link_exchange_to_cash' => 'Cambia por efectivo',
      'homepage_link_shop_online' => 'Compre en línea',
      'homepage_link_marketplace' => 'Marketplace',
      'homepage_use_case_heading1' => 'Para organizaciones benéficas',
      'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                    Un refugio local de gatos necesita donativos para comida de gatos y facturas veterinarias.
                  </p>
                  <p class="use-case-p kuno">
                    Crean una campaña de recaudación de fondos de Kuno, comparten el enlace en las redes sociales y reciben donaciones..
                  </p>
                  <p class="use-case-p kuno">
                    El refugio utiliza el Monero recaudado para comprar tarjetas regalo de Petsmart con CakePay y retira efectivo para pagar la factura del veterinario con un Crypto ATM.
                  </p>
                  <p class="use-case-p kuno">
                    Cada donante recibe una actualización con fotos de los gatos.
                  </p>',
      'homepage_use_case_heading2' => 'Para particulares',
      'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    Alice necesita recaudar dinero para las facturas médicas.
                  </p>
                  <p class="use-case-p kuno">
                    Su hija la ayuda a organizar una recaudación de fondos Kuno y la comparte con su comunidad.
                  </p>
                  <p class="use-case-p kuno">
                    Reúnen suficiente dinero y lo cambian a efectivo con LocalMonero.
                  </p>
                  <p class="use-case-p kuno">
                    Alice escribe una sincera carta de agradecimiento a cada donante como muestra de su aprecio.
                  </p>',
      'homepage_use_case_heading3' => 'Para nuevas empresas',
      'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    Un desarrollador independiente quiere crear un nuevo juego.
                  </p>
                  <p class="use-case-p kuno">
                    Crea una recaudación de fondos Kuno y compártela con las comunidades de jugadores.
                  </p>
                  <p class="use-case-p kuno">
                    Alcanza el objetivo y utiliza los fondos para contratar artistas Monero-friendly de MoneroMarket y comprar activos del juego con una tarjeta de débito virtual CakePay..
                  </p>
                  <p class="use-case-p kuno">
                    Cada donante recibe una copia gratuita del juego.
                  </p>',
      'homepage_use_case_heading4' => 'Para creadores de contenidos',
      'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                    Un grupo sube sus versiones y música original a Youtube.
                  </p>
                  <p class="use-case-p kuno">
                    Crearon una página de donaciones en Kuno para recibir donaciones en Monero.
                  </p>
                  <p class="use-case-p kuno">
                    Los fans también pueden sugerir canciones o hacer comentarios durante las retransmisiones en directo haciendo una donación.
                  </p>
                  <p class="use-case-p kuno">
                    Esto ofrece una mejor manera de monetizar de forma sostenible su contenido, en comparación con los anuncios.
                  </p>',
      'homepage_use_case_heading5' => 'Para ti',
      'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    Con Kuno, todo el mundo puede recaudar dinero para su proyecto, causa o startup.
                  </p>
                  <p class="use-case-p kuno">
                    Todo lo que necesitas es una cartera Monero y un objetivo.
                  </p>',
      'fundraiser_heading_goal' => 'Objetivo',
      'fundraiser_heading_raised' => 'Recaudado',
      'fundraiser_heading_percentage_funded' => 'Contribuciones',
      'fundraiser_heading_donations' => 'Donaciones',
      'fundraiser_heading_supporters' => 'Partidarios',
      'fundraiser_heading_comments' => 'Comentarios',
      'fundraiser_heading_support' => 'Apoyo',
      'fundraiser_heading_share' => 'Compartir',
      'fundraiser_heading_about' => 'Acerca de',
      'fundraiser_heading_photos' => 'Fotos',
      'fundraiser_heading_contact' => 'Contacto',
      'fundraiser_heading_date' => 'Publicado:',
      'fundraiser_heading_supporters' => 'Partidarios',
      'fundraiser_heading_new_comment' => 'Escriba un comentario',
      'fundraiser_heading_new_fundraiser' => 'Nueva recaudación de fondos',
      'fundraiser_heading_edit_fundraiser' => 'Editar recaudación de fondos',
      'fundraiser_heading_logout' => 'Cierre de sesión',
      'fundraiser_support_text' => 'Envía cualquier cantidad de Monero a:',
      'fundraiser_share_text' => 'Copie el enlace para compartir esta recaudación de fondos con amigos o en las redes sociales:',
      'fundraiser_open_in_wallet' => 'Abrir en cartera',
      'fundraiser_info_point1' => 'Donas directamente a la cartera del beneficiario',
      'fundraiser_info_point2' => 'Sin intermediarios ni comisiones',
      'fundraiser_info_point3' => 'Las donaciones se sincronizan cada 5 minutos',
      'fundraiser_full_size_photo' => 'Foto a tamaño real',
      'fundraiser_no_donations' => 'Aún no hay donaciones',
      'fundraiser_supporters' => '{AMOUNT} Partidarios',
      'fundraiser_button_support' => 'Soporte',
      'fundraiser_donate_with_monero' => 'Donar con Monero:',
      'fundraiser_comment_form_placeholder_txid' => 'TXID',
      'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Example: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
      'fundraiser_comment_form_placeholder_email' => 'Correo electrónico (opcional, para recompensas de recaudación de fondos)',
      'fundraiser_comment_form_placeholder_comment' => 'Escriba un comentario público',
      'fundraiser_comment_form_submit' => 'Comment',
      'search' => 'Buscar en',
      'search_heading' => 'Buscar recaudación de fondos',
      'search_text' => 'Buscar recaudación de fondos..',
      'search_sort_by_new' => 'Ordenar por nuevos',
      'search_sort_by_recently_donated' => 'Ordenar por donaciones recientes',
      'search_sort_by_percentage_funded' => 'Ordenar por porcentaje financiado',
      'search_sort_by_goal' => 'Ordenar por objetivo',
      'search_all_categories' => 'Todas las categorías',
      'search_no_fundraisers_found' => 'No se han encontrado recaudaciones',
      'search_fediverse_heading' => 'Buscar en Fediverse',
      'search_fediverse_text' => 'Buscar recaudadores de fondos en Fediverse...',
      'search_fediverse_no_fundraisers_found' => 'No se han encontrado recaudadores de fondos de Fediverse',
      'search_fediverse_peers_list' => 'Lista de instancias federadas:',
      'login_invite_code_heading' => 'Nueva recaudación de fondos',
      'login_invite_code_text' => 'Introduzca un código de invitación para iniciar una nueva recaudación de fondos.',
      'login_invite_code_note' => 'Si no dispone de un código de invitación, póngase en contacto con el servicio de asistencia.',
      'login_invite_code_form' => 'Código de invitación',
      'login_invite_code_form_placeholder' => 'Código de invitación',
      'login_invite_code_submit' => 'Continuar',
      'login_fundraiser_form_fundraiser' => 'Recaudación de fondos',
      'login_fundraiser_heading' => 'Editar recaudación de fondos',
      'login_fundraiser_text' => 'Introduzca el código y la contraseña para editar su recaudación de fondos.',
      'login_fundraiser_note' => 'El código está en la URL:',
      'login_fundraiser_forgot_password' => '¿Olvidó su contraseña?',
      'login_fundraiser_form_fundraiser' => 'Recaudación de fondos',
      'login_fundraiser_form_fundraiser_placeholder' => 'Recaudación de fondos codigo (ejem ae21)',
      'login_fundraiser_form_password' => 'Contraseña',
      'login_fundraiser_form_password_placeholder' => 'Contraseña',
      'login_fundraiser_form_submit' => 'Editar recaudación de fondos',
      'edit_fundraiser_heading_fundraiser_details' => 'Detalles de la recaudación de fondos',
      'edit_fundraiser_fundraiser_details_text' => 'Describa su recaudación de fondos y añada fotos.',
      'edit_fundraiser_form_optional' => '(Opcional)',
      'edit_fundraiser_form_more_info' => '(Mas informacion)',
      'edit_fundraiser_form_title' => 'Titulo',
      'edit_fundraiser_form_title_placeholder' => 'Título de la recaudación',
      'edit_fundraiser_form_photo' => 'Fotos',
      'edit_fundraiser_form_additional_photos' => 'Fotos adicionales',
      'edit_fundraiser_form_description' => 'Descripción',
      'edit_fundraiser_form_description_placeholder' => 'Describa su recaudación de fondos. Añade recompensas, hitos o datos de contacto, si es necesario..',
      'edit_fundraiser_form_tags' => 'Tags',
      'edit_fundraiser_form_tags_placeholder' => 'Categorias, tags, etc.',
      'edit_fundraiser_form_contact' => 'Contacto',
      'edit_fundraiser_form_contact_placeholder' => 'Email, website, Twitter, Matrix, etc.',
      'edit_fundraiser_form_visibility' => 'Establezca la recaudación de fondos como privada (no se mostrará en los resultados de búsqueda, los donantes necesitarán el enlace directo)',
      'edit_fundraiser_heading_goal' => 'Objetivo',
      'edit_fundraiser_goal_text' => 'Establece tu objetivo y tu dirección Monero.',
      'edit_fundraiser_get_wallet' => '¿No tienes monedero Monero? Consiga uno aquí.',
      'edit_fundraiser_form_goal' => 'Objetivo',
      'edit_fundraiser_form_goal_placeholder' => 'Objetivo (XMR)',
      'edit_fundraiser_form_donation_page' => 'Sin objetivo - Quiero hacer una Página de Donación',
      'edit_fundraiser_form_monero_address' => 'Direccion de Monero',
      'edit_fundraiser_form_monero_address_placeholder' => 'Example: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
      'edit_fundraiser_form_view_key' => 'Clave de vista secreta',
      'edit_fundraiser_form_view_key_placeholder' => 'Example: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
      'edit_fundraiser_heading_password' => 'Contraseña',
      'edit_fundraiser_password_text' => 'Establece una contraseña para editar tu recaudación más tarde.',
      'edit_fundraiser_widthdrawal_warning' => "Evite retirar saldos parciales durante las recaudaciones de fondos en curso. Monero utiliza los saldos completos para los pagos, dejando las cantidades restantes como nuevas transacciones. Esto se calcularía falsamente como una donación, y el progreso de tu recaudación de fondos sería inexacto. Si necesitas utilizar fondos sobre la marcha, retira siempre el saldo completo, sin dejar 'cambio'.",
      'edit_fundraiser_form_email' => 'Email',
      'edit_fundraiser_form_email_placeholder' => 'Email (opcional, para restablecer la contraseña)',
      'edit_fundraiser_form_password' => 'Contraseña',
      'edit_fundraiser_form_new_password_placeholder' => 'Contraseña',
      'edit_fundraiser_form_edit_password_placeholder' => 'Contraseña (dejar en blanco si no hay cambios)',
      'edit_fundraiser_form_email_notifications' => 'Enviarme un correo electrónico cuando mi recaudador reciba una nueva donación',
      'edit_fundraiser_form_submit_edit' => 'Actualizar la recaudación de fondos',
      'edit_fundraiser_form_submit_new' => 'Iniciar recaudación de fondos',
      'edit_fundraiser_heading_supporters' => 'Partidarios de la recaudación de fondos',
      'edit_fundraiser_supporters_text' => 'Si un colaborador ha introducido su dirección de correo electrónico, podrá verla aquí (por ejemplo, para las recompensas de la recaudación de fondos)..',
      'edit_fundraiser_no_supporters' => 'Aún no se han enviado correos electrónicos',
      'edit_fundraiser_supporters_email' => 'Email',
      'edit_fundraiser_supporters_comment' => 'Commentario',
      'edit_fundraiser_supporters_amount' => 'Cantidad',
      'edit_fundraiser_supporters_txid' => 'TXID',
      'edit_fundraiser_supporters_tx_key' => 'TX Key',
      'edit_fundraiser_supporters_date' => 'Fecha',
      'edit_fundraiser_heading_manage_fundraiser' => 'Gestionar la recaudación de fondos',
      'edit_fundraiser_fix_view_key' => 'Añada una clave de visualización válida para reactivar su recaudación de fondos..',
      'edit_fundraiser_deactivate_fundraiser' => 'Desactivar recaudación de fondos',
      'edit_fundraiser_reactivate_fundraiser' => 'Reactivar la recaudación de fondos',
      'edit_fundraiser_delete_fundraiser' => 'Elimine sus datos',
      'reset_password_heading' => 'Restablecer contraseña',
      'reset_password_description' => 'Introduzca el código de recaudación de fondos y su dirección de correo electrónico para restablecer su contraseña.',
      'reset_password_note' => '(Si no has añadido una dirección de correo electrónico, ponte en contacto con el servicio de asistencia.)',
      'reset_password_form_fundraiser' => 'Recaudación de fondos',
      'reset_password_form_fundraiser_placeholder' => 'Código de recaudación de fondos (por ejemplo, ae21)',
      'reset_password_form_email' => 'Email',
      'reset_password_form_email_placeholder' => 'Email',
      'reset_password_form_confirmation_code' => 'Código de confirmación',
      'reset_password_form_confirmation_code_placeholder' => 'Código de confirmación',
      'reset_password_form_new_password' => 'Nueva contraseña',
      'reset_password_form_new_password_placeholder' => 'Nueva contraseña',
      'reset_password_form_submit' => 'Restablecer contraseña',
      'success' => 'Éxito',
      'success_form_submitted' => 'Formulario enviado correctamente',
      'success_new_fundraiser' => 'Su recaudación de fondos está activa: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Vea su recaudación de fondos aquí</a><br>Marca este enlace para editar tu recaudación de fondos: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Editar recaudación de fondos #{GUID}</a>',
      'success_new_donation_page' => 'Su recaudación de fondos está activa: <a href="https://kuno.anne.media/donate/{GUID}/">Vea aquí su página de donativos</a><br>Marque este enlace para editar su página de donación: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Editar la página de donativos #{GUID}</a>',
      'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Su recaudación de fondos ha sido actualizada.</a>',
      'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Haga clic aquí para editar su recaudación de fondos</a>',
      'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Se ha actualizado su página de donativos.</a>',
      'success_fundraiser_deactivated' => 'Recaudación de fondos desactivada',
      'success_fundraiser_reactivated' => 'Reactivación de la recaudación de fondos',
      'success_fundraiser_deleted' => 'Recaudación de fondos eliminada',
      'success_valid_invite_code' => 'Código de invitación válido. Ya puede iniciar una recaudación de fondos.',
      'success_valid_confirmation_code' => 'Código de confirmación válido',
      'success_check_email_for_password_reset_code' => 'Consulta tu dirección de correo electrónico para obtener un código de restablecimiento de contraseña',
      'success_password_reset' => 'Contraseña cambiada, ahora puede <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">editar su recaudación de fondos</a>',
      'success_comment_sent' => 'Comentario enviado!',
      'success_image_uploaded' => 'Imagen cargada',
      'error' => 'Error',
      'error_please_refresh' => 'Por favor, actualice e inténtelo de nuevo.',
      'error_form_expired' => 'Formulario caducado, actualícelo',
      'error_form_ratelimited' => 'Ratelimitado, por favor espere {RATELIMIT} segundos',
      'error_session_expired' => 'La sesión ha caducado, vuelva a iniciar sesión',
      'error_page_not_found' => 'Pagina no encontrada',
      'error_fundraiser_not_found' => 'Recaudación de fondos no encontrada',
      'error_email_not_found' => 'No se ha configurado ninguna dirección de correo electrónico, póngase en contacto con el servicio de asistencia',
      'error_invalid_email' => 'Introduzca una dirección de correo electrónico válida',
      'error_invalid_email_for_notifications' => 'Introduzca una dirección de correo electrónico válida para activar las notificaciones.',
      'error_invalid_confirmation_code' => 'El código de confirmación no es válido o ha caducado',
      'error_invalid_monero_address' => 'Dirección de Monero no válida (Por favor, introduzca su dirección principal, que empieza por 4)',
      'error_invalid_view_key' => 'Clave de visualización no válida (introduzca su clave de visualización privada/secreta)',
      'error_invalid_address' => 'Dirección de Monero no válida (Por favor, introduzca su dirección principal, que empieza por 4)',
      'error_entered_public_view_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la pública)',
      'error_entered_public_spend_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la pública)',
      'error_entered_private_spend_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la clave de gasto privada)',
      'error_invalid_private_view_key' => 'Clave de visualización no válida (introduzca su clave de visualización privada/secreta))',
      'error_invalid_txid' => 'Invalida TXID',
      'error_invalid_tx_key' => 'Por favor, introduzca una clave TX válida (también conocida como prueba TX)',
      'error_invalid_txid' => 'Introduzca un código de invitación válido',
      'error_incorrect_email' => 'Dirección de correo electrónico incorrecta',
      'error_incorrect_password' => 'Contraseña incorrecta',
      'error_monero_address_already_used' => 'Ya existe una página de recaudación de fondos/donaciones con esta dirección de Monero',
      'error_missing_fundraiser_code_or_email' => 'Introduzca su código de recaudación de fondos y su dirección de correo electrónico',
      'error_missing_password_reset_code_or_password' => 'Introduzca el código de restablecimiento de contraseña y la nueva contraseña',
      'error_missing_txid_or_tx_key' => 'Por favor, introduzca tanto el TXID y la clave TX (también conocida como prueba TX)',
      'error_missing_password' => 'Introduzca su contraseña',
      'error_missing_view_key' => 'Por favor, introduzca una clave de vista privada válida',
      'error_title_too_long' => 'El título debe tener entre 1 y 80 caracteres',
      'error_description_too_long' => 'La descripción debe tener menos de 8000 caracteres',
      'error_tags_too_long' => 'Las etiquetas deben tener menos de 250 caracteres',
      'error_contact_details_too_long' => 'Los datos de contacto deben tener menos de 250 caracteres',
      'error_goal_must_be_positive' => 'El objetivo de recaudación de fondos debe ser una cifra positiva',
      'error_image_incorrect_file_type' => 'La imagen debe ser PNG o JPEG',
      'error_image_maximum_image_size' => 'Tamaño máximo de imagen 2 MB',
      'error_image_invalid' => 'Imagen inválida',
      'error_image_storage_full' => 'Almacenamiento lleno',
      'error_image_missing' => 'Suba una imagen',
      'wallets_header' => 'Monero: <span class="text3">Wallet Choices</span>',
      'monero_gui_wallet' => 'Un monedero de interfaz gráfica de usuario (GUI) de código abierto desarrollado por la comunidad Monero, de uso totalmente gratuito, adecuado tanto para principiantes como para usuarios avanzados.',
      'cake_wallet' => 'Almacene, envíe e intercambie sus criptomonedas de forma segura y sencilla. Compre en privado tarjetas regalo y pague en ventanilla con cripto, es pan comido.',
      'monerujo_wallet' => 'Monedero Android para Monero. Con Monerujo, puedes ir y venir sin problemas entre varios monederos. Hacer una nueva es tan simple como unos pocos toques.',
      'feather_wallet' => 'Feather es un monedero Monero gratuito y de código abierto para Linux, Tails, Windows y macOS. Fácil de usar, pequeño, rápido y amigable para principiantes.',
    );
    $translation = ($strings[$string]) ? $strings[$string] : $string;
    return $translation;
}

function translate_it($string) {
  static $strings = array(
    'site_name' => 'Kuno',
    'page_title' => 'Kuno – Raccogli fondi con Monero',
    'page_title_error' => 'Errore | Kuno – Raccogli fondi con Monero',
    'page_title_search' => 'Cerca | Kuno – Raccogli fondi con Monero',
    'page_title_fediverse' => 'Fediverse | Kuno – Raccogli fondi con Monero',
    'page_title_reset_password' => 'Reimposta la Password | Kuno – Raccogli fondi con Monero',
    'page_title_edit_fundraiser' => 'Modifca Raccolta fondi | Kuno – Raccogli fondi con Monero',
    'page_title_new_fundraiser' => 'Nuova Raccolta fondi | Kuno – Raccogli fondi con Monero',
    'pagination' => 'Pagina {NUM} di {NUM_PAGES}',
    'pagination_fundraisers' => 'Mostrando {START}-{END} di {TOTAL} raccolte fondi',
    'pagination_donations' => 'Mostrando {START}-{END} di {TOTAL} donazioni',
    'pagination_submit' => 'Vai',
    'nav_manage_fundraiser' => 'Gestisci Raccolte fondi',
    'nav_search' => 'Cerca raccolte fondi...',
    'nav_fundraiser_progress' => 'Progresso della raccolta fondi:',
    'nav_edit_fundraiser' => 'Modifica Raccolta fondi:',
    'nav_logout' => 'Logout',
    'footer_description' => 'Raccogli fondi con Monero',
    'footer_contact' => 'Contatti: support [at] anne.media',
    'footer_language' => 'Lingua:',
    'footer_light_mode' => 'Light Mode',
    'footer_dark_mode' => 'Dark Mode',
    'footer_manage_fundraiser' => 'Gestisci la tua raccolta fondi:',
    'footer_new_fundraiser' => 'Nuova Raccolta fondi',
    'footer_edit_fundraiser' => 'Modifica Raccolta fondi',
    'footer_reset_password' => 'Reimposta la Password',
    'footer_quick_links' => 'Link veloci:',
    'footer_search_fundraisers' => 'Cerca Raccolte fondi',
    'footer_search_fediverse' => 'Cerca Fediverse',
    'footer_marketplace' => 'Marketplace',
    'footer_rss_feed' => 'RSS Feed',
    'footer_faq' => 'FAQ',
    'email_new_donation_subject' => '[Kuno] Nuova donazione di {DONATION} XMR a #{GUID}',
    'email_new_donation_body' => 'La tua raccolta fondi ha ricevuto una nuova donazione!
         <br><br>Raccolta fondi: {TITLE}
         <br>Donazione: {DONATION} XMR
         <br>Data: {DATE}
         <br><br>Totale donazione: {TOTAL} XMR
         <br>Totale donatori: {SUPPORTERS}
         <br>Visita la tua raccolta fondi: https://kuno.anne.media/{TYPE}/{GUID}/
         <br><br>Disattiva le notifiche email qui:
         <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
    'email_reset_password_subject' => '[Kuno] Reimposta la password',
    'email_reset_password_body' => 'Apri questo link per reimpostare la tua password: {URL} o inserisci questo codice: {CODE} (Valido per 24 ore)',
    'homepage_title' => 'Raccolta fondi facile <br> per tutti',
    'homepage_subtitle' => 'Raccogli soldi o dona per una buona causa con Monero',
    'homepage_point1' => 'Lancia una raccolta fondi gratis',
    'homepage_point2' => 'Ricevi Monero (che puoi scambiare per contanti)',
    'homepage_point3' => 'Zero commissioni, disponibile in tutto il mondo, nessun conto bancario richiesto',
    'homepage_button_start_fundraiser' => 'Lancia una raccolta fondi',
    'homepage_button_browse_fundraisers' => 'Esplora le raccolte fondi',
    'homepage_bar' => 'La giusta alternativa a GoFundMe e Kickstarter',
    'homepage_heading_browse_fundraisers' => 'Esplora {AMOUNT} raccolte fondi',
    'homepage_heading_total_raised' => 'Più di {AMOUNT} XMR raccolti!',
    'homepage_top_categories' => 'Migliori categorie',
    'homepage_recent_donations' => 'Donazioni recenti',
    'homepage_all_categories' => 'Tutte le categorie',
    'homepage_launch_in_one_click' => 'Lancia la tua raccolta fondi in 1 click',
    'homepage_get_started_free' => 'Inizia gratis',
    'homepage_info_heading1' => 'Monero è la valuta dell’internet',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                 Monero è un modo veloce e sicuro per inviare e ricevere soldi online.
                </p>
                <p class="monero-info-p kuno">
                 Nessun conto bancario, applicazione o documento d’identità è richiesto. Scarica facilmente un wallet per il tuo telefono o computer per inviare e ricevere soldi in tutto il mondo con un click.
                </p>
                <p class="monero-info-p kuno">
                La semplicità e l’accessibilità di Monero lo rendono un metodo di pagamento ideale per negozi online, lavoro da remoto, regali, donazioni, raccolte fondi e altro.
                </p>',
    'homepage_link_download_mobile' => 'Download per mobile',
    'homepage_link_download_desktop' => 'Download per desktop',
    'homepage_info_heading2' => 'Donazioni incensurabili',
    'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                Con Monero, i tuoi soldi appartengono a te.
                </p>
                <p class="monero-info-p kuno">
  Monero è un software e non si appoggia a terze parti o aziende. Le transazioni non possono essere impedite, i fondi non possono essere bloccati e gli utenti non possono essere esclusi dalla piattaforma.
                </p>
                <p class="monero-info-p kuno">
                Sia che tu raccolga fondi o doni per una buona causa, puoi avere la tranquillità che il destinatario riceverà il 100% della donazione.
                </p>',
    'homepage_link_official_website' => 'Sito ufficiale',
    'homepage_link_overview' => 'Panoramica',
    'homepage_link_buy_monero' => 'Acquista Monero',
    'homepage_info_heading3' => 'Spendilo ovunque',
    'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                Scambia Monero per contanti, acquista online o paga altre spese.
                </p>
                <p class="monero-info-p kuno">
                E’ facile scambiare Monero per contanti con <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> o <a href="https://coinatmradar.com">Crypto ATM</a> (nessun conto bancario richiesto).
                </p>
                <p class="monero-info-p kuno">
                Marketplaces come <a href="https://moneromarket.io">MoneroMarket</a> e servizi di indicizzazione come <a href="https://monerica.com">Monerica</a> e <a href="https://acceptedhere.io">AcceptedHere</a> ti aiutano a comprare ciò di cui hai bisogno con Monero.
                </p>
                <p class="monero-info-p kuno">
                In più, <a href="https://cakepay.com">CakePay</a> e <a href="https://coincards.com">CoinCards</a> offrono carte prepagate Visa e gift-cards per migliaia di negozi. Personal shoppers come <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> e <a href="https://shopinbit.com">ShopInBit</a> offrono un metodo conveniente per pagare fatture e spese con Monero.
                </p>
                <p class="monero-info-p kuno">
                La flessibilità di Monero rende facile raccogliere fondi per pagare spese, lanciare il tuo progetto o supportare una no-profit.
                </p>',
    'homepage_link_exchange_to_cash' => 'Scambia per contanti',
    'homepage_link_shop_online' => 'Acquista online',
    'homepage_link_marketplace' => 'Marketplace',
    'homepage_use_case_heading1' => 'Per le no-profits',
    'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                  Un piccolo rifugio per gatti ha bisogno di donazioni per pagare il cibo per i gatti e le spese veterinarie.
                </p>
                <p class="use-case-p kuno">
                  Hanno lanciato una Raccolta fondi su Kuno, condiviso il link sui loro social, e ricevuto delle donazioni.
                </p>
                <p class="use-case-p kuno">
                  Il rifugio usa i Monero raccolti per acquistare tramite CakePay delle gift-cards di Petsmart, e preleva i contanti per pagare il veterinario da un Crypto ATM.
                </p>
                <p class="use-case-p kuno">
                  Ogni donatore riceve un aggiornamento con le foto dei gatti.
                </p>',
    'homepage_use_case_heading2' => 'Per le persone',
    'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                  Alice ha bisogno di raccogliere soldi per delle spese mediche.
                </p>
                <p class="use-case-p kuno">
                  Sua figlia la aiuta a lanciare una Raccolta fondi Kuno, e a condividerla nella loro comunità.
                </p>
                <p class="use-case-p kuno">
                  Raccolgono abbastanza soldi e li scambiano per contanti con LocalMonero.
                </p>
                <p class="use-case-p kuno">
                  Alice scrive una sentita lettera di ringraziamento per ogni donatore come segno di apprezzamento.
                </p>',
    'homepage_use_case_heading3' => 'Per le startup',
    'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                  Uno sviluppatore indie vuole creare un nuovo gioco.
                </p>
                <p class="use-case-p kuno">
                  Lancia una Raccolta fondi su Kuno e la condivide con delle comunità di gaming.
                </p>
                <p class="use-case-p kuno">
                  Raggiunge l’obiettivo e usa i fondi per assumere degli artisti che accettano Monero su MoneroMarket, e acquista i tools per creare il suo gioco con una carta di debito virtuale di CakePay.
                </p>
                <p class="use-case-p kuno">
                  Ogni donatore riceve una copia gratuita del gioco.
                </p>',
    'homepage_use_case_heading4' => 'Per i creatori di contenuti',
    'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                  Una band carica le covers e la sua musica originale su Youtube.
                </p>
                <p class="use-case-p kuno">
                  Lanciano una Pagina per le Donazioni su Kuno per ricevere donazioni in Monero.
                </p>
                <p class="use-case-p kuno">
                  I fans possono anche suggerire canzoni o commentare durante le livestreams facendo una donazione.
                </p>
                <p class="use-case-p kuno">
                  Questo gli offre un modo migliore per monetizzare in maniera sostenibile i loro contenuti, a differenza delle ads.
                </p>',
    'homepage_use_case_heading5' => 'Per te',
    'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                  Con Kuno, chiunque può raccogliere soldi per il proprio progetto, causa o startup.
                </p>
                <p class="use-case-p kuno">
                  Tutto ciò che ti serve è un wallet Monero e un obiettivo.
                </p>',
    'fundraiser_heading_goal' => 'Obiettivo',
    'fundraiser_heading_raised' => 'Raccolti',
    'fundraiser_heading_percentage_funded' => 'completato',
    'fundraiser_heading_donations' => 'Donazioni',
    'fundraiser_heading_supporters' => 'Donatori',
    'fundraiser_heading_comments' => 'Commenti',
    'fundraiser_heading_support' => 'Supporta',
    'fundraiser_heading_share' => 'Condividi',
    'fundraiser_heading_about' => 'Descrizione',
    'fundraiser_heading_photos' => 'Foto',
    'fundraiser_heading_contact' => 'Contatti',
    'fundraiser_heading_date' => 'Pubblicato il:',
    'fundraiser_heading_supporters' => 'Donatori',
    'fundraiser_heading_new_comment' => 'Scrivi un commento',
    'fundraiser_heading_new_fundraiser' => 'Nuova Raccolta fondi',
    'fundraiser_heading_edit_fundraiser' => 'Modifica Raccolta fondi',
    'fundraiser_heading_logout' => 'Logout',
    'fundraiser_support_text' => 'Invia un importo qualsiasi di Monero a:',
    'fundraiser_share_text' => 'Copia il link per condividere questa raccolta fondi con amici o sui social media:',
    'fundraiser_open_in_wallet' => 'Apri nel wallet',
    'fundraiser_info_point1' => 'Invii la donazione direttamente al wallet del destinatario',
    'fundraiser_info_point2' => 'Niente intermediari o commissioni',
    'fundraiser_info_point3' => 'Le donazioni si sincronizzano ogni 5 minuti',
    'fundraiser_full_size_photo' => 'Foto a dimensioni intere',
    'fundraiser_no_donations' => 'Ancora nessuna donazione',
    'fundraiser_supporters' => '{AMOUNT} donatori',
    'fundraiser_button_support' => 'Supporta',
    'fundraiser_donate_with_monero' => 'Dona con Monero:',
    'fundraiser_comment_form_placeholder_txid' => 'TXID',
    'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Esempio: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
    'fundraiser_comment_form_placeholder_email' => 'Email (opzionale, per le ricompense della raccolta fondi)',
    'fundraiser_comment_form_placeholder_comment' => 'Scrivi un commento pubblico',
    'fundraiser_comment_form_submit' => 'Commenta',
    'search' => 'Cerca',
    'search_heading' => 'Cerca raccolte fondi',
    'search_text' => 'Cerca raccolte fondi...',
    'search_sort_by_new' => 'Ordina per: più recente',
    'search_sort_by_recently_donated' => 'Ordina per: ultima donazione',
    'search_sort_by_percentage_funded' => 'Ordina per: percentuale completata',
    'search_sort_by_goal' => 'Ordina per: obiettivo',
    'search_all_categories' => 'Tutte le categorie',
    'search_no_fundraisers_found' => 'Nessuna raccolta fondi trovata',
    'search_fediverse_heading' => 'Cerca Fediverse',
    'search_fediverse_text' => 'Cerca raccolte fondi Fediverse...',
    'search_fediverse_no_fundraisers_found' => 'Nessuna raccolta fondi Fediverse trovata',
    'search_fediverse_peers_list' => 'Lista delle instanze federate:',
    'login_invite_code_heading' => 'Nuova Raccolta fondi',
    'login_invite_code_text' => 'Inserisci un codice invito per iniziare una nuova raccolta fondi.',
    'login_invite_code_note' => 'Se non hai un codice invito, contatta il supporto.',
    'login_invite_code_form' => 'Codice invito',
    'login_invite_code_form_placeholder' => 'Codice invito',
    'login_invite_code_submit' => 'Continua',
    'login_fundraiser_form_fundraiser' => 'Raccolta fondi',
    'login_fundraiser_heading' => 'Modifica Raccolta fondi',
    'login_fundraiser_text' => 'Inserisci il codice della raccolta fondi e la password per modificare la tua raccolta fondi.',
    'login_fundraiser_note' => 'Il codice è nell’URL:',
    'login_fundraiser_forgot_password' => 'Password dimenticata?',
    'login_fundraiser_form_fundraiser' => 'Raccolta fondi',
    'login_fundraiser_form_fundraiser_placeholder' => 'Codice della Raccolta fondi (es. ae21)',
    'login_fundraiser_form_password' => 'Password',
    'login_fundraiser_form_password_placeholder' => 'Password',
    'login_fundraiser_form_submit' => 'Modifica raccolta fondi',
    'edit_fundraiser_heading_fundraiser_details' => 'Dettagli della raccolta fondi',
    'edit_fundraiser_fundraiser_details_text' => 'Descrivi la tua raccolta fondi e aggiungi delle foto.',
    'edit_fundraiser_form_optional' => '(Opzionale)',
    'edit_fundraiser_form_more_info' => '(Maggiori informazioni)',
    'edit_fundraiser_form_title' => 'Titolo',
    'edit_fundraiser_form_title_placeholder' => 'Titolo della raccolta fondi',
    'edit_fundraiser_form_photo' => 'Photo',
    'edit_fundraiser_form_additional_photos' => 'Foto aggiuntive',
    'edit_fundraiser_form_description' => 'Descrizione',
    'edit_fundraiser_form_description_placeholder' => 'Descrivi la tua raccolta fondi. Aggiungi ricompense, traguardi o dettagli di contatto, se necessario.',
    'edit_fundraiser_form_tags' => 'Tags',
    'edit_fundraiser_form_tags_placeholder' => 'Categoria, tags, ecc.',
    'edit_fundraiser_form_contact' => 'Contatti',
    'edit_fundraiser_form_contact_placeholder' => 'Email, sito, Twitter, Matrix, ecc.',
    'edit_fundraiser_form_visibility' => 'Imposta la raccolta fondi come privata (non verrá mostrata nei risultati di ricerca, i donatori avranno bisogno del link di accesso diretto)',
    'edit_fundraiser_heading_goal' => 'Obiettivo',
    'edit_fundraiser_goal_text' => "Imposta il tuo obiettivo e l'indirizzo Monero.",
    'edit_fundraiser_get_wallet' => 'Non hai un wallet Monero? Scaricane uno qui.',
    'edit_fundraiser_form_goal' => 'Obiettivo',
    'edit_fundraiser_form_goal_placeholder' => 'Obiettivo (XMR)',
    'edit_fundraiser_form_donation_page' => 'Nessun obiettivo – Voglio creare una Pagina per le Donazioni',
    'edit_fundraiser_form_monero_address' => 'Indirizzo Monero',
    'edit_fundraiser_form_monero_address_placeholder' => 'Esempio: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
    'edit_fundraiser_form_view_key' => 'Secret view key',
    'edit_fundraiser_form_view_key_placeholder' => 'Esempio: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
    'edit_fundraiser_heading_password' => 'Password',
    'edit_fundraiser_password_text' => 'Imposta una password per modificare la tua raccolta fondi più tardi.',
    'edit_fundraiser_widthdrawal_warning' => "Evita di prelevare somme parziali durante raccolte fondi attive. Monero utilizza tutto l'importo a disposizione per eseguire i pagamenti, e rimanda indietro il resto come una nuova transazione. Questa verrebbe erroneamente calcolata come donazione, e il progresso della tua raccolta fondi sarebbe impreciso. Se hai bisogno di usare i fondi subito, preleva sempre l'intero importo disponibile, senza lasciare resto.",
    'edit_fundraiser_form_email' => 'Email',
    'edit_fundraiser_form_email_placeholder' => 'Email (opzionale, per reimpostare la password)',
    'edit_fundraiser_form_password' => 'Password',
    'edit_fundraiser_form_new_password_placeholder' => 'Password',
    'edit_fundraiser_form_edit_password_placeholder' => 'Password (lascia vuoto se non vuoi modificarla)',
    'edit_fundraiser_form_email_notifications' => 'Mandami un’email quando la mia raccolta fondi riceve una donazione',
    'edit_fundraiser_form_submit_edit' => 'Aggiorna Raccolta fondi',
    'edit_fundraiser_form_submit_new' => 'Lancia Raccolta fondi',
    'edit_fundraiser_heading_supporters' => 'Donatori della raccolta fondi',
    'edit_fundraiser_supporters_text' => 'Se un donatore ha inserito il suo indirizzo email, lo vedrai qui (es. per le ricompense della raccolta fondi).',
    'edit_fundraiser_no_supporters' => 'Ancora nessuna email inserita',
    'edit_fundraiser_supporters_email' => 'Email',
    'edit_fundraiser_supporters_comment' => 'Commento',
    'edit_fundraiser_supporters_amount' => 'Importo',
    'edit_fundraiser_supporters_txid' => 'TXID',
    'edit_fundraiser_supporters_tx_key' => 'TX Key',
    'edit_fundraiser_supporters_date' => 'Data',
    'edit_fundraiser_heading_manage_fundraiser' => 'Gestisci Raccolta fondi',
    'edit_fundraiser_fix_view_key' => 'Inserisci una view key valida per riattivare la tua raccolta fondi.',
    'edit_fundraiser_deactivate_fundraiser' => 'Disattiva Raccolta fondi',
    'edit_fundraiser_reactivate_fundraiser' => 'Riattiva Raccolta fondi',
    'edit_fundraiser_delete_fundraiser' => 'Cancella i tuoi dati',
    'reset_password_heading' => 'Reimposta la Password',
    'reset_password_description' => 'Inserisci il codice della raccolta fondi e il tuo indirizzo email per reimpostare la tua password.',
    'reset_password_note' => '(Se non hai aggiunto un indirizzo email, contatta il supporto.)',
    'reset_password_form_fundraiser' => 'Raccolta fondi',
    'reset_password_form_fundraiser_placeholder' => 'Codice della raccolta fondi (es. ae21)',
    'reset_password_form_email' => 'Email',
    'reset_password_form_email_placeholder' => 'Email',
    'reset_password_form_confirmation_code' => 'Codice di conferma',
    'reset_password_form_confirmation_code_placeholder' => 'Codice di conferma',
    'reset_password_form_new_password' => 'Nuova password',
    'reset_password_form_new_password_placeholder' => 'Nuova password',
    'reset_password_form_submit' => 'Reimposta la Password',
    'success' => 'Successo',
    'success_form_submitted' => 'Modulo inviato con successo',
    'success_new_fundraiser' => 'La tua raccolta fondi è attiva: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Vedi la tua raccolta fondi qui</a><br>Aggiungi questo link ai preferiti per modificare la tua raccolta fondi: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Modifica raccolta fondi #{GUID}</a>',
    'success_new_donation_page' => 'La tua pagina per le donazioni è attiva: <a href="https://kuno.anne.media/donate/{GUID}/">Vedi la tua pagina per le donazioni qui</a><br>Aggiungi questo link ai preferiti per modificare la tua pagina per le donazioni: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Modifica pagina per le donazioni #{GUID}</a>',
    'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">La tua raccolta fondi è stata aggiornata.</a>',
    'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Clicca qui per modificare la tua raccolta fondi</a>',
    'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">La tua pagina per le donazioni è stata aggiornata.</a>',
    'success_fundraiser_deactivated' => 'Raccolta fondi disattivata',
    'success_fundraiser_reactivated' => 'Raccolta fondi riattivata',
    'success_fundraiser_deleted' => 'Raccolta fondi eliminata',
    'success_valid_invite_code' => 'Codice di invito valido. Ora puoi iniziare una raccolta fondi.',
    'success_valid_confirmation_code' => 'Codice di conferma valido',
    'success_check_email_for_password_reset_code' => 'Controlla il tuo indirizzo email per un codice di reimpostazione della password',
    'success_password_reset' => 'Password modificata, ora puoi <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">modificare la tua raccolta fondi</a>',
    'success_comment_sent' => 'Commento inviato!',
    'success_image_uploaded' => 'Immagine caricata',
    'error' => 'Errore',
    'error_please_refresh' => 'Ricarica la pagina e prova di nuovo.',
    'error_form_expired' => 'Modulo scaduto, ricarica la pagina',
    'error_form_ratelimited' => 'Limite di tentativi raggiunto, attendi {RATELIMIT} secondi',
    'error_session_expired' => 'Sessione scaduta, effettua di nuovo il login',
    'error_page_not_found' => 'Pagina non trovata',
    'error_fundraiser_not_found' => 'Raccolta fondi non trovata',
    'error_email_not_found' => 'Nessun indirizzo email è stato impostato, contatta il supporto',
    'error_invalid_email' => 'Inserisci un indirizzo email valido',
    'error_invalid_email_for_notifications' => 'Inserisci un indirizzo email valido per ricevere le notifiche',
    'error_invalid_confirmation_code' => 'Il codice di conferma non è valido o è scaduto',
    'error_invalid_monero_address' => 'Indirizzo Monero non valido (Inserisci il tuo indirizzo primario, che inizia con 4)',
    'error_invalid_view_key' => 'View key non valida (Inserisci la tua private/secret view key)',
    'error_invalid_address' => 'Indirizzo Monero non valido (Inserisci il tuo indirizzo primario, che inizia con 4)',
    'error_entered_public_view_key' => 'View key non valida (Inserisci la tua private/secret view key, non la public view key)',
    'error_entered_public_spend_key' => 'View key non valida (Inserisci la tua private/secret view key, non la public spend key)',
    'error_entered_private_spend_key' => 'View key non valida (Inserisci la tua private/secret view key, non la private spend key)',
    'error_invalid_private_view_key' => 'View key non valida (Inserisci la tua private/secret view key)',
    'error_invalid_txid' => 'TXID non valido',
    'error_invalid_tx_key' => 'Inserisci una TX key valida (conosciuta anche come TX proof)',
    'error_invalid_txid' => 'Inserisci un codice di invito valido',
    'error_incorrect_email' => 'Indirizzo email errato',
    'error_incorrect_password' => 'Password errata',
    'error_monero_address_already_used' => 'C’è giá una raccolta fondi/pagina per le donazioni con questo indirizzo Monero',
    'error_missing_fundraiser_code_or_email' => 'Inserisci il codice della tua raccolta fondi e l’indirizzo email',
    'error_missing_password_reset_code_or_password' => 'Inserisci il codice per reimpostare la tua password e la nuova password',
    'error_missing_txid_or_tx_key' => 'Inserisci sia il TXID che la TX key (conosciuta anche come TX proof)',
    'error_missing_password' => 'Inserisci la tua password',
    'error_missing_view_key' => 'Inserisci una private view key valida',
    'error_title_too_long' => 'Il titolo deve essere di 1-80 caratteri',
    'error_description_too_long' => 'La descrizione deve essere più corta di 8000 caratteri',
    'error_tags_too_long' => 'I Tags devono essere più corti di 250 caratteri',
    'error_contact_details_too_long' => 'I dettagli di contatto devono essere più corti di 250 caratteri',
    'error_goal_must_be_positive' => 'L’obiettivo della raccolta fondi deve essere un numero positivo',
    'error_image_incorrect_file_type' => 'Le immagini devono avere un formato PNG o JPEG',
    'error_image_maximum_image_size' => 'Massima dimensione per immagine: 2 MB',
    'error_image_invalid' => 'Immagine non valida',
    'error_image_storage_full' => 'Archivio pieno',
    'error_image_missing' => 'Carica un’immagine',
    'wallets_header' => 'Monero: <span class="text3">Wallet Consigliati</span>',
    'monero_gui_wallet' => 'Un wallet a interfaccia grafica (GUI) open-source sviluppato dalla community di Monero, completamente gratis, adatto sia a chi è alle prime armi che agli utenti esperti.',
    'cake_wallet' => 'Custodisci, invia e scambia le tue crypto facilmente e in modo sicuro. Acquista gitf-cards privatamente e paga alla cassa con le tue crypto.',
    'monerujo_wallet' => 'Wallet Android per Monero. Con Monerujo, puoi utilizzare simultaneamente diversi wallets. Crearne uno nuovo richiede pochi semplici passi.',
    'feather_wallet' => 'Feather è un wallet Monero gratis e open-source per Linux, Tails, Windows e macOS. Facile da usare, leggero, veloce e adatto anche a chi è agli inizi.',
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}

  function translate_sv($string) {
    static $strings = array(
      'site_name' => 'Kuno',
      'page_title' => 'Kuno – Insamling med Monero',
      'page_title_error' => 'Fel | Kuno – Insamling med Monero',
      'page_title_search' => 'Sök | Kuno – Insamling med Monero',
      'page_title_fediverse' => 'Fediverse | Kuno – Insamling med Monero',
      'page_title_reset_password' => 'Återställ lösenord | Kuno – Insamling med Monero',
      'page_title_edit_fundraiser' => 'Redigera insamling | Kuno – Insamling med Monero',
      'page_title_new_fundraiser' => 'Ny insamling | Kuno – Insamling med Monero',
      'pagination' => 'Sida {NUM} av {NUM_PAGES}',
      'pagination_fundraisers' => 'Visar {START}-{END} av {TOTAL} insamlingar',
      'pagination_donations' => 'Visar {START}-{END} av {TOTAL} donationer',
      'pagination_submit' => 'Gå',
      'nav_manage_fundraiser' => 'Hantera Insamlingar',
      'nav_search' => 'Sök insamlingar...',
      'nav_fundraiser_progress' => 'Framsteg för insamling:',
      'nav_edit_fundraiser' => 'Redigera insamling:',
      'nav_logout' => 'Logga ut',
      'footer_description' => 'Insamling med Monero',
      'footer_contact' => 'Kontakt: support [at] anne.media',
      'footer_language' => 'Språk:',
      'footer_light_mode' => 'Ljust läge',
      'footer_dark_mode' => 'Mörkt läge',
      'footer_manage_fundraiser' => 'Hantera din insamling:',
      'footer_new_fundraiser' => 'Ny Insamling',
      'footer_edit_fundraiser' => 'Redigera Insamling',
      'footer_reset_password' => 'Återställ Lösenord',
      'footer_quick_links' => 'Snabblänkar:',
      'footer_search_fundraisers' => 'Sök Insamlingar',
      'footer_search_fediverse' => 'Sök Fediverse',
      'footer_marketplace' => 'Marknad',
      'footer_rss_feed' => 'RSS Feed',
      'footer_faq' => 'Vanliga frågor',
      'email_new_donation_subject' => '[Kuno] Ny {DONATION} XMR donation till #{GUID}',
      'email_new_donation_body' => 'Din insamling har fått en ny donation!
          <br><br>Insamling: {TITLE}
          <br>Donation: {DONATION} XMR
          <br>Datum: {DATE}
          <br><br>Totalt insamlade medel: {TOTAL} XMR
          <br>Totalt stödjare: {SUPPORTERS}
          <br>Besök din insamling: https://kuno.anne.media/{TYPE}/{GUID}/
          <br><br>Inaktivera e-postaviseringar här:
          <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
      'email_reset_password_subject' => '[Kuno] Återställ lösenord',
      'email_reset_password_body' => 'Besök denna länk för att återställa ditt lösenord: {URL} eller ange denna kod: {CODE} (Giltig i 24 timmar)',
      'homepage_title' => 'Enkel insamling <br> för alla',
      'homepage_subtitle' => 'Insamling av pengar eller donation till en god sak med Monero',
      'homepage_point1' => 'Starta en insamling gratis',
      'homepage_point2' => 'Ta emot Monero (som du kan växla till kontanter)',
      'homepage_point3' => 'Inga avgifter, fungerar globalt, inget bankkonto krävs',
      'homepage_button_start_fundraiser' => 'Starta en insamling',
      'homepage_button_browse_fundraisers' => 'Bläddra bland insamlingar',
      'homepage_bar' => 'Det rättvisa alternativet till GoFundMe och Kickstarter',
      'homepage_heading_browse_fundraisers' => 'Bläddra bland {AMOUNT} insamlingar',
      'homepage_heading_total_raised' => 'Över {AMOUNT} XMR insamlade!',
      'homepage_top_categories' => 'Toppkategorier',
      'homepage_recent_donations' => 'Senaste Donationerna',
      'homepage_all_categories' => 'Alla kategorier',
      'homepage_launch_in_one_click' => 'Starta din insamling med 1 klick',
      'homepage_get_started_free' => 'Kom igång gratis',
      'homepage_info_heading1' => 'Monero är kontanter för internet',
      'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                  Monero är ett snabbt och säkert sätt att skicka och ta emot pengar online.
                  </p>
                  <p class="monero-info-p kuno">
                  Inget bankkonto, ingen ansökan eller legitimation krävs. Ladda helt enkelt ner en plånbok för din telefon eller dator för att skicka och ta emot pengar över hela världen med ett klick.
                  </p>
                  <p class="monero-info-p kuno">
                  Moneros användarvänlighet och tillgänglighet gör det till en idealisk betalningsmetod för onlinebutiker, distansarbete, överföringar, tips, insamlingar och mer.
                  </p>',
      'homepage_link_download_mobile' => 'Ladda ner för mobil',
      'homepage_link_download_desktop' => 'Ladda ner för desktop',
      'homepage_info_heading2' => 'Ocensurerbara donationer',
      'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                  Med Monero tillhör dina pengar dig.
                  </p>
                  <p class="monero-info-p kuno">
    Monero är mjukvara och förlitar sig inte på tredje parter eller företag. Transaktioner kan inte censureras, medel kan inte frysas och användare kan inte deplattformeras.
                  </p>
                  <p class="monero-info-p kuno">
                  Oavsett om du samlar in medel med Monero eller donerar till en välgörenhet kan du känna dig trygg med att veta att mottagaren får 100% av donationen.
                  </p>',
      'homepage_link_official_website' => 'Officiell webbplats',
      'homepage_link_overview' => 'Översikt',
      'homepage_link_buy_monero' => 'Köp Monero',
      'homepage_info_heading3' => 'Använd det var som helst',
      'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                  Växla Monero till kontanter, handla online eller betala räkningar.
                  </p>
                  <p class="monero-info-p kuno">
                  Det är enkelt att växla Monero till fysiska kontanter med <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> eller en <a href="https://coinatmradar.com">Crypto ATM</a> (inget bankkonto krävs).
                  </p>
                  <p class="monero-info-p kuno">
                  Marknadsplatser som <a href="https://moneromarket.io">MoneroMarket</a> och kataloger som <a href="https://monerica.com">Monerica</a> och <a href="https://acceptedhere.io">AcceptedHere</a> hjälper dig att köpa det du behöver med Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  Dessutom erbjuder <a href="https://cakepay.com">CakePay</a> och <a href="https://coincards.com">CoinCards</a> förbetaldakort och presentkort till tusentals företag. Personliga shoppers som <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> och <a href="https://shopinbit.com">ShopInBit</a> erbjuder ett bekvämt sätt att betala fakturor med Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  Moneros flexibilitet gör det enkelt att samla in medel för att betala räkningar, starta ditt projekt eller stödja en välgörenhet.
                  </p>',
      'homepage_link_exchange_to_cash' => 'Växla till kontanter',
      'homepage_link_shop_online' => 'Handla online',
      'homepage_link_marketplace' => 'Marknad',
      'homepage_use_case_heading1' => 'För välgörenhetsorganisationer',
      'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                    Ett lokalt katthem behöver donationer till kattmat och veterinärkostnader.
                  </p>
                  <p class="use-case-p kuno">
                    De startar en Kuno-insamling, delar länken i sociala medier och får donationer.
                  </p>
                  <p class="use-case-p kuno">
                    Katthemet använder insamlade Monero för att köpa Petsmart-presentkort med CakePay och tar ut kontanter för att betala veterinärnotan med en Crypto ATM.
                  </p>
                  <p class="use-case-p kuno">
                    Varje donator får en uppdatering med bilder på katterna.
                  </p>',
      'homepage_use_case_heading2' => 'För privatpersoner',
      'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    Alice behöver samla in pengar till sjukvårdsräkningar.
                  </p>
                  <p class="use-case-p kuno">
                    Hennes dotter hjälper henne att starta en Kuno-insamling och delar den med deras vänkrets.
                  </p>
                  <p class="use-case-p kuno">
                    De samlar tillräckligt med pengar och växlar det till kontanter med LocalMonero.
                  </p>
                  <p class="use-case-p kuno">
                    Alice skriver ett hjärtligt tackbrev till varje donator som en uppskattningens gest.
                  </p>',
      'homepage_use_case_heading3' => 'För nystartade företag',
      'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    En indieutvecklare vill skapa ett nytt spel.
                  </p>
                  <p class="use-case-p kuno">
                    Han startar en Kuno-insamling och delar den med spelgemenskapen.
                  </p>
                  <p class="use-case-p kuno">
                    Han når målet och använder medlen för att anställa Monero-vänliga konstnärer från MoneroMarket och köpa spelresurser med ett virtuellt CakePay betalkort.
                  </p>
                  <p class="use-case-p kuno">
                    Varje donator får en gratis kopia av spelet.
                  </p>',
      'homepage_use_case_heading4' => 'För innehållsskapare',
      'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                    Ett band laddar upp sina covers och originalmusik på Youtube.
                  </p>
                  <p class="use-case-p kuno">
                    De startar en Kuno-donationssida för att ta emot Monero-donationer.
                  </p>
                  <p class="use-case-p kuno">
                    Fans kan också föreslå låtar eller kommentera under livestreams genom att göra en donation.
                  </p>
                  <p class="use-case-p kuno">
                    Detta erbjuder ett bättre sätt att hållbart monetarisera deras innehåll jämfört med annonser.
                  </p>',
      'homepage_use_case_heading5' => 'För dig',
      'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    Med Kuno kan alla samla in pengar till sitt projekt, orsak eller start-up.
                  </p>
                  <p class="use-case-p kuno">
                    Allt du behöver är en Monero-plånbok och ett mål.
                  </p>',
      'fundraiser_heading_goal' => 'Mål',
      'fundraiser_heading_raised' => 'Insamlat',
      'fundraiser_heading_percentage_funded' => 'finansieras',
      'fundraiser_heading_donations' => 'Donationer',
      'fundraiser_heading_supporters' => 'Supportrar',
      'fundraiser_heading_comments' => 'Kommentarer',
      'fundraiser_heading_support' => 'Stöd',
      'fundraiser_heading_share' => 'Dela',
      'fundraiser_heading_about' => 'Om',
      'fundraiser_heading_photos' => 'Foton',
      'fundraiser_heading_contact' => 'Kontakt',
      'fundraiser_heading_date' => 'Publicerad:',
      'fundraiser_heading_supporters' => 'Supportrar',
      'fundraiser_heading_new_comment' => 'Skriv en kommentar',
      'fundraiser_heading_new_fundraiser' => 'Ny Insamling',
      'fundraiser_heading_edit_fundraiser' => 'Redigera Insamling',
      'fundraiser_heading_logout' => 'Logga ut',
      'fundraiser_support_text' => 'Skicka valfritt belopp i Monero till:',
      'fundraiser_share_text' => 'Kopiera länken för att dela denna insamling med vänner eller på sociala medier:',
      'fundraiser_open_in_wallet' => 'Öppna i plånbok',
      'fundraiser_info_point1' => 'Du donerar direkt till mottagarens plånbok',
      'fundraiser_info_point2' => 'Inga mellanhänder eller avgifter',
      'fundraiser_info_point3' => 'Donationer synkroniseras var 5:e minut',
      'fundraiser_full_size_photo' => 'Fullstorlek på foto',
      'fundraiser_no_donations' => 'Inga donationer ännu',
      'fundraiser_supporters' => '{AMOUNT} supportrar',
      'fundraiser_button_support' => 'Stöd',
      'fundraiser_donate_with_monero' => 'Donera med Monero:',
      'fundraiser_comment_form_placeholder_txid' => 'TXID',
      'fundraiser_comment_form_placeholder_tx_key' => 'TX-nyckel (Exempel: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
      'fundraiser_comment_form_placeholder_email' => 'E-post (valfritt, för insamlingsbelöningar)',
      'fundraiser_comment_form_placeholder_comment' => 'Skriv en offentlig kommentar',
      'fundraiser_comment_form_submit' => 'Kommentera',
      'search' => 'Sök',
      'search_heading' => 'Sök insamlingar',
      'search_text' => 'Sök insamlingar...',
      'search_sort_by_new' => 'Sortera efter nytt',
      'search_sort_by_recently_donated' => 'Sortera efter nyligen donerat',
      'search_sort_by_percentage_funded' => 'Sortera efter fonderingsprocent',
      'search_sort_by_goal' => 'Sortera efter mål',
      'search_all_categories' => 'Alla kategorier',
      'search_no_fundraisers_found' => 'Inga insamlingar hittades',
      'search_fediverse_heading' => 'Sök i Fediverse',
      'search_fediverse_text' => 'Sök i Fediverse-insamlingar...',
      'search_fediverse_no_fundraisers_found' => 'Inga Fediverse-insamlingar hittades',
      'search_fediverse_peers_list' => 'Lista av federerade instanser:',
      'login_invite_code_heading' => 'Ny Insamling',
      'login_invite_code_text' => 'Ange en inbjudningskod för att starta en ny insamling.',
      'login_invite_code_note' => 'Om du inte har en inbjudningskod, kontakta support.',
      'login_invite_code_form' => 'Inbjudningskod',
      'login_invite_code_form_placeholder' => 'Inbjudningskod',
      'login_invite_code_submit' => 'Fortsätt',
      'login_fundraiser_form_fundraiser' => 'Insamling',
      'login_fundraiser_heading' => 'Redigera Insamling',
      'login_fundraiser_text' => 'Ange insamlingskoden och lösenordet för att redigera din insamling.',
      'login_fundraiser_note' => 'Koden finns i URL:en:',
      'login_fundraiser_forgot_password' => 'Glömt lösenord?',
      'login_fundraiser_form_fundraiser' => 'Insamling',
      'login_fundraiser_form_fundraiser_placeholder' => 'Insamlingskod (t.ex. ae21)',
      'login_fundraiser_form_password' => 'Lösenord',
      'login_fundraiser_form_password_placeholder' => 'Lösenord',
      'login_fundraiser_form_submit' => 'Redigera Insamling',
      'edit_fundraiser_heading_fundraiser_details' => 'Insamlingsdetaljer',
      'edit_fundraiser_fundraiser_details_text' => 'Beskriv din insamling och lägg till foton.',
      'edit_fundraiser_form_optional' => '(Valfritt)',
      'edit_fundraiser_form_more_info' => '(Mer information)',
      'edit_fundraiser_form_title' => 'Titel',
      'edit_fundraiser_form_title_placeholder' => 'Insamlingsrubrik',
      'edit_fundraiser_form_photo' => 'Foto',
      'edit_fundraiser_form_additional_photos' => 'Ytterligare foton',
      'edit_fundraiser_form_description' => 'Beskrivning',
      'edit_fundraiser_form_description_placeholder' => 'Beskriv din insamling. Lägg till insamlingsbelöningar, milstolpar eller kontaktuppgifter om det behövs.',
      'edit_fundraiser_form_tags' => 'Taggar',
      'edit_fundraiser_form_tags_placeholder' => 'Kategori, taggar, etc.',
      'edit_fundraiser_form_contact' => 'Kontakt',
      'edit_fundraiser_form_contact_placeholder' => 'E-post, webbplats, Twitter, Matrix, etc.',
      'edit_fundraiser_form_visibility' => 'Sätt insamlingen som privat (visas inte i sökresultaten, donatorer behöver den direkta länken)',
      'edit_fundraiser_heading_goal' => 'Mål',
      'edit_fundraiser_goal_text' => 'Ställ in ditt mål och Monero-adress.',
      'edit_fundraiser_get_wallet' => 'Ingen Monero-plånbok? Skaffa en här.',
      'edit_fundraiser_form_goal' => 'Mål',
      'edit_fundraiser_form_goal_placeholder' => 'Mål (XMR)',
      'edit_fundraiser_form_donation_page' => 'Inget mål – Jag vill skapa en donationsida',
      'edit_fundraiser_form_monero_address' => 'Monero-adress',
      'edit_fundraiser_form_monero_address_placeholder' => 'Exempel: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
      'edit_fundraiser_form_view_key' => 'Hemlig vy-nyckel',
      'edit_fundraiser_form_view_key_placeholder' => 'Exempel: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
      'edit_fundraiser_heading_password' => 'Lösenord',
      'edit_fundraiser_password_text' => 'Ange ett lösenord för att redigera din insamling senare.',
      'edit_fundraiser_widthdrawal_warning' => 'Undvik att ta ut delvisa saldon under pågående insamlingar. Monero använder hela saldon för betalningar och lämnar kvar resterande belopp som nya transaktioner. Detta skulle felaktigt beräknas som en donation, och din insamlingsframsteg kommer att vara felaktig. Om du behöver använda medel under resan, ta alltid ut hela saldot och lämna inget "växel".',
      'edit_fundraiser_form_email' => 'E-post',
      'edit_fundraiser_form_email_placeholder' => 'E-post (valfritt, för lösenordsåterställningar)',
      'edit_fundraiser_form_password' => 'Lösenord',
      'edit_fundraiser_form_new_password_placeholder' => 'Lösenord',
      'edit_fundraiser_form_edit_password_placeholder' => 'Lösenord (lämna tomt om ingen ändring)',
      'edit_fundraiser_form_email_notifications' => 'E-posta mig när min insamling får en ny donation',
      'edit_fundraiser_form_submit_edit' => 'Uppdatera Insamling',
      'edit_fundraiser_form_submit_new' => 'Starta Insamling',
      'edit_fundraiser_heading_supporters' => 'Insamlingsupportrar',
      'edit_fundraiser_supporters_text' => 'Om en supporter har angett sin e-postadress kommer du att se den här (t.ex. för insamlingsbelöningar).',
      'edit_fundraiser_no_supporters' => 'Inga e-postmeddelanden ännu',
      'edit_fundraiser_supporters_email' => 'E-post',
      'edit_fundraiser_supporters_comment' => 'Kommentar',
      'edit_fundraiser_supporters_amount' => 'Belopp',
      'edit_fundraiser_supporters_txid' => 'TXID',
      'edit_fundraiser_supporters_tx_key' => 'TX-nyckel',
      'edit_fundraiser_supporters_date' => 'Datum',
      'edit_fundraiser_heading_manage_fundraiser' => 'Hantera Insamling',
      'edit_fundraiser_fix_view_key' => 'Lägg till en giltig vy-nyckel för att återaktivera din insamling.',
      'edit_fundraiser_deactivate_fundraiser' => 'Inaktivera Insamling',
      'edit_fundraiser_reactivate_fundraiser' => 'Återaktivera Insamling',
      'edit_fundraiser_delete_fundraiser' => 'Radera Dina Data',
      'reset_password_heading' => 'Återställ Lösenord',
      'reset_password_description' => 'Ange insamlingskoden och din e-postadress för att återställa ditt lösenord.',
      'reset_password_note' => '(Om du inte har lagt till en e-postadress, kontakta support.)',
      'reset_password_form_fundraiser' => 'Insamling',
      'reset_password_form_fundraiser_placeholder' => 'Insamlingskod (t.ex. ae21)',
      'reset_password_form_email' => 'E-post',
      'reset_password_form_email_placeholder' => 'E-post',
      'reset_password_form_confirmation_code' => 'Bekräftelsekod',
      'reset_password_form_confirmation_code_placeholder' => 'Bekräftelsekod',
      'reset_password_form_new_password' => 'Nytt lösenord',
      'reset_password_form_new_password_placeholder' => 'Nytt lösenord',
      'reset_password_form_submit' => 'Återställ Lösenord',
      'success' => 'Framgång',
      'success_form_submitted' => 'Formulär framgångsrikt skickat',
      'success_new_fundraiser' => 'Din insamling är aktiv: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Visa din insamling här</a><br>Bokmärk denna länk för att redigera din insamling: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Redigera insamling #{GUID}</a>',
      'success_new_donation_page' => 'Din donationsida är aktiv: <a href="https://kuno.anne.media/donate/{GUID}/">Visa din donationsida här</a><br>Bokmärk denna länk för att redigera din donationsida: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Redigera donationsida #{GUID}</a>',
      'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Din insamling har uppdaterats.</a>',
      'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Klicka här för att redigera din insamling</a>',
      'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Din donationsida har uppdaterats.</a>',
      'success_fundraiser_deactivated' => 'Insamlingen inaktiverad',
      'success_fundraiser_reactivated' => 'Insamlingen återaktiverad',
      'success_fundraiser_deleted' => 'Insamlingen raderad',
      'success_valid_invite_code' => 'Giltig inbjudningskod. Du kan nu starta en insamling.',
      'success_valid_confirmation_code' => 'Giltig bekräftelsekod',
      'success_check_email_for_password_reset_code' => 'Kontrollera din e-postadress för en lösenordsåterställningskod',
      'success_password_reset' => 'Lösenord ändrat, du kan nu <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">redigera din insamling</a>',
      'success_comment_sent' => 'Kommentar skickad!',
      'success_image_uploaded' => 'Bild uppladdad',
      'error' => 'Fel',
      'error_please_refresh' => 'Vänligen uppdatera och försök igen.',
      'error_form_expired' => 'Formuläret har gått ut, vänligen uppdatera',
      'error_form_ratelimited' => 'Ratelimiterat, vänta {RATELIMIT} sekunder',
      'error_session_expired' => 'Sessionen har löpt ut, vänligen logga in igen',
      'error_page_not_found' => 'Sidan kunde inte hittas',
      'error_fundraiser_not_found' => 'Insamling hittades inte',
      'error_email_not_found' => 'Ingen e-postadress är inställd, kontakta support',
      'error_invalid_email' => 'Vänligen ange en giltig e-postadress',
      'error_invalid_email_for_notifications' => 'Vänligen ange en giltig e-postadress för att aktivera aviseringar',
      'error_invalid_confirmation_code' => 'Bekräftelsekoden är ogiltig eller har löpt ut',
      'error_invalid_monero_address' => 'Ogiltig Monero-adress (Ange din primära adress, som börjar med 4)',
      'error_invalid_view_key' => 'Ogiltig vyckel (Ange din privata/hemliga vyckel)',
      'error_invalid_address' => 'Ogiltig Monero-adress (Ange din primära adress, som börjar med 4)',
      'error_entered_public_view_key' => 'Ogiltig vyckel (Ange din privata/hemliga vyckel, inte offentlig vyckel)',
      'error_entered_public_spend_key' => 'Ogiltig vyckel (Ange din privata/hemliga vyckel, inte offentlig spenderingsvyckel)',
      'error_entered_private_spend_key' => 'Ogiltig vyckel (Ange din privata/hemliga vyckel, inte privat spenderingsvyckel)',
      'error_invalid_private_view_key' => 'Ogiltig vyckel (Ange din privata/hemliga vyckel)',
      'error_invalid_txid' => 'Ogiltig TXID',
      'error_invalid_tx_key' => 'Vänligen ange en giltig TX-nyckel (även känd som TX-bevis)',
      'error_invalid_txid' => 'Vänligen ange en giltig inbjudningskod',
      'error_incorrect_email' => 'Felaktig e-postadress',
      'error_incorrect_password' => 'Felaktigt lösenord',
      'error_monero_address_already_used' => 'Det finns redan en insamlings-/donationssida med denna Monero-adress',
      'error_missing_fundraiser_code_or_email' => 'Ange din insamlingskod och e-postadress',
      'error_missing_password_reset_code_or_password' => 'Ange din lösenordsåterställningskod och nytt lösenord',
      'error_missing_txid_or_tx_key' => 'Ange både TXID och TX-nyckel (även känd som TX-bevis)',
      'error_missing_password' => 'Ange ditt lösenord',
      'error_missing_view_key' => 'Ange en giltig privat vyckel',
      'error_title_too_long' => 'Rubriken måste vara mellan 1-80 tecken',
      'error_description_too_long' => 'Beskrivningen måste vara kortare än 8000 tecken',
      'error_tags_too_long' => 'Taggar måste vara kortare än 250 tecken',
      'error_contact_details_too_long' => 'Kontaktuppgifter måste vara kortare än 250 tecken',
      'error_goal_must_be_positive' => 'Insamlingsmålet måste vara ett positivt nummer',
      'error_image_incorrect_file_type' => 'Bilden måste vara en PNG eller JPEG',
      'error_image_maximum_image_size' => 'Max bildstorlek 2 MB',
      'error_image_invalid' => 'Ogiltig bild',
      'error_image_storage_full' => 'Lagring full',
      'error_image_missing' => 'Ladda upp en bild, vänligen',
      'translate_help' => 'Det skulle vara fantastiskt om Kuno var tillgänglig på fler språk. Hjälp oss med översättningar på <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
      );
      $translation = ($strings[$string]) ? $strings[$string] : $string;
      return $translation;
  }

  function translate_pt($string) {
    static $strings = array(
      'site_name' => 'Kuno',
      'page_title' => 'Kuno – Arrecade fundos com Monero',
      'page_title_error' => 'Erro | Kuno – Arrecade fundos com Monero',
      'page_title_search' => 'Pesquisar | Kuno – Arrecade fundos com Monero',
      'page_title_fediverse' => 'Fediverse | Kuno – Arrecade fundos com Monero',
      'page_title_reset_password' => 'Redefinir senha | Kuno – Arrecade fundos com Monero',
      'page_title_edit_fundraiser' => 'Editar arrecadação de fundos | Kuno – Arrecade fundos com Monero',
      'page_title_new_fundraiser' => 'Nova arrecadação de fundos | Kuno – Arrecade fundos com Monero',
      'pagination' => 'Pagina {NUM} of {NUM_PAGES}',
      'pagination_fundraisers' => 'Visualizar {START}-{END} de {TOTAL} doações',
      'pagination_donations' => 'Visualizar {START}-{END} de {TOTAL} doações',
      'pagination_submit' => 'Vai',
      'nav_manage_fundraiser' => 'Gerenciar arrecadação de fundos',
      'nav_search' => 'Encontre arrecadação de fundos...',
      'nav_fundraiser_progress' => 'Progresso da arrecadação de fundos:',
      'nav_edit_fundraiser' => 'Editar a arrecadação de fundos:',
      'nav_logout' => 'Fechar Sessão',
      'footer_description' => 'Arrecade fundos com Monero',
      'footer_contact' => 'Contato: suporte [at] anne.media',
      'footer_language' => 'Linguagem:',
      'footer_light_mode' => 'Modo luminoso',
      'footer_dark_mode' => 'Modo escuro',
      'footer_manage_fundraiser' => 'Gerencie sua arrecadação de fundos:',
      'footer_new_fundraiser' => 'Nova arrecadação de fundos',
      'footer_edit_fundraiser' => 'Editar campanha de arrecadação de fundos',
      'footer_reset_password' => 'Restaurar senha',
      'footer_quick_links' => 'Links Rápidos:',
      'footer_search_fundraisers' => 'Pesquisar coleções',
      'footer_search_fediverse' => 'Pesquise no Fediverse',
      'footer_marketplace' => 'Mercado',
      'footer_rss_feed' => 'RSS Feed',
      'footer_faq' => 'FAQ',
      'email_new_donation_subject' => '[Kuno] Novo{DONATION} Doação de XMR para #{GUID}',
      'email_new_donation_body' => 'Sua arrecadação de fundos recebeu uma nova doação!
           <br><br>Arrecadação de fundos: {TITLE}
           <br>Doação: {DONATION} XMR
           <br>Fecha: {DATE}
           <br><br>Doações totais: {TOTAL} XMR
           <br>Total de colaboradores: {SUPPORTERS}
           <br>Visite sua arrecadação de fundos: https://kuno.anne.media/{TYPE}/{GUID}/
           <br><br>Desative as notificações por e-mail aqui:
           <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
      'email_reset_password_subject' => '[Kuno] Restaurar senha',
      'email_reset_password_body' => 'Visite este link para redefinir sua senha: {URL} ou digite este código: {CODE} (Valid for 24 hours)',
      'homepage_title' => 'Arrecadação de fundos fácil <br> para todos',
      'homepage_subtitle' => 'Arrecade dinheiro ou doe para uma boa causa com Monero',
      'homepage_point1' => 'Arrecadação de fundos gratuita',
      'homepage_point2' => 'Receba Monero (que você pode trocar por dinheiro)',
      'homepage_point3' => 'Sem taxas, funciona em todo o mundo, sem necessidade de conta bancária',
      'homepage_button_start_fundraiser' => 'Comece uma arrecadação de fundos',
      'homepage_button_browse_fundraisers' => 'Arrecadação de fundos',
      'homepage_bar' => 'A alternativa justa ao GoFundMe e Kickstarter',
      'homepage_heading_browse_fundraisers' => 'Pesquisar {AMOUNT} campanhas de arrecadação de fundos',
      'homepage_heading_total_raised' => 'Mais {AMOUNT} XMR arrecadados!',
      'homepage_top_categories' => 'Categorias principais',
      'homepage_recent_donations' => 'Doações recentes',
      'homepage_all_categories' => 'Todas as categorias',
      'homepage_launch_in_one_click' => 'Comece sua arrecadação de fundos com 1 clique',
      'homepage_get_started_free' => 'Comece gratuitamente',
      'homepage_info_heading1' => 'Monero é dinheiro para a Internet',
      'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                   Monero é uma maneira rápida e segura de enviar e receber dinheiro online.
                  </p>
                  <p class="monero-info-p kuno">
                   Não é necessária conta bancária ou identificação governamental. Basta baixar uma carteira para o seu telefone ou computador para enviar e receber dinheiro ao redor do mundo com um único clique.
  
                  </p>
                  <p class="monero-info-p kuno">
                  A simplicidade e acessibilidade do Monero fazem dele um método de pagamento ideal para lojas online, trabalho remoto, remessas, gorjetas, arrecadação de fundos e muito mais.
                  </p>',
      'homepage_link_download_mobile' => 'Download para celular',
      'homepage_link_download_desktop' => 'Download para computador',
      'homepage_info_heading2' => 'Doações sem censura',
      'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                  Com Monero, seu dinheiro pertence a você.
                  </p>
                  <p class="monero-info-p kuno">
    Monero é um software e não depende de terceiros ou corporações. As transações não podem ser censuradas, os fundos não podem ser congelados e os usuários não podem ser desativados.
                  </p>
                  <p class="monero-info-p kuno">
                  Quer você arrecade fundos com Monero ou doe para uma boa causa, você pode ter certeza de que o beneficiário receberá 100% da doação.
                  </p>',
      'homepage_link_official_website' => 'Web oficial',
      'homepage_link_overview' => 'Resumo',
      'homepage_link_buy_monero' => 'Comprar Monero',
      'homepage_info_heading3' => 'Gaste onde você quiser',
      'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                  Troque Monero por dinheiro, compre online ou pague contas.
                  </p>
                  <p class="monero-info-p kuno">
                  É fácil trocar Monero por dinheiro físico com <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> or a <a href="https://coinatmradar.com">Crypto ATM</a> (você não precisa de uma conta bancária).
                  </p>
                  <p class="monero-info-p kuno">
                  Em mercados como <a href="https://moneromarket.io">MoneroMarket</a>e em diretórios como<a href="https://monerica.com">Monerica</a> e <a href="https://acceptedhere.io">AcceptedHere</a> isso o ajudará a comprar o que você precisa com o Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  Além disso, <a href="https://cakepay.com">CakePay</a> e <a href="https://coincards.com">CoinCards</a> oferecem cartões Visa pré-pagos e milhares de cartões-presente .de lojas. Compradores pessoais como <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> e <a href ="https://shopinbit.com">ShopInBit</a> oferece uma maneira conveniente de pagar contas com Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  A flexibilidade do Monero facilita a arrecadação de fundos para pagar contas, iniciar um projeto ou apoiar uma instituição de caridade.
                  </p>',
      'homepage_link_exchange_to_cash' => 'Troca por dinheiro',
      'homepage_link_shop_online' => 'Compre online',
      'homepage_link_marketplace' => 'Mercado',
      'homepage_use_case_heading1' => 'Para instituições de caridade',
      'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                    Um abrigo local para gatos precisa de doações para comida de gato e contas do veterinário.
                  </p>
                  <p class="use-case-p kuno">
                    Crie uma campanha de arrecadação de fundos Kuno, compartilhe o link nas redes sociais e receba doações..
                  </p>
                  <p class="use-case-p kuno">
                    O abrigo usa o Monero arrecadado para comprar cartões-presente Petsmart com CakePay e saca dinheiro para pagar a conta do veterinário em um Crypto ATM.
                  </p>
                  <p class="use-case-p kuno">
                   Cada doador recebe uma atualização com fotos dos gatos.
                  </p>',
      'homepage_use_case_heading2' => 'Para indivíduos',
      'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    Alice precisa arrecadar dinheiro para contas médicas.
                  </p>
                  <p class="use-case-p kuno">
                    Sua filha a ajuda a organizar uma arrecadação de fundos para Kuno e a compartilha com sua comunidade.
                  </p>
                  <p class="use-case-p kuno">
                    Eles coletam dinheiro suficiente e trocam por dinheiro com LocalMonero.
                  </p>
                  <p class="use-case-p kuno">
                   Alice escreve uma carta de agradecimento sincera a cada doador como forma de agradecimento.
                  </p>',
      'homepage_use_case_heading3' => 'Para novas empresas',
      'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    Um desenvolvedor independente quer criar um novo jogo.
                  </p>
                  <p class="use-case-p kuno">
                    Crie uma arrecadação de fundos Kuno e compartilhe-a com comunidades de jogos.
                  </p>
                  <p class="use-case-p kuno">
                    Alcance a meta e use os fundos para contratar artistas Monero-Friendly do MoneroMarket e comprar ativos no jogo com um cartão de débito virtual CakePay..
                  </p>
                  <p class="use-case-p kuno">
                    Cada doador recebe uma cópia gratuita do jogo.
                  </p>',
      'homepage_use_case_heading4' => 'Para criadores de conteúdo',
      'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                    Um grupo envia seus covers e músicas originais para o YouTube.
                  </p>
                  <p class="use-case-p kuno">
                    Eles criaram uma página de doações em Kuno para receber doações em Monero.
                  </p>
                  <p class="use-case-p kuno">
                    Os fãs também podem sugerir músicas ou fazer comentários durante as transmissões ao vivo fazendo uma doação.
                  </p>
                  <p class="use-case-p kuno">
                    Isso oferece uma maneira melhor de monetizar seu conteúdo de forma sustentável, em comparação com os anúncios.
                  </p>',
      'homepage_use_case_heading5' => 'Para você',
      'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    Com Kuno, todos podem arrecadar dinheiro para seu projeto, causa ou startup.
                  </p>
                  <p class="use-case-p kuno">
                    Tudo que você precisa é de uma carteira Monero e uma meta.
                  </p>',
   'fundraiser_heading_goal' => 'Meta',
       'fundraiser_heading_raised' => 'Arrecadado',
       'fundraiser_heading_percentage_funded' => 'Contribuições',
       'fundraiser_heading_donations' => 'Doações',
       'fundraiser_heading_supporters' => 'Apoiadores',
       'fundraiser_heading_comments' => 'Comentários',
       'fundraiser_heading_support' => 'Apoio',
       'fundraiser_heading_share' => 'Compartilhar',
       'fundraiser_heading_about' => 'Sobre',
       'fundraiser_heading_photos' => 'Fotos',
       'fundraiser_heading_contact' => 'Contato',
       'fundraiser_heading_date' => 'Publicado:',
       'fundraiser_heading_supporters' => 'Apoiadores',
       'fundraiser_heading_new_comment' => 'Escreva um comentário',
       'fundraiser_heading_new_fundraiser' => 'Nova arrecadação de fundos',
       'fundraiser_heading_edit_fundraiser' => 'Editar arrecadação de fundos',
       'fundraiser_heading_logout' => 'Sair',
       'fundraiser_support_text' => 'Envie qualquer quantia de Monero para:',
       'fundraiser_share_text' => 'Copiar o link para compartilhar esta arrecadação de fundos com amigos ou nas redes sociais:',
       'fundraiser_open_in_wallet' => 'Abrir na carteira',
       'fundraiser_info_point1' => 'Você doa diretamente para a carteira do beneficiário',
       'fundraiser_info_point2' => 'Sem intermediários ou comissões',
       'fundraiser_info_point3' => 'As doações são sincronizadas a cada 5 minutos',
       'fundraiser_full_size_photo' => 'Foto em tamanho grande',
       'fundraiser_no_donations' => 'Nenhuma doação ainda',
       'fundraiser_supporters' => '{AMOUNT} apoiadores',
       'fundraiser_button_support' => 'Apoio',
       'fundraiser_donate_with_monero' => 'Doe com Monero:',
       'fundraiser_comment_form_placeholder_txid' => 'TXID',
       'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Example: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
       'fundraiser_comment_form_placeholder_email' => 'E-mail (opcional, para recompensas de arrecadação de fundos)',
       'fundraiser_comment_form_placeholder_comment' => 'Escreva um comentário público',
       'fundraiser_comment_form_submit' => 'Comentário',
       'pesquisar' => 'Pesquisar em',
       'search_heading' => 'Pesquisar arrecadação de fundos',
       'search_text' => 'Pesquisar arrecadação de fundos..',
       'search_sort_by_new' => 'Classificar por novo',
       'search_sort_by_recently_donated' => 'Classificar por doações recentes',
       'search_sort_by_percentage_funded' => 'Classificar por porcentagem financiada',
       'search_sort_by_goal' => 'Classificar por objetivo',
       'search_all_categories' => 'Todas as categorias',
       'search_no_fundraisers_found' => 'Nenhuma arrecadação de fundos encontrada',
       'search_fediverse_heading' => 'Pesquisar Fediverse',
       'search_fediverse_text' => 'Pesquisar arrecadações de fundos Fediverse...',
       'search_fediverse_no_fundraisers_found' => 'Nenhuma arrecadação de fundos Fediverse encontrada',
       'search_fediverse_peers_list' => 'Lista de instâncias federadas:',
       'login_invite_code_heading' => 'Nova arrecadação de fundos',
       'login_invite_code_text' => 'Digite um código de convite para iniciar uma nova arrecadação de fundos.',
       'login_invite_code_note' => 'Se você não possui um código de convite, entre em contato com o suporte.',
       'login_invite_code_form' => 'Código de convite',
       'login_invite_code_form_placeholder' => 'Código de convite',
       'login_invite_code_submit' => 'Continuar',
       'login_fundraiser_form_fundraiser' => 'Arrecadação de fundos',
       'login_fundraiser_heading' => 'Editar arrecadação de fundos',
       'login_fundraiser_text' => 'Digite o código e a senha para editar sua arrecadação de fundos.',
       'login_fundraiser_note' => 'O código está na URL:',
       'login_fundraiser_forgot_password' => 'Esqueceu sua senha?',
       'login_fundraiser_form_fundraiser' => 'Arrecadação de fundos',
       'login_fundraiser_form_fundraiser_placeholder' => 'Código de arrecadação de fundos (por exemplo, ae21)',
       'login_fundraiser_form_password' => 'Senha',
       'login_fundraiser_form_password_placeholder' => 'Senha',
       'login_fundraiser_form_submit' => 'Editar arrecadação de fundos',
       'edit_fundraiser_heading_fundraiser_details' => 'Detalhes da arrecadação de fundos',
       'edit_fundraiser_fundraiser_details_text' => 'Descreva sua arrecadação de fundos e adicione fotos.',
       'edit_fundraiser_form_optional' => '(Opcional)',
       'edit_fundraiser_form_more_info' => '(Mais informações)',
       'edit_fundraiser_form_title' => 'Título',
       'edit_fundraiser_form_title_placeholder' => 'Título da arrecadação de fundos',
       'edit_fundraiser_form_photo' => 'Fotos',
       'edit_fundraiser_form_additional_photos' => 'Fotos adicionais',
       'edit_fundraiser_form_description' => 'Descrição',
       'edit_fundraiser_form_description_placeholder' => 'Descreva sua arrecadação de fundos. Adicione recompensas, marcos ou detalhes de contato, se necessário.',
       'edit_fundraiser_form_tags' => 'Tags',
      'edit_fundraiser_form_tags_placeholder' => 'Categorias, tags, etc.',
       'edit_fundraiser_form_contact' => 'Contato',
       'edit_fundraiser_form_contact_placeholder' => 'E-mail, site, Twitter, Matrix, etc.',
       'edit_fundraiser_form_visibility' => 'Defina a arrecadação de fundos como privada (ela não aparecerá nos resultados da pesquisa, os doadores precisarão do link direto)',
       'edit_fundraiser_heading_goal' => 'Meta',
       'edit_fundraiser_goal_text' => 'Defina sua meta e seu endereço Monero.',
       'edit_fundraiser_get_wallet' => 'Não tem uma carteira Monero? Pegue um aqui.',
       'edit_fundraiser_form_goal' => 'Meta',
       'edit_fundraiser_form_goal_placeholder' => 'Meta (XMR)',
       'edit_fundraiser_form_donation_page' => 'Sem objetivo - quero fazer uma página de doações',
       'edit_fundraiser_form_monero_address' => 'Endereço Monero',
       'edit_fundraiser_form_monero_address_placeholder' => 'Exemplo: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
       'edit_fundraiser_form_view_key' => 'Chave de visualização secreta',
       'edit_fundraiser_form_view_key_placeholder' => 'Exemplo: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
       'edit_fundraiser_heading_password' => 'Senha',
       'edit_fundraiser_password_text' => 'Defina uma senha para editar sua campanha mais tarde.',
       'edit_fundraiser_widthdrawal_warning' => 'Evite sacar saldos parciais durante arrecadações de fundos em andamento. Monero usa saldos totais para pagamentos, deixando os valores restantes como novas transações. Isso seria falsamente calculado como uma doação, e o progresso de seus fundos de arrecadação seria impreciso. Se você precisa utilizar os fundos em movimento, sempre sacar todo o saldo, sem deixar nenhum "troco"',
       'edit_fundraiser_form_email' => 'E-mail',
       'edit_fundraiser_form_email_placeholder' => 'E-mail (opcional, para redefinir senha)',
       'edit_fundraiser_form_password' => 'Senha',
       'edit_fundraiser_form_new_password_placeholder' => 'Senha',
       'edit_fundraiser_form_edit_password_placeholder' => 'Senha (deixe em branco se não houver alterações)',
       'edit_fundraiser_form_email_notifications' => 'Envie-me um e-mail quando minha arrecadação de fundos receber uma nova doação',
       'edit_fundraiser_form_submit_edit' => 'Atualizar campanha de arrecadação de fundos',
       'edit_fundraiser_form_submit_new' => 'Iniciar arrecadação de fundos',
       'edit_fundraiser_heading_supporters' => 'Apoiadores da arrecadação de fundos',
       'edit_fundraiser_supporters_text' => 'Se um apoiador inseriu seu endereço de e-mail, ele poderá vê-lo aqui (por exemplo, para recompensas de arrecadação de fundos)..',
       'edit_fundraiser_no_supporters' => 'Nenhum email foi enviado ainda',
       'edit_fundraiser_supporters_email' => 'E-mail',
       'edit_fundraiser_supporters_comment' => 'Comentário',
       'edit_fundraiser_supporters_amount' => 'Valor',
       'edit_fundraiser_supporters_txid' => 'TXID',
       'edit_fundraiser_supporters_tx_key' => 'TX Key',
       'edit_fundraiser_supporters_date' => 'Data',
       'edit_fundraiser_heading_manage_fundraiser' => 'Gerenciar arrecadação de fundos',
       'edit_fundraiser_fix_view_key' => 'Adicione uma chave de visualização válida para reativar sua arrecadação de fundos..',
       'edit_fundraiser_deactivate_fundraiser' => 'Desativar arrecadação de fundos',
       'edit_fundraiser_reactivate_fundraiser' => 'Reativar arrecadação de fundos',
       'edit_fundraiser_delete_fundraiser' => 'Excluir seus dados',
       'reset_password_heading' => 'Redefinir senha',
       'reset_password_description' => 'Digite o código de arrecadação de fundos e seu endereço de e-mail para redefinir sua senha.',
       'reset_password_note' => '(Se você não adicionou um endereço de e-mail, entre em contato com o suporte.)',
       'reset_password_form_fundraiser' => 'Arrecadação de fundos',
       'reset_password_form_fundraiser_placeholder' => 'Código da arrecadação de fundos (por exemplo, ae21)',
       'reset_password_form_email' => 'E-mail',
       'reset_password_form_email_placeholder' => 'E-mail',
       'reset_password_form_confirmation_code' => 'Código de confirmação',
       'reset_password_form_confirmation_code_placeholder' => 'Código de confirmação',
       'reset_password_form_new_password' => 'Nova senha',
       'reset_password_form_new_password_placeholder' => 'Nova senha',
       'reset_password_form_submit' => 'Redefinir senha',
       'success' => 'Sucesso',
      'success_form_submitted' => 'Formulario enviado correctamente',
      'success_new_fundraiser' => 'Su recaudación de fondos está activa: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Vea su recaudación de fondos aquí</a><br>Marca este enlace para editar tu recaudación de fondos: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Editar recaudación de fondos #{GUID}</a>',
      'success_new_donation_page' => 'Su recaudación de fondos está activa: <a href="https://kuno.anne.media/donate/{GUID}/">Vea aquí su página de donativos</a><br>Marque este enlace para editar su página de donación: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Editar la página de donativos #{GUID}</a>',
      'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Su recaudación de fondos ha sido actualizada.</a>',
      'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Haga clic aquí para editar su recaudación de fondos</a>',
      'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Se ha actualizado su página de donativos.</a>',
      'success_fundraiser_deactivated' => 'Recaudación de fondos desactivada',
      'success_fundraiser_reactivated' => 'Reactivación de la recaudación de fondos',
      'success_fundraiser_deleted' => 'Recaudación de fondos eliminada',
      'success_valid_invite_code' => 'Código de invitación válido. Ya puede iniciar una recaudación de fondos.',
      'success_valid_confirmation_code' => 'Código de confirmación válido',
      'success_check_email_for_password_reset_code' => 'Consulta tu dirección de correo electrónico para obtener un código de restablecimiento de contraseña',
      'success_password_reset' => 'Contraseña cambiada, ahora puede <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">editar su recaudación de fondos</a>',
      'success_comment_sent' => 'Comentario enviado!',
      'success_image_uploaded' => 'Imagen cargada',
      'error' => 'Error',
      'error_please_refresh' => 'Por favor, actualice e inténtelo de nuevo.',
      'error_form_expired' => 'Formulario caducado, actualícelo',
      'error_form_ratelimited' => 'Ratelimitado, por favor espere {RATELIMIT} segundos',
      'error_session_expired' => 'La sesión ha caducado, vuelva a iniciar sesión',
      'error_page_not_found' => 'Pagina no encontrada',
      'error_fundraiser_not_found' => 'Recaudación de fondos no encontrada',
      'error_email_not_found' => 'No se ha configurado ninguna dirección de correo electrónico, póngase en contacto con el servicio de asistencia',
      'error_invalid_email' => 'Introduzca una dirección de correo electrónico válida',
      'error_invalid_email_for_notifications' => 'Introduzca una dirección de correo electrónico válida para activar las notificaciones.',
      'error_invalid_confirmation_code' => 'El código de confirmación no es válido o ha caducado',
      'error_invalid_monero_address' => 'Dirección de Monero no válida (Por favor, introduzca su dirección principal, que empieza por 4)',
      'error_invalid_view_key' => 'Clave de visualización no válida (introduzca su clave de visualización privada/secreta)',
      'error_invalid_address' => 'Dirección de Monero no válida (Por favor, introduzca su dirección principal, que empieza por 4)',
      'error_entered_public_view_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la pública)',
      'error_entered_public_spend_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la pública)',
      'error_entered_private_spend_key' => 'Clave de vista no válida (introduzca su clave de vista privada/secreta, no la clave de gasto privada)',
      'error_invalid_private_view_key' => 'Clave de visualización no válida (introduzca su clave de visualización privada/secreta))',
      'error_invalid_txid' => 'Invalida TXID',
      'error_invalid_tx_key' => 'Por favor, introduzca una clave TX válida (también conocida como prueba TX)',
      'error_invalid_txid' => 'Introduzca un código de invitación válido',
      'error_incorrect_email' => 'Dirección de correo electrónico incorrecta',
      'error_incorrect_password' => 'Contraseña incorrecta',
      'error_monero_address_already_used' => 'Ya existe una página de recaudación de fondos/donaciones con esta dirección de Monero',
      'error_missing_fundraiser_code_or_email' => 'Introduzca su código de recaudación de fondos y su dirección de correo electrónico',
      'error_missing_password_reset_code_or_password' => 'Introduzca el código de restablecimiento de contraseña y la nueva contraseña',
      'error_missing_txid_or_tx_key' => 'Por favor, introduzca tanto el TXID y la clave TX (también conocida como prueba TX)',
      'error_missing_password' => 'Introduzca su contraseña',
      'error_missing_view_key' => 'Por favor, introduzca una clave de vista privada válida',
      'error_title_too_long' => 'El título debe tener entre 1 y 80 caracteres',
      'error_description_too_long' => 'La descripción debe tener menos de 8000 caracteres',
      'error_tags_too_long' => 'Las etiquetas deben tener menos de 250 caracteres',
      'error_contact_details_too_long' => 'Los datos de contacto deben tener menos de 250 caracteres',
      'error_goal_must_be_positive' => 'El objetivo de recaudación de fondos debe ser una cifra positiva',
      'error_image_incorrect_file_type' => 'La imagen debe ser PNG o JPEG',
      'error_image_maximum_image_size' => 'Tamaño máximo de imagen 2 MB',
      'error_image_invalid' => 'Imagen inválida',
      'error_image_storage_full' => 'Almacenamiento lleno',
      'error_image_missing' => 'Suba una imagen',
      'translate_help' => 'Seria fantástico se o Kuno estivesse acessível em mais idiomas. Ajude-nos com traduções em <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
      'wallets_header' => 'Monero: <span class="text3">Wallet Choices</span>',
      'monero_gui_wallet' => 'Un monedero de interfaz gráfica de usuario (GUI) de código abierto desarrollado por la comunidad Monero, de uso totalmente gratuito, adecuado tanto para principiantes como para usuarios avanzados.',
      'cake_wallet' => 'Almacene, envíe e intercambie sus criptomonedas de forma segura y sencilla. Compre en privado tarjetas regalo y pague en ventanilla con cripto, es pan comido.',
      'monerujo_wallet' => 'Monedero Android para Monero. Con Monerujo, puedes ir y venir sin problemas entre varios monederos. Hacer una nueva es tan simple como unos pocos toques.',
      'feather_wallet' => 'Feather es un monedero Monero gratuito y de código abierto para Linux, Tails, Windows y macOS. Fácil de usar, pequeño, rápido y amigable para principiantes.',
    );
    $translation = ($strings[$string]) ? $strings[$string] : $string;
    return $translation;
  }

  function translate_sw($string) {
    static $strings = array(
      'site_name' => 'Kuno',
      'page_title' => 'Kuno – Kuchangisha Fedha na Monero',
      'page_title_error' => 'Kosa | Kuno – Kuchangisha Fedha na Monero',
      'page_title_search' => 'Tafuta | Kuno – Kuchangisha Fedha na Monero',
      'page_title_fediverse' => 'Fediverse | Kuno – Kuchangisha Fedha na Monero',
      'page_title_reset_password' => 'Badilisha Nenosiri | Kuno – Kuchangisha Fedha na Monero',
      'page_title_edit_fundraiser' => 'Hariri Uchangishaji | Kuno – Kuchangisha Fedha na Monero',
      'page_title_new_fundraiser' => 'mpya Uchangishaji | Kuno – Kuchangisha Fedha na Monero',
      'pagination' => 'Ukurasa {NUM} ya {NUM_PAGES}',
      'pagination_fundraisers' => 'Kuonyesha {START}-{END} ya {TOTAL} Wachangishaji',
      'pagination_donations' => 'Kuonyesha {START}-{END} ya {TOTAL} michango',
      'pagination_submit' => 'Enda',
      'nav_manage_fundraiser' => 'Simamia Wachangishaji',
      'nav_search' => 'Tafuta Wachangishaji...',
      'nav_fundraiser_progress' => 'Maendeleo ya Kuchangisha Fedha:',
      'nav_edit_fundraiser' => 'Hariri Kuchangisha Fedha:',
      'nav_logout' => 'Toka',
      'footer_description' => 'Kuchangisha Fedha na Monero',
      'footer_contact' => 'Wasiliana: msaada [at] anne.media',
      'footer_language' => 'Lugha:',
      'footer_light_mode' => 'Mode Mwanga',
      'footer_dark_mode' => 'Mode Giza',
      'footer_manage_fundraiser' => 'Simamia kampeni yako ya kuchangisha:',
      'footer_new_fundraiser' => 'Kampeni Mpya ya Kuchangisha',
      'footer_edit_fundraiser' => 'Hariri Kampeni ya Kuchangisha',
      'footer_reset_password' => 'Badilisha Nenosiri',
      'footer_quick_links' => 'Viungo Haraka:',
      'footer_search_fundraisers' => 'Tafuta Wachangishaji',
      'footer_search_fediverse' => 'Tafuta Fediverse',
      'footer_marketplace' => 'Soko',
      'footer_rss_feed' => 'RSS Feed',
      'footer_faq' => 'FAQ',
      'email_new_donation_subject' => '[Kuno] Mchango Mpya wa {DONATION} XMR kwa #{GUID}',
      'email_new_donation_body' => 'Kampeni yako ya kukusanya fedha imepokea mchango mpya!,
           <br><br>Kampeni: {TITLE}
           <br>Mchango: {DONATION} XMR
           <br>Tarehe: {DATE}
           <br><br>Jumla ya michango: {TOTAL} XMR
           <br>Jumla ya wafadhili: {SUPPORTERS}
           <br>Tembelea kampeni yako: https://kuno.anne.media/{TYPE}/{GUID}/
           <br><br>Zima arifa za barua pepe hapa:
           <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
      'email_reset_password_subject' => '[Kuno] Rudisha Nenosiri',
      'email_reset_password_body' => 'Tembelea kiungo hiki ili kurudisha nenosiri lako: {URL} au ingiza nambari hii: {CODE} (Inaendelea kwa masaa 24)',
      'homepage_title' => 'Kuchangisha Fedha Rahisi <br> kwa Kila Mtu',
      'homepage_subtitle' => 'Changisha pesa au toa kwa kusudi jema na Monero',
      'homepage_point1' => 'Anzisha kampeni ya kukusanya fedha bila malipo',
      'homepage_point2' => 'Pokea Monero (unayoweza kubadilisha kuwa pesa taslimu)',
      'homepage_point3' => 'Hakuna ada, inafanya kazi kimataifa, hakuna akaunti ya benki inayohitajika',
      'homepage_button_start_fundraiser' => 'Anzisha Kampeni ya Kuchangisha Fedha',
      'homepage_button_browse_fundraisers' => 'Vinjari Kampeni za Kuchangisha Fedha',
      'homepage_bar' => 'Chaguo haki kwa GoFundMe na Kickstarter',
      'homepage_heading_browse_fundraisers' => 'Vinjari {AMOUNT} ya Kampeni za Kuchangisha Fedha',
      'homepage_heading_total_raised' => 'Zaidi ya {AMOUNT} ya XMR Imekusanywa!',
      'homepage_top_categories' => 'Jamii Bora',
      'homepage_recent_donations' => 'Michango ya Hivi Karibuni',
      'homepage_all_categories' => 'Jamii Zote',
      'homepage_launch_in_one_click' => 'Anzisha kampeni yako kwa Bofya 1',
      'homepage_get_started_free' => 'Anza Bure',
      'homepage_info_heading1' => 'Monero ni pesa kwa mtandao',
      'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                   Monero ni njia haraka na salama ya kutuma na kupokea pesa mtandaoni.
                  </p>
                  <p class="monero-info-p kuno">
                   Hakuna akaunti ya benki, maombi au kitambulisho cha serikali kinachohitajika. Pakua tu mkoba kwenye simu yako au kompyuta ili kutuma na kupokea pesa ulimwenguni kwa bofya moja.
                  </p>
                  <p class="monero-info-p kuno">
                  Urahisi na upatikanaji wa Monero hufanya iwe njia bora ya malipo kwa maduka mtandaoni, kazi za kijijini, malipo ya watu wa mbali, tips, kampeni za kuchangisha fedha na zaidi.
                  </p>',
      'homepage_link_download_mobile' => 'Pakua kwa Simu',
      'homepage_link_download_desktop' => 'Pakua kwa Kompyuta',
      'homepage_info_heading2' => 'Michango isiyoweza kufutwa',
      'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                  Pesa yako ni yako na Monero.
                  </p>
                  <p class="monero-info-p kuno">
        Monero ni programu na haishtakiwi kwa wakala wa tatu au makampuni. Biashara haziwezi kufutwa, pesa hazifungiwi na watumiaji hawawezi kufunguliwa akaunti.
                  </p>
                  <p class="monero-info-p kuno">
                  Iwe unachangisha fedha na Monero au kutoa kwa kusudi jema, unaweza kuwa na amani ya akili kwamba mpokeaji anakabidhiwa 100% ya mchango.
                  </p>',
      'homepage_link_official_website' => 'Tovuti Rasmi',
      'homepage_link_overview' => 'Maelezo',
      'homepage_link_buy_monero' => 'Nunua Monero',
      'homepage_info_heading3' => 'Tumia Mahali Popote',
      'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                  Badilisha Monero kuwa pesa taslimu, nunua mtandaoni au lipa bili.
                  </p>
                  <p class="monero-info-p kuno">
                  Ni rahisi kubadilisha Monero kuwa pesa taslimu na  <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> au <a href="https://coinatmradar.com">ATM ya Crypto</a> (hakuna akaunti ya benki inayohitajika).
                  </p>
                  <p class="monero-info-p kuno">
                  Masoko kama <a href="https://moneromarket.io">MoneroMarket</a> na nyimbo kama <a href="https://monerica.com">Monerica</a> na <a href="https://acceptedhere.io">AcceptedHere</a> wanakusaidia kununua unachohitaji na Monero.
                  </p>
                  <p class="monero-info-p kuno">
                  Zaidi ya hayo, <a href="https://cakepay.com">CakePay</a> na <a href="https://coincards.com">CoinCards</a> wanatoa kadi za Visa zilizolipwa na kadi za zawadi kwa maelfu ya biashara. Wauzaji wa kib
                  </p>
                  <p class="monero-info-p kuno">
                  Urahisi wa Monero unafanya iwe rahisi kukusanya fedha kulipa bili, kuanzisha mradi wako au kusaidia shirika la hisani.
                  </p>',
                  'homepage_link_exchange_to_cash' => 'Badilisha kuwa pesa taslimu',
      'homepage_link_shop_online' => 'Nunua mtandaoni',
      'homepage_link_marketplace' => 'Soko',
      'homepage_use_case_heading1' => 'Kwa Mashirika ya Kusaidia',
      'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                    Shelisheli ya paka ya eneo inahitaji michango kwa chakula cha paka na bili za daktari.
                  </p>
                  <p class="use-case-p kuno">
                    Wanaweka Kuno Fundraiser, wanashiriki kiungo kwenye media ya kijamii na kupokea michango.
                  </p>
                  <p class="use-case-p kuno">
                    Shelisheli inatumia Monero iliyokusanywa kununua kadi za zawadi za Petsmart na CakePay na kutoa pesa taslimu kulipa bili ya daktari na ATM ya Crypto.
                  </p>
                  <p class="use-case-p kuno">
                    Kila mtoaji anapokea sasisho na picha za paka.
                  </p>',
      'homepage_use_case_heading2' => 'Kwa Watu Binafsi',
      'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    Alice anahitaji kukusanya pesa kwa bili za matibabu.
                  </p>
                  <p class="use-case-p kuno">
                    Binti yake anamsaidia kuanzisha Kuno Fundraiser na kushiriki na jamii yao.
                  </p>
                  <p class="use-case-p kuno">
                    Wanakusanya pesa za kutosha na kuzibadilisha kuwa pesa taslimu na LocalMonero.
                  </p>
                  <p class="use-case-p kuno">
                    Alice anaandika barua ya shukrani yenye upendo kwa kila mtoaji kama ishara ya shukrani.
                  </p>',
      'homepage_use_case_heading3' => 'Kwa Kampuni Mpya',
      'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    Msanii huru anataka kuunda mchezo mpya.
                  </p>
                  <p class="use-case-p kuno">
                    Anaweka Kuno Fundraiser na kushiriki na jamii za michezo.
                  </p>
                  <p class="use-case-p kuno">
                    Anafikia lengo na kutumia fedha kumchukua msanii anayependa Monero kutoka MoneroMarket na kununua mali za mchezo na kadi ya malipo ya CakePay.
                  </p>
                  <p class="use-case-p kuno">
                    Kila mtoaji anapata nakala ya bure ya mchezo.
                  </p>',
      'homepage_use_case_heading4' => 'Kwa Wazalishaji wa Yaliyomo',
      'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                    Kikundi kinapakia nyimbo zao za kufunika na muziki wa asili kwenye Youtube.
                  </p>
                  <p class="use-case-p kuno">
                    Wanaweka Kuno Donation Page kupokea michango ya Monero.
                  </p>
                  <p class="use-case-p kuno">
                    Mashabiki wanaweza pia kupendekeza nyimbo au kutoa maoni wakati wa matangazo ya moja kwa moja kwa kufanya mchango.
                  </p>
                  <p class="use-case-p kuno">
                    Hii inatoa njia bora ya kusimamia mapato yao ya yaliyomo kwa muda mrefu, ikilinganishwa na matangazo.
                  </p>',
      'homepage_use_case_heading5' => 'Kwako',
      'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    Na Kuno, kila mtu anaweza kukusanya pesa kwa mradi wao, kusudi au kampuni mpya.
                  </p>
                  <p class="use-case-p kuno">
                  Kila unachohitaji ni mkoba wa Monero na lengo.
                  </p>',
      'fundraiser_heading_goal' => 'Lengo',
      'fundraiser_heading_raised' => 'Imepatikana',
      'fundraiser_heading_percentage_funded' => 'imefadhiliwa',
      'fundraiser_heading_donations' => 'Michango',
      'fundraiser_heading_supporters' => 'Wafadhili',
      'fundraiser_heading_comments' => 'Maoni',
      'fundraiser_heading_support' => 'Fadhili',
      'fundraiser_heading_share' => 'Shiriki',
      'fundraiser_heading_about' => 'Kuhusu',
      'fundraiser_heading_photos' => 'Picha',
      'fundraiser_heading_contact' => 'Wasiliana nasi',
      'fundraiser_heading_date' => 'Imechapishwa:',
      'fundraiser_heading_new_comment' => 'Andika maoni',
      'fundraiser_heading_new_fundraiser' => 'Mradi Mpya',
      'fundraiser_heading_edit_fundraiser' => 'Hariri Mradi',
      'fundraiser_heading_logout' => 'Toka',
      'fundraiser_support_text' => 'Tuma kiasi chochote cha Monero kwenda kwa:',
      'fundraiser_share_text' => 'Nakili kiungo hiki ili kushiriki mradi huu na marafiki au mitandao ya kijamii:',
      'fundraiser_open_in_wallet' => 'Fungua kwa mkoba',
      'fundraiser_info_point1' => 'Unachangia moja kwa moja kwenye mkoba wa mpokeaji',
      'fundraiser_info_point2' => 'Hakuna wakala wa kati au ada',
      'fundraiser_info_point3' => 'Michango inaambatishwa kila baada ya dakika 5',
      'fundraiser_full_size_photo' => 'Picha kamili',
      'fundraiser_no_donations' => 'Hakuna michango bado',
      'fundraiser_supporters' => '{AMOUNT} wafadhili',
      'fundraiser_button_support' => 'Fadhili',
      'fundraiser_donate_with_monero' => 'Toa na Monero:',
      'fundraiser_comment_form_placeholder_txid' => 'TXID',
      'fundraiser_comment_form_placeholder_tx_key' => 'Funguo ya TX (Mfano: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
      'fundraiser_comment_form_placeholder_email' => 'Barua pepe (hiari, kwa tuzo za mradi)',
      'fundraiser_comment_form_placeholder_comment' => 'Andika maoni ya umma',
      'fundraiser_comment_form_submit' => 'Maoni',
      'search' => 'Tafuta',
      'search_heading' => 'Tafuta miradi',
      'search_text' => 'Tafuta miradi...',
      'search_sort_by_new' => 'Panga kwa mpya',
      'search_sort_by_recently_donated' => 'Panga kwa michango iliyotolewa hivi karibuni',
      'search_sort_by_percentage_funded' => 'Panga kwa asilimia iliyofadhiliwa',
      'search_sort_by_goal' => 'Panga kwa lengo',
      'search_all_categories' => 'Vikundi vyote',
      'search_no_fundraisers_found' => 'Hakuna miradi iliyopatikana',
      'search_fediverse_heading' => 'Tafuta Fediverse',
      'search_fediverse_text' => 'Tafuta miradi ya Fediverse...',
      'search_fediverse_no_fundraisers_found' => 'Hakuna miradi ya Fediverse iliyopatikana',
      'search_fediverse_peers_list' => 'Orodha ya seva za kufedereta:',
      'login_invite_code_heading' => 'Mradi Mpya',
      'login_invite_code_text' => 'Ingiza msimbo wa mwaliko ili kuanzisha mradi mpya.',
      'login_invite_code_note' => 'Ikiwa huna msimbo wa mwaliko, tafadhali wasiliana na msaada.',
      'login_invite_code_form' => 'Msimbo wa mwaliko',
      'login_invite_code_form_placeholder' => 'Msimbo wa mwaliko',
      'login_invite_code_submit' => 'Endelea',
      'login_fundraiser_form_fundraiser' => 'Mradi',
      'login_fundraiser_heading' => 'Hariri Mradi',
      'login_fundraiser_text' => 'Ingiza msimbo wa mradi na nywila yako ya barua pepe kuhariri mradi wako.',
      'login_fundraiser_note' => 'Msimbo uko kwenye URL:',
      'login_fundraiser_forgot_password' => 'Umesahau nywila?',
      'login_fundraiser_form_fundraiser' => 'Mradi',
      'login_fundraiser_form_fundraiser_placeholder' => 'Msimbo wa mradi (k.m. ae21)',
      'login_fundraiser_form_password' => 'Nywila',
      'login_fundraiser_form_password_placeholder' => 'Nywila',
      'login_fundraiser_form_submit' => 'Hariri Mradi',
      'edit_fundraiser_heading_fundraiser_details' => 'Maelezo ya Mradi',
      'edit_fundraiser_fundraiser_details_text' => 'Eleza mradi wako na ongeza picha.',
      'edit_fundraiser_form_optional' => '(Hiari)',
      'edit_fundraiser_form_more_info' => '(Maelezo zaidi)',
      'edit_fundraiser_form_title' => 'Jina',
      'edit_fundraiser_form_title_placeholder' => 'Jina la Mradi',
      'edit_fundraiser_form_photo' => 'Picha',
      'edit_fundraiser_form_additional_photos' => 'Picha Zaidi',
      'edit_fundraiser_form_description' => 'Maelezo',
      'edit_fundraiser_form_description_placeholder' => 'Eleza mradi wako. Ongeza tuzo za mradi, hatua muhimu au maelezo ya mawasiliano, ikiwa ni lazima',
      'edit_fundraiser_form_tags' => 'Lebo',
      'edit_fundraiser_form_tags_placeholder' => 'Jamii, lebo, nk.',
      'edit_fundraiser_form_contact' => 'Wasiliana nasi',
      'edit_fundraiser_form_contact_placeholder' => 'Barua pepe, tovuti, Twitter, Matrix, nk.',
      'edit_fundraiser_form_visibility' => 'Weka mradi kuwa binafsi (haionyeshwi kwenye matokeo ya utafutaji, wafadhili watahitaji kiungo moja kwa moja)',
      'edit_fundraiser_heading_goal' => 'Lengo',
      'edit_fundraiser_goal_text' => 'Wekea lengo lako na anwani ya Monero.',
      'edit_fundraiser_get_wallet' => 'Huna mkoba wa Monero? Pata hapa.',
      'edit_fundraiser_form_goal' => 'Lengo',
      'edit_fundraiser_form_goal_placeholder' => 'Lengo (XMR)',
      'edit_fundraiser_form_donation_page' => 'Hakuna lengo - Ninataka Kuunda Ukurasa wa Michango',
      'edit_fundraiser_form_monero_address' => 'Anwani ya Monero',
      'edit_fundraiser_form_monero_address_placeholder' => 'Mfano: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
      'edit_fundraiser_form_view_key' => 'Funguo ya Siri ya Kutazama',
      'edit_fundraiser_form_view_key_placeholder' => 'Mfano: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
      'edit_fundraiser_heading_password' => 'Nywila',
      'edit_fundraiser_password_text' => 'Weka nywila ili kuhariri mradi wako baadaye.',
      'edit_fundraiser_widthdrawal_warning' => "Epuka kutoa salio la sehemu wakati wa miradi inayoendelea. Monero hutumia salio kamili kwa malipo, ikiiacha kiasi kilichobaki kama shughuli mpya. Hii itahesabiwa kimakosa kama mchango, na maendeleo ya mradi wako yatakuwa sahihi. Ikiwa unahitaji kutumia pesa unapotembea, daima ondoa salio lako kamili, ukisalia hakuna 'mabadiliko'.",
      'edit_fundraiser_form_email' => 'Barua pepe',
      'edit_fundraiser_form_email_placeholder' => 'Barua pepe (hiari, kwa ajili ya kurejesha nywila)',
      'edit_fundraiser_form_password' => 'Nywila',
      'edit_fundraiser_form_new_password_placeholder' => 'Nywila',
      'edit_fundraiser_form_edit_password_placeholder' => 'Nywila (acha tupu ikiwa hakuna mabadiliko)',
      'edit_fundraiser_form_email_notifications' => 'Nipatie barua pepe ninapopokea mchango mpya kwenye mradi wangu',
      'edit_fundraiser_form_submit_edit' => 'Sasisha Mradi',
      'edit_fundraiser_form_submit_new' => 'Anza Mradi',
      'edit_fundraiser_heading_supporters' => 'Wafadhili wa Mradi',
      'edit_fundraiser_supporters_text' => 'Ikiwa mfadhili ameingiza anwani yao ya barua pepe, utaiona hapa (kwa mfano, kwa tuzo za mradi).',
      'edit_fundraiser_no_supporters' => 'Hakuna barua pepe zilizowasilishwa bado',
      'edit_fundraiser_supporters_email' => 'Barua pepe',
      'edit_fundraiser_supporters_comment' => 'Maoni',
      'edit_fundraiser_supporters_amount' => 'Kiasi',
      'edit_fundraiser_supporters_txid' => 'TXID',
      'edit_fundraiser_supporters_tx_key' => 'Funguo ya TX',
      'edit_fundraiser_supporters_date' => 'Tarehe',
      'edit_fundraiser_heading_manage_fundraiser' => 'Simamia Mradi',
      'edit_fundraiser_fix_view_key' => 'Tafadhali ongeza funguo halali ya kutazama ili kurejesha upya mradi wako.',
      'edit_fundraiser_deactivate_fundraiser' => 'Zima Mradi',
      'edit_fundraiser_reactivate_fundraiser' => 'Washa upya Mradi',
      'edit_fundraiser_delete_fundraiser' => 'Futa Data Yako',
      'reset_password_heading' => 'Rejesha Nywila',
      'reset_password_description' => 'Ingiza msimbo wa mradi na anwani yako ya barua pepe ili kurejesha nywila yako.',
      'reset_password_note' => '(Ikiwa hukuiweka anwani yako ya barua pepe, tafadhali wasiliana na msaada.)',
      'reset_password_form_fundraiser' => 'Mradi',
      'reset_password_form_fundraiser_placeholder' => 'Msimbo wa mradi (k.m. ae21)',
      'reset_password_form_email' => 'Barua pepe',
      'reset_password_form_email_placeholder' => 'Barua pepe',
      'reset_password_form_confirmation_code' => 'Nambari ya Uthibitisho',
      'reset_password_form_confirmation_code_placeholder' => 'Nambari ya Uthibitisho',
      'reset_password_form_new_password' => 'Nywila Mpya',
      'reset_password_form_new_password_placeholder' => 'Nywila Mpya',
      'reset_password_form_submit' => 'Weka upya Nywila',
      'success' => 'Mafanikio',
      'success_form_submitted' => 'Fomu imewasilishwa kwa mafanikio',
      'success_new_fundraiser' => 'Mradi wako umewezeshwa: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Tazama mradi wako hapa</a><br>Wekea alama kiungo hiki kwa kuhariri mradi wako: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Hariri mradi #{GUID}</a>',
      'success_new_donation_page' => 'Ukurasa wako wa michango umewezeshwa: <a href="https://kuno.anne.media/donate/{GUID}/">Tazama ukurasa wako wa michango hapa</a><br>Wekea alama kiungo hiki kwa kuhariri ukurasa wako wa michango: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Hariri ukurasa wa michango #{GUID}</a>',
      'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Mradi wako umeboreshwa.</a>',
      'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Bonyeza hapa kuhariri mradi wako</a>',
      'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Ukurasa wako wa michango umeboreshwa.</a>',
      'success_fundraiser_deactivated' => 'Mradi umesitishwa',
      'success_fundraiser_reactivated' => 'Mradi umewezeshwa upya',
      'success_fundraiser_deleted' => 'Mradi umefutwa',
      'success_valid_invite_code' => 'Msimbo wa mwaliko ni halali. Sasa unaweza kuanzisha mradi.',
      'success_valid_confirmation_code' => 'Nambari ya uthibitisho ni halali',
      'success_check_email_for_password_reset_code' => 'Angalia anwani yako ya barua pepe kwa nambari ya kuweka upya nywila',
      'success_password_reset' => 'Nywila imebadilishwa, sasa unaweza <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">kuhariri mradi wako</a>',
      'success_comment_sent' => 'Maoni yameshawasilishwa!',
      'success_image_uploaded' => 'Picha imewekwa',
      'error' => 'Hitilafu',
      'error_please_refresh' => 'Tafadhali refresh na jaribu tena.',
      'error_form_expired' => 'Fomu imeisha muda, tafadhali refresh',
      'error_form_ratelimited' => 'Ratelimited, tafadhali ngoja {RATELIMIT} sekunde',
      'error_session_expired' => 'Kikao kimeisha muda, tafadhali ingia tena',
      'error_page_not_found' => 'Ukurasa haukupatikana',
      'error_fundraiser_not_found' => 'Mradi haukupatikana',
      'error_email_not_found' => 'Hakuna anwani ya barua pepe iliyowekwa, tafadhali wasiliana na msaada',
      'error_invalid_email' => 'Tafadhali ingiza anwani ya barua pepe halali',
      'error_invalid_email_for_notifications' => 'Tafadhali ingiza anwani ya barua pepe halali ili kuwezesha arifa',
      'error_invalid_confirmation_code' => 'Nambari ya uthibitisho ni batili au imeisha muda',
      'error_invalid_monero_address' => 'Anwani ya Monero batili (Tafadhali ingiza anwani yako kuu, ambayo huanza na 4)',
      'error_invalid_view_key' => 'Funguo ya kutazama batili (Tafadhali ingiza funguo yako ya kutazama ya kibinafsi/siri)',
      'error_invalid_address' => 'Anwani ya Monero batili (Tafadhali ingiza anwani yako kuu, ambayo huanza na 4)',
      'error_entered_public_view_key' => 'Funguo ya kutazama batili (Tafadhali ingiza funguo yako ya kutazama ya kibinafsi/siri, sio funguo ya kutazama ya umma)',
      'error_entered_public_spend_key' => 'Funguo ya kutazama batili (Tafadhali ingiza funguo yako ya kutazama ya kibinafsi/siri, sio funguo ya matumizi ya kibinafsi)',
      'error_entered_private_spend_key' => 'Funguo ya kutazama batili (Tafadhali ingiza funguo yako ya kutazama ya kibinafsi/siri, sio funguo ya matumizi ya kibinafsi)',
      'error_invalid_private_view_key' => 'Funguo ya kutazama batili (Tafadhali ingiza funguo yako ya kutazama ya kibinafsi/siri)',
      'error_invalid_txid' => 'TXID batili',
      'error_invalid_tx_key' => 'Tafadhali ingiza TX key halali (inayojulikana pia kama ushahidi wa TX)',
      'error_invalid_txid' => 'Tafadhali ingiza nambari ya mwaliko halali',
      'error_incorrect_email' => 'Anwani ya barua pepe sio sahihi',
      'error_incorrect_password' => 'Nywila sio sahihi',
      'error_monero_address_already_used' => 'Kuna tayari mradi/ukurasa wa michango na anwani hii ya Monero',
      'error_missing_fundraiser_code_or_email' => 'Tafadhali ingiza nambari ya mradi wako na anwani ya barua pepe',
      'error_missing_password_reset_code_or_password' => 'Tafadhali ingiza nambari yako ya kuweka upya nywila na nywila mpya',
      'error_missing_txid_or_tx_key' => 'Tafadhali ingiza both TXID na TX key (inayojulikana pia kama ushahidi wa TX)',
      'error_missing_password' => 'Tafadhali ingiza nywila yako',
      'error_missing_view_key' => 'Tafadhali ingiza funguo ya kutazama ya kibinafsi halali',
      'error_title_too_long' => 'Kichwa lazima kiwe kati ya herufi 1-80',
      'error_description_too_long' => 'Maelezo lazima yawe mafupi kuliko herufi 8000',
      'error_tags_too_long' => 'Vichwa lazima viwe mafupi kuliko herufi 250',
      'error_contact_details_too_long' => 'Maelezo ya mawasiliano lazima yawe mafupi kuliko herufi 250',
      'error_goal_must_be_positive' => 'Lengo la mradi lazima liwe namba chanya',
      'error_image_incorrect_file_type' => 'Picha lazima iwe aina ya PNG au JPEG',
      'error_image_maximum_image_size' => 'Ukubwa wa picha wa juu ni MB 2',
      'error_image_invalid' => 'Picha batili',
      'error_image_storage_full' => 'Uhifadhi umefika mwisho',
      'error_image_missing' => 'Tafadhali pakia picha',
      'translate_help' => 'Ingekuwa nzuri kama Kuno ingekuwa inapatikana katika lugha zaidi. Tusaidie na tafsiri kwenye <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
      'wallets_header' => 'Monero: <span class="text3">Chaguo la Pochi</span>',
      'monero_gui_wallet' => 'Pochi ya interface ya mtumiaji (GUI) iliyofunguliwa na jamii ya Monero, bure kabisa kutumia, inafaa kwa wataalamu na waanzilishi.',
      'cake_wallet' => 'Hifadhi, tuma, na ubadilishe pesa yako ya sarafu kwa urahisi. Nunua kadi za zawadi kwa faragha na lipa kwenye kaunta na pesa za sarafu, kipande cha keki.',
      'monerujo_wallet' => 'Pochi ya Android kwa Monero. Na Monerujo, unaweza kutembea kwa urahisi kati ya pochi kadhaa. Kufanya mpya ni rahisi kama bomba chache.',
      'feather_wallet' => 'Feather ni pochi ya Monero huru, yenye chanzo wazi kwa Linux, Tails, Windows, na macOS. Rahisi kutumia, ndogo, haraka, na rafiki kwa mwanzo.'
    );
      $translation = ($strings[$string]) ? $strings[$string] : $string;
      return $translation;
  }

  function translate_ar($string) {
    static $strings = array(
      'site_name' => 'Kuno',
      'page_title' => 'Kuno التمويل بواسطة Monero',
      'page_title_error' => 'خطأ | Kuno –التمويل Monero',
      'page_title_search' => 'بحث | Kuno – التمويل بواسطة Monero',
      'page_title_fediverse' => 'فيديفيرس | كونو – التمويل بواسطة الـ Monero',
      'page_title_reset_password' => 'إعادة تعيين كلمة المرور | Kuno – التمويل بواسطة Monero',
      'page_title_edit_fundraiser' => 'تحرير الحملة التمويلية | Kuno – التمويل بواسطة Monero',
      'page_title_new_fundraiser' => 'حملة تمويلية جديدة | Kuno – التمويل بواسطة Monero',
      'pagination' => 'الصفحة {NUM} من {NUM_PAGES}',
      'pagination_fundraisers' => 'عرض {START}-{END} من {TOTAL} حملة تمويلية',
      'pagination_donations' => 'عرض {START}-{END} من {TOTAL} تبرع',
      'pagination_submit' => 'اذهب',
      'nav_manage_fundraiser' => 'إدارة الحملات التمويلية',
      'nav_search' => 'البحث عن حملات تمويل...',
      'nav_fundraiser_progress' => 'تقدم الحملة التمويلية:',
      'nav_edit_fundraiser' => 'تحرير الحملة التمويلية:',
      'nav_logout' => 'تسجيل الخروج',
      'footer_description' => 'التمويل بواسطة الـ Monero',
      'footer_contact' => 'الاتصال: support [at] anne.media',
      'footer_language' => 'اللغة:',
      'footer_light_mode' => 'وضع النهار',
      'footer_dark_mode' => 'وضع الليل',
      'footer_manage_fundraiser' => 'إدارة حملتك التمويلية:',
      'footer_new_fundraiser' => 'حملة تمويلية جديدة',
      'footer_edit_fundraiser' => 'تحرير الحملة التمويلية',
      'footer_reset_password' => 'إعادة تعيين كلمة المرور',
      'footer_quick_links' => 'روابط سريعة:',
      'footer_search_fundraisers' => 'البحث في الحملات التمويلية',
      'footer_search_fediverse' => 'البحث في فيديفيرس',
      'footer_marketplace' => 'السوق',
      'footer_rss_feed' => 'تغذية RSS',
      'footer_faq' => 'الأسئلة الشائعة',
      'email_new_donation_subject' => '[كونو] تبرع جديد بـ {DONATION} XMR إلى #{GUID}',
      'email_new_donation_body' => 'تلقت حملتك تبرعًا جديدًا!
           <br><br>الحملة التمويلية: {TITLE}
           <br>التبرع: {DONATION} XMR
           <br>التاريخ: {DATE}
           <br><br>إجمالي التبرعات: {TOTAL} XMR
           <br>إجمالي الداعمين: {SUPPORTERS}
           <br>قم بزيارة حملتك التمويلية: https://kuno.anne.media/{TYPE}/{GUID}/
           <br><br>إلغاء إشعارات البريد الإلكتروني هنا:
           <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
          'email_reset_password_subject' => '[كونو] إعادة تعيين كلمة المرور',
          'email_reset_password_body' => 'قم بزيارة هذا الرابط لإعادة تعيين كلمة المرور: {URL} أو أدخل هذا الرمز: {CODE} (صالح لمدة 24 ساعة)',
          'homepage_title' => 'جمع التبرعات بسهولة <br> للجميع',
          'homepage_subtitle' => 'جمع الأموال أو التبرع لقضية جيدة باستخدام Monero',
          'homepage_point1' => 'ابدأ حملة تمويل مجانية',
          'homepage_point2' => 'استلم Monero (الذي يمكنك تحويله إلى نقد)',
          'homepage_point3' => 'لا توجد رسوم، تعمل على مستوى عالمي، ولا حاجة لحساب بنكي',
          'homepage_button_start_fundraiser' => 'ابدأ حملة تمويل',
          'homepage_button_browse_fundraisers' => 'تصفح الحملات التمويلية',
          'homepage_bar' => 'البديل العادل لـ GoFundMe و Kickstarter',
          'homepage_heading_browse_fundraisers' => 'تصفح {AMOUNT} حملة تمويلية',
          'homepage_heading_total_raised' => 'تم جمع أكثر من {AMOUNT} XMR!',
          'homepage_top_categories' => 'أفضل الفئات',
          'homepage_recent_donations' => 'التبرعات الأخيرة',
          'homepage_all_categories' => 'جميع الفئات',
          'homepage_launch_in_one_click' => 'إطلاق حملتك التمويلية بنقرة واحدة',
          'homepage_get_started_free' => 'ابدأ مجانًا',
          'homepage_info_heading1' => 'Monero هو نقود الإنترنت',
          'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
            Monero هو وسيلة سريعة وآمنة لإرسال واستلام الأموال عبر الإنترنت.
            </p>
            <p class="monero-info-p kuno">
            لا يتطلب الأمر حسابًا بنكيًا أو تطبيقًا أو هوية حكومية. قم ببساطة بتنزيل محفظة على هاتفك أو جهاز الكمبيوتر الخاص بك لإرسال واستلام الأموال في جميع أنحاء العالم بنقرة واحدة.
            </p>
            <p class="monero-info-p kuno">
            بسبب بساطة Monero وإمكانية الوصول إليه، فإنه يعتبر وسيلة مثالية للدفع للمتاجر عبر الإنترنت والعمل عن بُعد وتحويل الأموال والنصائح وحملات التمويل والمزيد.
            </p>',
          'homepage_link_download_mobile' => 'تنزيل للهاتف المحمول',
          'homepage_link_download_desktop' => 'تنزيل لسطح المكتب',
          'homepage_info_heading2' => 'تبرعات غير قابلة للرقابة',
          'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
              مع Monero، المال الخاص بك ينتمي إليك.
              </p>
              <p class="monero-info-p kuno">
              Monero هو برنامج نظير إلى نظير ولا يعتمد على طرف ثالث أو شركات. لا يمكن رقابة المعاملات، ولا يمكن تجميد الأموال، ولا يمكن إلغاء تسجيل المستخدمين.
              </p>
              <p class="monero-info-p kuno">
              سواء كنت تجمع أموالًا باستخدام Monero أو تتبرع لقضية جيدة، يمكنك أن تطمئن إلى أن الشخص المستفيد يتلقى 100٪ من التبرع.
              </p>',
          'homepage_link_official_website' => 'الموقع الرسمي',
          'homepage_link_overview' => 'نظرة عامة',
          'homepage_link_buy_monero' => 'شراء Monero',
          'homepage_info_heading3' => 'انفقها في أي مكان',
          'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                استبدل Monero بالنقد، تسوق عبر الإنترنت أو pادفع الفواتير.
                </p>
                <p class="monero-info-p kuno">
                من السهل استبدال Monero بالنقد الفعلي باستخدام <a href="https://localmonero.co">LocalMonero</a>، <a href="https://bisq.network">Bisq</a> أو <a href="https://coinatmradar.com">Crypto ATM</a> (دون الحاجة إلى حساب بنكي).
                </p>
                <p class="monero-info-p kuno">
                الأسواق مثل <a href="https://moneromarket.io">MoneroMarket</a> والدلائل مثل <a href="https://monerica.com">Monerica</a> و <a href="https://acceptedhere.io">AcceptedHere</a> تساعدك في شراء ما تحتاجه باستخدام Monero.
                </p>
                <p class="monero-info-p kuno">
                بالإضافة إلى ذلك، تقدم <a href="https://cakepay.com">CakePay</a> و <a href="https://coincards.com">CoinCards</a> بطاقات Visa مدفوعة مسبقًا وبطاقات هدايا لآلاف الشركات. يقدم المتسوقون الشخصيون مثل <a href="https://proxysto.re">ProxyStore</a>، <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> و <a href="https://shopinbit.com">ShopInBit</a> وسيلة مريحة لدفع الفواتير باستخدام Monero.
                </p>
                <p class="monero-info-p kuno">
                مرونة Monero تجعل من السهل جمع الأموال لدفع الفواتير، إطلاق مشروعك أو دعم جمعية خيرية.
                </p>',
          'homepage_link_exchange_to_cash' => 'تبديل إلى نقد',
          'homepage_link_shop_online' => 'تسوق عبر الإنترنت',
          'homepage_link_marketplace' => 'سوق',
          'homepage_use_case_heading1' => 'للجمعيات الخيرية',
          'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                مأوى القطط المحلي يحتاج إلى تبرعات لطعام القطط وفواتير الطبيب البيطري.
              </p>
              <p class="use-case-p kuno">
                أنشئوا حملة تمويل Kuno، شاركوا الرابط على وسائل التواصل الاجتماعي واستلموا التبرعات.
              </p>
              <p class="use-case-p kuno">
                يستخدم المأوى Monero الذي تم جمعه لشراء بطاقات هدايا Petsmart بواسطة CakePay ويسحب النقد لدفع فاتورة الطبيب البيطري باستخدام Crypto ATM.
              </p>
              <p class="use-case-p kuno">
                يتلقى كل متبرع تحديثًا مع صور للقطط.
              </p>',
          'homepage_use_case_heading2' => 'للأفراد',
          'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                    أليس تحتاج إلى جمع الأموال لفواتير الطب الطبي.
                  </p>
                  <p class="use-case-p kuno">
                    تساعدها ابنتها في إعداد حملة تمويل Kuno وتشاركها مع مجتمعها.
                  </p>
                  <p class="use-case-p kuno">
                    يجمعون ما يكفي من الأموال ويبدلونها بالنقد مع LocalMonero.
                  </p>
                  <p class="use-case-p kuno">
                    تكتب أليس رسالة شكر مؤثرة لكل متبرع كرمز للامتنان.
                  </p>',
          'homepage_use_case_heading3' => 'للشركات الناشئة',
          'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                    مطور مستقل يرغب في إنشاء لعبة جديدة.
                  </p>
                  <p class="use-case-p kuno">
                    يقوم بإعداد حملة تمويل Kuno ويشاركها مع مجتمعات الألعاب.
                  </p>
                  <p class="use-case-p kuno">
                    يصل إلى الهدف ويستخدم الأموال لتوظيف فنانين موافقين على Monero من MoneroMarket وشراء أصول اللعبة ببطاقة ديبيت افتراضية من CakePay.
                  </p>
                  <p class="use-case-p kuno">
                    يحصل كل متبرع على نسخة مجانية من اللعبة.
                  </p>',
          'homepage_use_case_heading4' => 'لمنشئي المحتوى',
          'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                تقوم فرقة بتحميل مقتطفاتها وموسيقاها الأصلية على YouTube.
              </p>
              <p class="use-case-p kuno">
                يقومون بإعداد صفحة تبرع Kuno لاستقبال تبرعات Monero.
              </p>
              <p class="use-case-p kuno">
                يمكن للمعجبين أيضًا اقتراح أغاني أو التعليق أثناء البث المباشر عن طريق إجراء تبرع.
              </p>
              <p class="use-case-p kuno">
                يقدم ذلك وسيلة أفضل لتحقيق دخل مستدام لمحتواهم، بالمقارنة مع الإعلانات.
              </p>',
          'homepage_use_case_heading5' => 'بالنسبة لك',
          'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                    مع Kuno، يمكن للجميع جمع الأموال لمشروعهم أو قضيتهم أو شركتهم الناشئة.
                  </p>
                  <p class="use-case-p kuno">
                    كل ما تحتاجه هو محفظة Monero وهدف.
                  </p>',
        'fundraiser_heading_goal' => 'الهدف',
        'fundraiser_heading_raised' => 'تم جمعها',
        'fundraiser_heading_percentage_funded' => 'تم تمويلها',
        'fundraiser_heading_donations' => 'التبرعات',
        'fundraiser_heading_supporters' => 'الداعمون',
        'fundraiser_heading_comments' => 'التعليقات',
        'fundraiser_heading_support' => 'الدعم',
        'fundraiser_heading_share' => 'مشاركة',
        'fundraiser_heading_about' => 'نبذة عن',
        'fundraiser_heading_photos' => 'الصور',
        'fundraiser_heading_contact' => 'الاتصال',
        'fundraiser_heading_date' => 'نشرت في:',
        'fundraiser_heading_supporters' => 'الداعمون',
        'fundraiser_heading_new_comment' => 'كتابة تعليق',
        'fundraiser_heading_new_fundraiser' => 'حملة تمويل جديدة',
        'fundraiser_heading_edit_fundraiser' => 'تحرير الحملة',
        'fundraiser_heading_logout' => 'تسجيل الخروج',
        'fundraiser_support_text' => 'أرسل أي مبلغ من Monero إلى:',
        'fundraiser_share_text' => 'انسخ الرابط لمشاركة هذه الحملة مع الأصدقاء أو وسائل التواصل الاجتماعي:',
        'fundraiser_open_in_wallet' => 'افتح في المحفظة',
        'fundraiser_info_point1' => 'تتبرع مباشرة إلى محفظة المستلم',
        'fundraiser_info_point2' => 'لا وسطاء أو رسوم',
        'fundraiser_info_point3' => 'تتم مزامنة التبرعات كل 5 دقائق',
        'fundraiser_full_size_photo' => 'صورة بحجم كامل',
        'fundraiser_no_donations' => 'لا توجد تبرعات حتى الآن',
        'fundraiser_supporters' => '{AMOUNT} داعمين',
        'fundraiser_button_support' => 'دعم',
        'fundraiser_donate_with_monero' => 'تبرع بـ Monero:',
        'fundraiser_comment_form_placeholder_txid' => 'رقم المعاملة (TXID)',
        'fundraiser_comment_form_placeholder_tx_key' => 'مفتاح المعاملة (مثال: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
        'fundraiser_comment_form_placeholder_email' => 'البريد الإلكتروني (اختياري، لمكافآت الحملة)',
        'fundraiser_comment_form_placeholder_comment' => 'أكتب تعليقًا عامًا',
        'fundraiser_comment_form_submit' => 'تعليق',
        'search' => 'بحث',
        'search_heading' => 'البحث في الحملات التمويلية',
        'search_text' => 'البحث في الحملات التمويلية...',
        'search_sort_by_new' => 'الترتيب حسب الحداثة',
        'search_sort_by_recently_donated' => 'الترتيب حسب التبرع الأخير',
        'search_sort_by_percentage_funded' => 'الترتيب حسب النسبة المئوية للتمويل',
        'search_sort_by_goal' => 'الترتيب حسب الهدف',
        'search_all_categories' => 'جميع الفئات',
        'search_no_fundraisers_found' => 'لم يتم العثور على حملات تمويلية',
        'search_fediverse_heading' => 'البحث في الفيديفيرس',
        'search_fediverse_text' => 'البحث في حملات التمويل في الفيديفيرس...',
        'search_fediverse_no_fundraisers_found' => 'لم يتم العثور على حملات تمويلية في الفيديفيرس',
        'search_fediverse_peers_list' => 'قائمة بالمثيلات الموزعة:',
        'login_invite_code_heading' => 'حملة تمويل جديدة',
        'login_invite_code_text' => 'أدخل رمز الدعوة لبدء حملة تمويل جديدة.',
        'login_invite_code_note' => 'إذا لم يكن لديك رمز دعوة، يرجى الاتصال بالدعم.',
        'login_invite_code_form' => 'رمز الدعوة',
        'login_invite_code_form_placeholder' => 'رمز الدعوة',
        'login_invite_code_submit' => 'متابعة',
        'login_fundraiser_form_fundraiser' => 'حملة تمويل',
        'login_fundraiser_heading' => 'تحرير الحملة',
        'login_fundraiser_text' => 'أدخل رمز الحملة وكلمة المرور لتحرير حملتك.',
        'login_fundraiser_note' => 'الرمز في عنوان URL:',
        'login_fundraiser_forgot_password' => 'نسيت كلمة المرور؟',
        'login_fundraiser_form_fundraiser' => 'حملة تمويل',
        'login_fundraiser_form_fundraiser_placeholder' => 'رمز الحملة (مثال: ae21)',
        'login_fundraiser_form_password' => 'كلمة المرور',
        'login_fundraiser_form_password_placeholder' => 'كلمة المرور',
        'login_fundraiser_form_submit' => 'تحرير الحملة',
        'edit_fundraiser_heading_fundraiser_details' => 'تفاصيل الحملة التمويلية',
        'edit_fundraiser_fundraiser_details_text' => 'صف حملتك التمويلية وأضف الصور.',
        'edit_fundraiser_form_optional' => '(اختياري)',
        'edit_fundraiser_form_more_info' => '(مزيد من المعلومات)',
        'edit_fundraiser_form_title' => 'العنوان',
        'edit_fundraiser_form_title_placeholder' => 'عنوان الحملة التمويلية',
        'edit_fundraiser_form_photo' => 'الصورة',
        'edit_fundraiser_form_additional_photos' => 'صور إضافية',
        'edit_fundraiser_form_description' => 'الوصف',
        'edit_fundraiser_form_description_placeholder' => 'صف حملتك التمويلية. أضف مكافآت الحملة والمراحل أو تفاصيل الاتصال إذا كان ذلك ضروريًا.',
        'edit_fundraiser_form_tags' => 'الوسوم',
        'edit_fundraiser_form_tags_placeholder' => 'الفئة، الوسوم، إلخ.',
        'edit_fundraiser_form_contact' => 'جهة الاتصال',
        'edit_fundraiser_form_contact_placeholder' => 'البريد الإلكتروني، الموقع، تويتر، ماتريكس، إلخ.',
        'edit_fundraiser_form_visibility' => 'تعيين الحملة كخاصة (غير معروضة في نتائج البحث، سيحتاج المتبرعون إلى الرابط المباشر)',
        'edit_fundraiser_heading_goal' => 'الهدف',
        'edit_fundraiser_goal_text' => 'قم بتعيين هدفك وعنوان Monero.',
        'edit_fundraiser_get_wallet' => 'لا توجد محفظة Monero؟ احصل على واحدة هنا.',
        'edit_fundraiser_form_goal' => 'الهدف',
        'edit_fundraiser_form_goal_placeholder' => 'الهدف (XMR)',
        'edit_fundraiser_form_donation_page' => 'لا يوجد هدف - أريد إنشاء صفحة تبرع',
        'edit_fundraiser_form_monero_address' => 'عنوان Monero',
        'edit_fundraiser_form_monero_address_placeholder' => 'مثال: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
        'edit_fundraiser_form_view_key' => 'مفتاح الرؤية السري',
        'edit_fundraiser_form_view_key_placeholder' => 'مثال: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
        'edit_fundraiser_heading_password' => 'كلمة المرور',
        'edit_fundraiser_password_text' => 'قم بتعيين كلمة مرور لتحرير حملتك التمويلية لاحقًا.',
        'edit_fundraiser_widthdrawal_warning' => "تجنب سحب الأرصدة الجزئية أثناء الحملات التمويلية الجارية. تستخدم Monero الأرصدة الكاملة للمدفوعات، مما يترك المبالغ المتبقية كمعاملات جديدة. سيتم حساب ذلك بشكل خاطئ كتبرع، وستكون تقدم حملتك التمويلية غير دقيقة. إذا كنت بحاجة إلى استخدام الأموال أثناء التنقل، فانسحب دائمًا بالكامل، واترك أي 'تغيير'.",
        'edit_fundraiser_form_email' => 'البريد الإلكتروني',
        'edit_fundraiser_form_email_placeholder' => 'البريد الإلكتروني (اختياري، لإعادة تعيين كلمة المرور)',
        'edit_fundraiser_form_password' => 'كلمة المرور',
        'edit_fundraiser_form_new_password_placeholder' => 'كلمة المرور',
        'edit_fundraiser_form_edit_password_placeholder' => 'كلمة المرور (اتركها فارغة إذا لم تكن هناك تغييرات)',
        'edit_fundraiser_form_email_notifications' => 'أرسل لي بريدًا إلكترونيًا عندما تتلقى حملتي تبرعًا جديدًا',
        'edit_fundraiser_form_submit_edit' => 'تحديث الحملة التمويلية',
        'edit_fundraiser_form_submit_new' => 'بدء حملة تمويلية',
        'edit_fundraiser_heading_supporters' => 'داعمو الحملة التمويلية',
        'edit_fundraiser_supporters_text' => 'إذا قام داعم بإدخال عنوان بريده الإلكتروني، ستظهر هنا (على سبيل المثال، لمكافآت الحملة).',
        'edit_fundraiser_no_supporters' => 'لا يوجد تقديمات بريد إلكتروني حتى الآن',
        'edit_fundraiser_supporters_email' => 'البريد الإلكتروني',
        'edit_fundraiser_supporters_comment' => 'التعليق',
        'edit_fundraiser_supporters_amount' => 'المبلغ',
        'edit_fundraiser_supporters_txid' => 'معرف الصفقة (TXID)',
        'edit_fundraiser_supporters_tx_key' => 'مفتاح الصفقة (TX Key)',
        'edit_fundraiser_supporters_date' => 'التاريخ',
        'edit_fundraiser_heading_manage_fundraiser' => 'إدارة الحملة التمويلية',
        'edit_fundraiser_fix_view_key' => 'الرجاء إضافة مفتاح رؤية صالح لإعادة تنشيط حملتك التمويلية.',
        'edit_fundraiser_deactivate_fundraiser' => 'إلغاء تنشيط الحملة التمويلية',
        'edit_fundraiser_reactivate_fundraiser' => 'إعادة تنشيط الحملة التمويلية',
        'edit_fundraiser_delete_fundraiser' => 'حذف البيانات الخاصة بك',
        'reset_password_heading' => 'إعادة تعيين كلمة المرور',
        'reset_password_description' => 'أدخل رمز الحملة التمويلية وعنوان بريدك الإلكتروني لإعادة تعيين كلمة المرور الخاصة بك.',
        'reset_password_note' => '(إذا لم تقم بإضافة عنوان بريد إلكتروني، يرجى الاتصال بالدعم.)',
        'reset_password_form_fundraiser' => 'رمز الحملة التمويلية',
        'reset_password_form_fundraiser_placeholder' => 'رمز الحملة التمويلية (على سبيل المثال ae21)',
        'reset_password_form_email' => 'البريد الإلكتروني',
        'reset_password_form_email_placeholder' => 'البريد الإلكتروني',
        'reset_password_form_confirmation_code' => 'رمز التأكيد',
        'reset_password_form_confirmation_code_placeholder' => 'رمز التأكيد',
        'reset_password_form_new_password' => 'كلمة مرور جديدة',
        'reset_password_form_new_password_placeholder' => 'كلمة مرور جديدة',
        'reset_password_form_submit' => 'إعادة تعيين كلمة المرور',
        'success' => 'نجاح',
        'success_form_submitted' => 'تم تقديم النموذج بنجاح',
        'success_new_fundraiser' => 'حملتك التمويلية نشطة: <a href="https://kuno.anne.media/fundraiser/{GUID}/">شاهد حملتك التمويلية هنا</a><br>علامة هذا الرابط لتحرير حملتك التمويلية: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">تحرير حملة التمويلية #{GUID}</a>',
        'success_new_donation_page' => 'صفحة التبرع الخاصة بك نشطة: <a href="https://kuno.anne.media/donate/{GUID}/">شاهد صفحة التبرع الخاصة بك هنا</a><br>علامة هذا الرابط لتحرير صفحة التبرع الخاصة بك: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">تحرير صفحة التبرع #{GUID}</a>',
        'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">تم تحديث حملتك التمويلية.</a>',
        'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">انقر هنا لتحرير حملتك التمويلية</a>',
        'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">تم تحديث صفحة التبرع الخاصة بك.</a>',
        'success_fundraiser_deactivated' => 'تم إلغاء تنشيط الحملة التمويلية',
        'success_fundraiser_reactivated' => 'تم إعادة تنشيط الحملة التمويلية',
        'success_fundraiser_deleted' => 'تم حذف الحملة التمويلية',
        'success_valid_invite_code' => 'رمز دعوة صالح. يمكنك الآن بدء حملة تمويلية.',
        'success_valid_confirmation_code' => 'رمز تأكيد صالح',
        'success_check_email_for_password_reset_code' => 'تحقق من عنوان بريدك الإلكتروني للحصول على رمز إعادة تعيين كلمة المرور',
        'success_password_reset' => 'تم تغيير كلمة المرور، يمكنك الآن <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">تحرير حملتك التمويلية</a>',
        'success_comment_sent' => 'تم إرسال التعليق بنجاح!',
        'success_image_uploaded' => 'تم رفع الصورة',
        'error' => 'خطأ',
        'error_please_refresh' => 'الرجاء إعادة تحميل الصفحة والمحاولة مرة أخرى.',
        'error_form_expired' => 'انتهت صلاحية النموذج، يرجى إعادة التحديث',
        'error_form_ratelimited' => 'تم تقييد السرعة، يرجى الانتظار {RATELIMIT} ثانية',
        'error_session_expired' => 'انتهت صلاحية الجلسة، يرجى تسجيل الدخول مرة أخرى',
        'error_page_not_found' => 'الصفحة غير موجودة',
        'error_fundraiser_not_found' => 'لم يتم العثور على الحملة التمويلية',
        'error_email_not_found' => 'لم يتم تعيين عنوان البريد الإلكتروني، يرجى الاتصال بالدعم',
        'error_invalid_email' => 'الرجاء إدخال عنوان بريد إلكتروني صالح',
        'error_invalid_email_for_notifications' => 'الرجاء إدخال عنوان بريد إلكتروني صالح لتمكين الإشعارات',
        'error_invalid_confirmation_code' => 'رمز التأكيد غير صالح أو منتهي الصلاحية',
        'error_invalid_monero_address' => 'عنوان Monero غير صالح (الرجاء إدخال عنوانك الرئيسي، الذي يبدأ برقم 4)',
        'error_invalid_view_key' => 'مفتاح الرؤية غير صالح (الرجاء إدخال مفتاح الرؤية الخاص/السري)',
        'error_invalid_address' => 'عنوان Monero غير صالح (الرجاء إدخال عنوانك الرئيسي، الذي يبدأ برقم 4)',
        'error_entered_public_view_key' => 'مفتاح الرؤية غير صالح (الرجاء إدخال مفتاح الرؤية الخاص/السري، وليس مفتاح الرؤية العام)',
        'error_entered_public_spend_key' => 'مفتاح الرؤية غير صالح (الرجاء إدخال مفتاح الرؤية الخاص/السري، وليس مفتاح الإنفاق العام)',
        'error_entered_private_spend_key' => 'مفتاح الرؤية غير صالح (الرجاء إدخال مفتاح الرؤية الخاص/السري، وليس مفتاح الإنفاق الخاص)',
        'error_invalid_private_view_key' => 'مفتاح الرؤية غير صالح (الرجاء إدخال مفتاح الرؤية الخاص/السري)',
        'error_invalid_txid' => 'معرف الصفقة (TXID) غير صالح',
        'error_invalid_tx_key' => 'الرجاء إدخال مفتاح صفقة صالح (المعروف أيضًا باسم دليل صفقة TX)',
        'error_invalid_txid' => 'الرجاء إدخال رمز دعوة صالح',
        'error_incorrect_email' => 'عنوان البريد الإلكتروني غير صحيح',
        'error_incorrect_password' => 'كلمة المرور غير صحيحة',
        'error_monero_address_already_used' => 'يوجد بالفعل حملة تمويلية/صفحة تبرع بهذا العنوان Monero',
        'error_missing_fundraiser_code_or_email' => 'الرجاء إدخال رمز الحملة التمويلية وعنوان البريد الإلكتروني',
        'error_missing_password_reset_code_or_password' => 'الرجاء إدخال رمز إعادة تعيين كلمة المرور وكلمة المرور الجديدة',
        'error_missing_txid_or_tx_key' => 'الرجاء إدخال كل من معرف الصفقة (TXID) ومفتاح الصفقة (المعروف أيضًا باسم دليل صفقة TX)',
        'error_missing_password' => 'الرجاء إدخال كلمة المرور الخاصة بك',
        'error_missing_view_key' => 'الرجاء إدخال مفتاح رؤية خاص صالح',
        'error_title_too_long' => 'يجب أن يكون العنوان بين 1 و 80 حرفًا',
        'error_description_too_long' => 'يجب أن يكون الوصف أقل من 8000 حرف',
        'error_tags_too_long' => 'يجب أن تكون الوسوم أقل من 250 حرفًا',
        'error_contact_details_too_long' => 'يجب أن تكون تفاصيل الاتصال أقل من 250 حرفًا',
        'error_goal_must_be_positive' => 'يجب أن يكون هدف الحملة التمويلية رقمًا إيجابيًا',
        'error_image_incorrect_file_type' => 'يجب أن يكون نوع الصورة PNG أو JPEG',
        'error_image_maximum_image_size' => 'الحد الأقصى لحجم الصورة هو 2 ميجابايت',
        'error_image_invalid' => 'صورة غير صالحة',
        'error_image_storage_full' => 'التخزين ممتلئ',
        'error_image_missing' => 'الرجاء تحميل صورة',
        'translate_help' => 'سيكون رائعًا إذا كان بإمكاننا الوصول إلى Kuno بلغات أكثر. ساعدنا في الترجمات على <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
        'wallets_header' => 'Monero: <span class="text3">خيارات المحافظ</span>',
        'monero_gui_wallet' => 'واجهة مستخدم رسومية (GUI) لمحفظة Monero مفتوحة المصدر تم تطويرها من قبل مجتمع Monero، مجانية تمامًا للاستخدام، مناسبة لكل من المبتدئين والمتقدمين.',
        'cake_wallet' => 'قم بتخزين عملتك الرقمية بشكل آمن وإرسالها وتبادلها بسهولة. اشترِ بطاقات هدايا بشكل خاص وادفع في العداد باستخدام العملات الرقمية، قطعة كعكة.',
        'monerujo_wallet' => 'محفظة Monero لنظام Android. مع Monerujo، يمكنك التنقل بسلاسة بين عدة محافظ. إنشاء واحدة جديدة بسيطة كبضع النقرات.',
        'feather_wallet' => 'Feather هي محفظة Monero مجانية ومفتوحة المصدر لأنظمة Linux وTails وWindows وmacOS. سهلة الاستخدام وصغيرة وسريعة وصديقة للمبتدئين.'
    );
    $translation = ($strings[$string]) ? $strings[$string] : $string;
    return $translation;
  }

function translate_de($string) {
  static $strings = array(
    'site_name' => 'Kuno',
    'page_title' => 'Kuno – Mit Monero Spenden sammeln',
    'page_title_error' => 'Error | Kuno – Mit Monero Spenden sammeln',
    'page_title_search' => 'Suche | Kuno – Mit Monero Spenden sammeln',
    'page_title_fediverse' => 'Fediverse | Kuno – Mit Monero Spenden sammeln',
    'page_title_reset_password' => 'Passwort zurücksetzen | Kuno – Mit Monero Spenden sammeln',
    'page_title_edit_fundraiser' => 'Spendenaktion bearbeiten | Kuno – Mit Monero Spenden sammeln',
    'page_title_new_fundraiser' => 'Neue Spendenaktion | Kuno – Mit Monero Spenden sammeln',
    'pagination' => 'Seite {NUM} von {NUM_PAGES}',
    'pagination_fundraisers' => 'Ansicht {START}-{END} von {TOTAL} Spendenaktionen',
    'pagination_donations' => 'Ansicht {START}-{END} von {TOTAL} Spenden',
    'pagination_submit' => 'Anzeigen',
    'nav_manage_fundraiser' => 'Spendenaktion verwalten',
    'nav_search' => 'Suche nach Spendenaktion...',
    'nav_fundraiser_progress' => 'Fortschritt der Spendenaktion:',
    'nav_edit_fundraiser' => 'Spendenaktion bearbeiten:',
    'nav_logout' => 'Abmelden',
    'footer_description' => 'Mit Monero Spenden sammeln',
    'footer_contact' => 'Kontakt: support [at] anne.media',
    'footer_language' => 'Sprachen:',
    'footer_light_mode' => 'Light Mode',
    'footer_dark_mode' => 'Dark Mode',
    'footer_manage_fundraiser' => 'Verwalten Sie Ihre Spendenaktion:',
    'footer_new_fundraiser' => 'Neue Spendenaktion',
    'footer_edit_fundraiser' => 'Spendenaktion bearbeiten',
    'footer_reset_password' => 'Passwort zurücksetzen',
    'footer_quick_links' => 'Quick Links:',
    'footer_search_fundraisers' => 'Suche Spendenaktion',
    'footer_search_fediverse' => 'Fediversum durchsuchen',
    'footer_marketplace' => 'Marktplatz',
    'footer_rss_feed' => 'RSS Feed',
    'footer_faq' => 'FAQ',
    'email_new_donation_subject' => '[Kuno] Neue {DONATION} XMR Spende an #{GUID}',
    'email_new_donation_body' => 'Ihre Spendenaktion hat eine neue Spende erhalten!
         <br><br>Spendenaktion: {TITLE}
         <br>Betrag: {DONATION} XMR
         <br>Datum: {DATE}
         <br><br>Spenden insgesamt: {TOTAL} XMR
         <br>Unterstützer insgesamt: {SUPPORTERS}
         <br>Besuchen Sie Ihre Spendenaktion: https://kuno.anne.media/{TYPE}/{GUID}/
         <br><br>Deaktivieren Sie die E-Mail-Benachrichtigung hier:
         <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
    'email_reset_password_subject' => '[Kuno] Passwort zurücksetzen',
    'email_reset_password_body' => 'Besuchen Sie diesen Link, um Ihr Passwort zurückzusetzen: {URL} oder geben Sie diesen Code ein: {CODE} (Gültig für 24 Stunden)',
    'homepage_title' => 'Kuno macht<br>Spenden leicht',
    'homepage_subtitle' => 'Sammle Geld oder spende für einen guten Zweck mit Monero',
    'homepage_point1' => 'Starte kostenlos eine Spendenaktion',
    'homepage_point2' => 'Erhalte Monero (kann in Bargeld umgetauscht werden)',
    'homepage_point3' => 'Keine Gebühren, funktioniert weltweit, kein Bankkonto erforderlich',
    'homepage_button_start_fundraiser' => 'Eine Spendenaktion starten',
    'homepage_button_browse_fundraisers' => 'Spendenaktionen durchsuchen',
    'homepage_bar' => 'Die faire Alternative zu GoFundMe und Kickstarter',
    'homepage_heading_browse_fundraisers' => 'Durchsuche {AMOUNT} Spendenaktionen',
    'homepage_heading_total_raised' => 'Über {AMOUNT} XMR gesammelt!',
    'homepage_top_categories' => 'Top-Kategorien',
    'homepage_recent_donations' => 'Neuste Spenden',
    'homepage_all_categories' => 'Alle Kategorien',
    'homepage_launch_in_one_click' => 'Starten Sie Ihre Spendenaktion mit einem 1-Klick',
    'homepage_get_started_free' => 'Jetzt kostenlos starten',
    'homepage_info_heading1' => 'Monero ist Bargeld für das Internet',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                 Monero ist ein schneller und sicherer Weg, um online Geld zu empfangen und zu versenden.
                </p>
                <p class="monero-info-p kuno">
                 Ein Bankkonto oder ein Ausweis sind nicht erforderlich. Laden Sie einfach eine Wallet für Ihr Smartphone oder Ihren Computer herunter, um mit einem 1-Klick weltweit Geld empfangen und versenden zu können.
                </p>
                <p class="monero-info-p kuno">
                Die Einfachheit und Zugänglichkeit von Monero macht es zu einer idealen Zahlungsmethode für Online-Shops, Spendenaktionen, Überweisungen, Trinkgelder und mehr.
                </p>',
    'homepage_link_download_mobile' => 'Download für Smartphone',
    'homepage_link_download_desktop' => 'Download für Desktop',
    'homepage_info_heading2' => 'Unzensierte Spenden',
    'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                Mit Monero gehört das Geld Ihnen.
                </p>
                <p class="monero-info-p kuno">
                Monero ist eine Peer-to-Peer-Software und ist nicht von Dritten oder Unternehmen abhängig. Gelder werden nicht eingefroren und Benutzer können nicht ausgeschlossen werden.
                </p>
                <p class="monero-info-p kuno">
                Egal, ob Sie mit Monero Geld sammeln oder für einen guten Zweck spenden wollen, Sie können sich sicher sein, dass der Empfänger 100% der Spende erhalten wird.
                </p>',
    'homepage_link_official_website' => 'Offizielle Webseite',
    'homepage_link_overview' => 'Übersicht',
    'homepage_link_buy_monero' => 'Kaufen Sie Monero',
    'homepage_info_heading3' => 'Überall ausgeben',
    'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                Tauschen Sie Monero in Bargeld, kaufen Sie online ein oder bezahlen Sie Rechnungen.
                </p>
                <p class="monero-info-p kuno">
                Es ist einfach, Monero über <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> oder mit einem <a href="https://coinatmradar.com">Krypto-Geldautomaten</a> in physisches Bargeld zu tauschen (kein Bankkonto erforderlich).
                </p>
                <p class="monero-info-p kuno">
                Marktplätze wie <a href="https://moneromarket.io">MoneroMarket</a> und Verzeichnisse wie <a href="https://monerica.com">Monerica</a> und <a href="https://acceptedhere.io">AcceptedHere</a> helfen Ihnen, mit Monero einzukaufen.
                </p>
                <p class="monero-info-p kuno">
                Darüber hinaus bieten <a href="https://cakepay.com">CakePay</a> und <a href="https://coincards.com">CoinCards</a> Prepaid-Visa-Karten und Geschenkkarten für Tausende von Unternehmen an. Persönliche Einkäufer wie <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> und <a href="https://shopinbit.com">ShopInBit</a> bieten eine bequeme Möglichkeit, Rechnungen mit Monero zu bezahlen.
                </p>
                <p class="monero-info-p kuno">
                Die Flexibilität von Monero macht es einfach, Geld zu beschaffen, um Rechnungen zu bezahlen, ein Projekt zu starten oder eine Wohltätigkeitsorganisation zu unterstützen.
                </p>',
    'homepage_link_exchange_to_cash' => 'Umtausch in Bargeld',
    'homepage_link_shop_online' => 'Online einkaufen',
    'homepage_link_marketplace' => 'Marktplatz',
    'homepage_use_case_heading1' => 'Für wohltätige Zwecke',
    'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
                  Ein örtliches Tierheim benötigt Spenden für Katzenfutter und Tierarztrechnungen.
                </p>
                <p class="use-case-p kuno">
                  Sie richten eine Kuno-Spendenaktion ein, teilen den Link in den sozialen Medien und erhalten Spenden.
                </p>
                <p class="use-case-p kuno">
                  Das Tierheim verwendet die gesammelten Monero, um die Dinge mit Geschenkkarten von CakePay zu kaufen, und die Tierarztrechnung kann mithilfe eines Krypto-Geldautomaten mit Bargeld beglichen werden.
                </p>
                <p class="use-case-p kuno">
                  Jeder Spender erhält ein Update mit Fotos der Katzen.
                </p>',
    'homepage_use_case_heading2' => 'Für Privatpersonen',
    'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                  Alice muss Geld für Arztrechnungen sammeln.
                </p>
                <p class="use-case-p kuno">
                  Ihre Tochter hilft ihr bei der Organisation einer Kuno-Spendenaktion und teilt diese mit ihrer Gemeinde.
                </p>
                <p class="use-case-p kuno">
                  Sie sammeln genug Geld und tauschen es mithilfe von LocalMonero in Bargeld um.
                </p>
                <p class="use-case-p kuno">
                  Alice schreibt für jeden Spender einen herzlichen Dankesbrief als Zeichen der Wertschätzung.
                </p>',
    'homepage_use_case_heading3' => 'Für Startups',
    'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                  Ein Indie-Entwickler möchte ein neues Spiel entwickeln.
                </p>
                <p class="use-case-p kuno">
                  Er richtet eine Kuno-Spendenaktion ein und teilt sie mit Communitys für Spiele.
                </p>
                <p class="use-case-p kuno">
                  Er erreicht das Spendenziel und verwendet das Geld, um Monero-freundliche Künstler von MoneroMarket anzuheuern und Spiel-Assets mit einer virtuellen Debitkarte von CakePay zu kaufen.
                </p>
                <p class="use-case-p kuno">
                  Jeder Spender erhält ein Gratisexemplar des Spiels.
                </p>',
    'homepage_use_case_heading4' => 'Für Content Creators',
    'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                  Eine Band lädt ihre Covers und Originalmusik auf Youtube hoch.
                </p>
                <p class="use-case-p kuno">
                  Sie haben eine Kuno-Spenden-Seite eingerichtet, um Monero-Spenden zu erhalten.
                </p>
                <p class="use-case-p kuno">
                  Fans können auch Songs vorschlagen oder während der Livestreams kommentieren, indem sie eine Spende leisten.
                </p>
                <p class="use-case-p kuno">
                  Dies bietet eine bessere Möglichkeit, ihre Inhalte nachhaltig zu monetarisieren, als über Werbung.
                </p>',
    'homepage_use_case_heading5' => 'Für dich',
    'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                  Mit Kuno kann jeder Gelder für sein Projekt, seine Sache oder sein Startup sammeln.
                </p>
                <p class="use-case-p kuno">
                  Alles, was Sie brauchen, ist eine Monero-Wallet und ein Ziel.
                </p>',
    'fundraiser_heading_goal' => 'Ziel',
    'fundraiser_heading_raised' => 'Erreicht',
    'fundraiser_heading_percentage_funded' => 'finanziert',
    'fundraiser_heading_donations' => 'Spenden',
    'fundraiser_heading_supporters' => 'Unterstützer',
    'fundraiser_heading_comments' => 'Kommentare',
    'fundraiser_heading_support' => 'Unterstützen',
    'fundraiser_heading_share' => 'Teilen',
    'fundraiser_heading_about' => 'Über',
    'fundraiser_heading_photos' => 'Bilder',
    'fundraiser_heading_contact' => 'Kontakt',
    'fundraiser_heading_date' => 'Veröffentlicht:',
    'fundraiser_heading_supporters' => 'Unterstützer',
    'fundraiser_heading_new_comment' => 'Kommentar schreiben',
    'fundraiser_heading_new_fundraiser' => 'Neue Spendenaktion',
    'fundraiser_heading_edit_fundraiser' => 'Spendenaktion bearbeiten',
    'fundraiser_heading_logout' => 'Abmelden',
    'fundraiser_support_text' => 'Sende einen beliebigen Monero-Betrag an:',
    'fundraiser_share_text' => 'Kopiere den Link, um diese Spendenaktion mit Freunden oder über soziale Medien zu teilen:',
    'fundraiser_open_in_wallet' => 'In der Wallet öffnen',
    'fundraiser_info_point1' => 'Sie spenden direkt an die Wallet des Empfängers',
    'fundraiser_info_point2' => 'Keine Zwischenhändler oder Gebühren',
    'fundraiser_info_point3' => 'Spenden werden alle 5 Minuten synchronisiert',
    'fundraiser_full_size_photo' => 'Bild in Originalgröße',
    'fundraiser_no_donations' => 'Noch keine Spende erhalten',
    'fundraiser_supporters' => '{AMOUNT} Unterstützer',
    'fundraiser_button_support' => 'Unterstützen',
    'fundraiser_donate_with_monero' => 'Mit Monero spenden:',
    'fundraiser_comment_form_placeholder_txid' => 'TXID',
    'fundraiser_comment_form_placeholder_tx_key' => 'TX Key (Beispiel: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
    'fundraiser_comment_form_placeholder_email' => 'E-Mail (optional, für Spendenbenachrichtigungen)',
    'fundraiser_comment_form_placeholder_comment' => 'Einen öffentlichen Kommentar schreiben',
    'fundraiser_comment_form_submit' => 'Kommentar',
    'search' => 'Suche',
    'search_heading' => 'Suche Spendenaktion',
    'search_text' => 'Suche nach Spendenaktion...',
    'search_sort_by_new' => 'Sortieren nach neu',
    'search_sort_by_recently_donated' => 'Sortieren nach kürzlich gespendet',
    'search_sort_by_percentage_funded' => 'Sortieren nach Prozentsatz der Finanzierung',
    'search_sort_by_goal' => 'Sortieren nach Ziel',
    'search_all_categories' => 'Alle Kategorien',
    'search_no_fundraisers_found' => 'Keine Spendenaktion gefunden',
    'search_fediverse_heading' => 'Suche Fediverse',
    'search_fediverse_text' => 'Fediverse-Spendenaktionen durchsuchen...',
    'search_fediverse_no_fundraisers_found' => 'Keine Fediverse-Spendenaktionen gefunden',
    'search_fediverse_peers_list' => 'Liste der föderierten Instanzen:',
    'login_invite_code_heading' => 'Neue Spendenaktion',
    'login_invite_code_text' => 'Geben Sie einen Einladungscode ein, um eine neue Spendenaktion zu starten.',
    'login_invite_code_note' => 'Wenn Sie keinen Einladungscode haben, wenden Sie sich bitte an den Support.',
    'login_invite_code_form' => 'Einladungscode',
    'login_invite_code_form_placeholder' => 'Einladungscode',
    'login_invite_code_submit' => 'Weiter',
    'login_fundraiser_form_fundraiser' => 'Spendenaktion',
    'login_fundraiser_heading' => 'Spendenaktion bearbeiten',
    'login_fundraiser_text' => 'Geben Sie den Spendenaktion-Code und das Passwort ein, um Ihre Spendenaktion zu bearbeiten.',
    'login_fundraiser_note' => 'Der Code befindet sich in der URL:',
    'login_fundraiser_forgot_password' => 'Passwort vergessen?',
    'login_fundraiser_form_fundraiser' => 'Spendenaktion',
    'login_fundraiser_form_fundraiser_placeholder' => 'Spendenaktion-Code (z.B. ae21)',
    'login_fundraiser_form_password' => 'Passwort',
    'login_fundraiser_form_password_placeholder' => 'Passwort',
    'login_fundraiser_form_submit' => 'Spendenaktion bearbeiten',
    'edit_fundraiser_heading_fundraiser_details' => 'Details zur Spendenaktion',
    'edit_fundraiser_fundraiser_details_text' => 'Beschreiben Sie Ihre Spendenaktion und fügen Sie Bilder hinzu.',
    'edit_fundraiser_form_optional' => '(Optional)',
    'edit_fundraiser_form_more_info' => '(Mehr Info)',
    'edit_fundraiser_form_title' => 'Titel',
    'edit_fundraiser_form_title_placeholder' => 'Spendenaktion Titel',
    'edit_fundraiser_form_photo' => 'Bild',
    'edit_fundraiser_form_additional_photos' => 'Zusätzliche Bilder',
    'edit_fundraiser_form_description' => 'Beschreibung',
    'edit_fundraiser_form_description_placeholder' => 'Beschreiben Sie Ihre Spendenaktion. Fügen Sie ggf. Belohnungen, Meilensteine oder weitere Kontaktinformationen hinzu.',
    'edit_fundraiser_form_tags' => 'Tags',
    'edit_fundraiser_form_tags_placeholder' => 'Kategorie, Tags, etc.',
    'edit_fundraiser_form_contact' => 'Kontakt',
    'edit_fundraiser_form_contact_placeholder' => 'E-Mail-Adresse, Webseite, Twitter, Matrix, usw.',
    'edit_fundraiser_form_visibility' => 'Spendenaktion auf privat setzen*<br>*wird nicht in den Suchergebnissen angezeigt, Spender benötigen den direkten Link',
    'edit_fundraiser_heading_goal' => 'Ziel',
    'edit_fundraiser_goal_text' => 'Legen Sie Ihr Ziel und Ihre Monero-Adresse fest.',
    'edit_fundraiser_get_wallet' => 'Keine Monero-Wallet vorhanden? Holen Sie sich hier eine.',
    'edit_fundraiser_form_goal' => 'Ziel',
    'edit_fundraiser_form_goal_placeholder' => 'Betrag (XMR)',
    'edit_fundraiser_form_donation_page' => 'Kein Ziel - Ich möchte eine Spendenseite erstellen',
    'edit_fundraiser_form_monero_address' => 'Monero Adresse',
    'edit_fundraiser_form_monero_address_placeholder' => 'Beispiel: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
    'edit_fundraiser_form_view_key' => 'Secret View Key',
    'edit_fundraiser_form_view_key_placeholder' => 'Beispiel: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
    'edit_fundraiser_heading_password' => 'Passwort',
    'edit_fundraiser_password_text' => 'Legen Sie ein Passwort fest, um Ihre Spendenaktion später zu bearbeiten.',
    'edit_fundraiser_widthdrawal_warning' => "Vermeiden Sie die Entnahme von Teilbeträgen bei einer laufenden Spendenaktion. Monero verwendet das volle Guthaben für Zahlungen und lässt den restlichen Betrag als neue Transaktionen stehen. Dies würde fälschlicherweise als neue Spende gezählt werden und der Fortschritt Ihrer Spendenaktion wäre ungenau. Wenn Sie die Monero vorzeitig benötigen, müssen Sie immer den vollen Betrag aus der Wallet abheben, um kein "Wechselgeld" zurückzulassen.",
    'edit_fundraiser_form_email' => 'Email',
    'edit_fundraiser_form_email_placeholder' => 'Email (optional, zum Zurücksetzen des Passworts)',
    'edit_fundraiser_form_password' => 'Passwort',
    'edit_fundraiser_form_new_password_placeholder' => 'Passwort',
    'edit_fundraiser_form_edit_password_placeholder' => 'Passwort (leer lassen, falls keine Änderung)',
    'edit_fundraiser_form_email_notifications' => 'Per E-Mail benachrichtigen, wenn eine neue Spende für meine Spendenaktion eingeht',
    'edit_fundraiser_form_submit_edit' => 'Spendenaktion aktualisieren',
    'edit_fundraiser_form_submit_new' => 'Spendenaktion starten',
    'edit_fundraiser_heading_supporters' => 'Unterstützer der Spendenaktion',
    'edit_fundraiser_supporters_text' => 'Wenn ein Unterstützer seine E-Mail-Adresse angegeben hat, wird sie hier angezeigt (z.B. für Belohnungen bei Spendenaktionen).',
    'edit_fundraiser_no_supporters' => 'Noch keine E-Mail-Einreichungen',
    'edit_fundraiser_supporters_email' => 'Email',
    'edit_fundraiser_supporters_comment' => 'Kommentar',
    'edit_fundraiser_supporters_amount' => 'Betrag',
    'edit_fundraiser_supporters_txid' => 'TXID',
    'edit_fundraiser_supporters_tx_key' => 'TX Key',
    'edit_fundraiser_supporters_date' => 'Datum',
    'edit_fundraiser_heading_manage_fundraiser' => 'Spendenaktion verwalten',
    'edit_fundraiser_fix_view_key' => 'Bitte fügen Sie einen gültigen View key hinzu, um Ihre Spendenaktion zu reaktivieren.',
    'edit_fundraiser_deactivate_fundraiser' => 'Spendenaktion deaktivieren',
    'edit_fundraiser_reactivate_fundraiser' => 'Spendenaktion reaktivieren',
    'edit_fundraiser_delete_fundraiser' => 'Löschen Sie Ihre Daten',
    'reset_password_heading' => 'Passwort zurücksetzen',
    'reset_password_description' => 'Geben Sie den Spendenaktion-Code und Ihre E-Mail-Adresse ein, um Ihr Passwort zurückzusetzen.',
    'reset_password_note' => '(Wenn Sie keine E-Mail-Adresse angegeben haben, wenden Sie sich bitte an den Support.)',
    'reset_password_form_fundraiser' => 'Spendenaktion',
    'reset_password_form_fundraiser_placeholder' => 'Spendenaktion-Code (z.B. ae21)',
    'reset_password_form_email' => 'Email',
    'reset_password_form_email_placeholder' => 'Email',
    'reset_password_form_confirmation_code' => 'Bestätigungscode',
    'reset_password_form_confirmation_code_placeholder' => 'Bestätigungscode',
    'reset_password_form_new_password' => 'Neues Passwort',
    'reset_password_form_new_password_placeholder' => 'Neues Passwort',
    'reset_password_form_submit' => 'Passwort ändern',
    'success' => 'Erfolgreich',
    'success_form_submitted' => 'Formular erfolgreich übermittelt',
    'success_new_fundraiser' => 'Ihre Spendenaktion ist aktiv: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Sehen Sie sich Ihre Spendenaktion hier an</a><br>Setzen Sie ein Lesezeichen für diesen Link, um Ihre Spendenaktion zu bearbeiten: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Spendenaktion bearbeiten #{GUID}</a>',
    'success_new_donation_page' => 'Ihre Spendenseite ist aktiv: <a href="https://kuno.anne.media/donate/{GUID}/">Sehen Sie sich Ihre Spendenseite hier an</a><br>Setzen Sie ein Lesezeichen für diesen Link, um Ihre Spendenseite zu bearbeiten: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Spendenseite bearbeiten #{GUID}</a>',
    'success_fundraiser_updated' => '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Ihre Spendenaktion wurde aktualisiert.</a>',
    'success_valid_fundraiser_password' => '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Klicken Sie hier, um Ihre Spendenaktion zu bearbeiten</a>',
    'success_donation_page_updated' => '<a href="https://kuno.anne.media/donate/{GUID}/">Ihre Spendenseite wurde aktualisiert.</a>',
    'success_fundraiser_deactivated' => 'Spendenaktion deaktiviert',
    'success_fundraiser_reactivated' => 'Spendenaktion reaktiviert',
    'success_fundraiser_deleted' => 'Spendenaktion gelöscht',
    'success_valid_invite_code' => 'Gültiger Einladungscode. Sie können jetzt eine Spendenaktion starten.',
    'success_valid_confirmation_code' => 'Gültiger Bestätigungscode',
    'success_check_email_for_password_reset_code' => 'Prüfen Sie Ihre E-Mail-Adresse auf einen Code zum Zurücksetzen des Passworts',
    'success_password_reset' => 'Passwort geändert, <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">Sie können jetzt Ihre Spendenaktion bearbeiten</a>',
    'success_comment_sent' => 'Kommentar gesendet!',
    'success_image_uploaded' => 'Das Bild wurde erfolgreich hochgeladen',
    'error' => 'Fehler',
    'error_please_refresh' => 'Bitte aktualisieren und erneut versuchen.',
    'error_form_expired' => 'Formular abgelaufen, bitte aktualisieren',
    'error_form_ratelimited' => 'Ratelimited, bitte warten Sie {RATELIMIT} Sekunden',
    'error_session_expired' => 'Sitzung abgelaufen, bitte erneut anmelden',
    'error_page_not_found' => 'Seite nicht gefunden',
    'error_fundraiser_not_found' => 'Spendenaktion nicht gefunden',
    'error_email_not_found' => 'Es ist keine E-Mail-Adresse eingestellt, bitte kontaktieren Sie den Support',
    'error_invalid_email' => 'Bitte geben Sie eine gültige E-Mail Adresse ein',
    'error_invalid_email_for_notifications' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein, um Benachrichtigungen zu aktivieren',
    'error_invalid_confirmation_code' => 'Der Bestätigungscode ist ungültig oder abgelaufen',
    'error_invalid_monero_address' => 'Ungültige Monero-Adresse (Bitte geben Sie Ihre Hauptadresse ein, die mit 4 beginnt)',
    'error_invalid_view_key' => 'Ungültiger View key (Bitte geben Sie Ihren privaten/geheimen View key ein)',
    'error_invalid_address' => 'Ungültige Monero-Adresse (Bitte geben Sie Ihre Hauptadresse ein, die mit 4 beginnt)',
    'error_entered_public_view_key' => 'Ungültiger View key (Bitte geben Sie Ihren privaten/geheimen View key ein, nicht den öffentlichen view key)',
    'error_entered_public_spend_key' => 'Ungültiger View key (Bitte geben Sie Ihren privaten/geheimen View key ein, nicht den öffentlichen spend key)',
    'error_entered_private_spend_key' => 'Ungültiger View key (Bitte geben Sie Ihren privaten/geheimen View key ein, nicht den privaten spend key)',
    'error_invalid_private_view_key' => 'Ungültiger View key (Bitte geben Sie Ihren privaten/geheimen View key ein)',
    'error_invalid_txid' => 'Ungültige TXID',
    'error_invalid_tx_key' => 'Bitte geben Sie einen gültigen TX key ein (auch bekannt als TX-Proof)',
    'error_invalid_txid' => 'Bitte geben Sie einen gültigen Einladungscode ein',
    'error_incorrect_email' => 'Inkorrekte E-Mail-Adresse',
    'error_incorrect_password' => 'Falsches Passwort',
    'error_monero_address_already_used' => 'Es gibt bereits eine Spendenaktion/Spenden-Seite mit dieser Monero-Adresse',
    'error_missing_fundraiser_code_or_email' => 'Bitte geben Sie Ihren Spendenaktionscode und Ihre E-Mail-Adresse ein',
    'error_missing_password_reset_code_or_password' => 'Bitte geben Sie Ihren Passwort-Reset-Code und Ihr neues Passwort ein',
    'error_missing_txid_or_tx_key' => 'Bitte geben Sie sowohl die TXID als auch den TX key (auch bekannt als TX-Proof) ein.',
    'error_missing_password' => 'Bitte geben Sie Ihr Passwort ein',
    'error_missing_view_key' => 'Bitte geben Sie einen gültigen privaten View key ein',
    'error_title_too_long' => 'Der Titel muss zwischen 1-80 Zeichen lang sein',
    'error_description_too_long' => 'Die Beschreibung muss kürzer als 8000 Zeichen sein',
    'error_tags_too_long' => 'Tags müssen kürzer als 250 Zeichen sein',
    'error_contact_details_too_long' => 'Die Kontaktangaben müssen kürzer als 250 Zeichen sein',
    'error_goal_must_be_positive' => 'Das Ziel der Spendenaktion muss eine positive Zahl sein',
    'error_image_incorrect_file_type' => 'Das Bild muss ein PNG- oder JPEG-Format sein',
    'error_image_maximum_image_size' => 'Max. Bildgröße 2 MB',
    'error_image_invalid' => 'Ungültiges Bild',
    'error_image_storage_full' => 'Speicher voll',
    'error_image_missing' => 'Laden Sie bitte ein Bild hoch',
    'translate_help' => 'Es wäre fantastisch, wenn Kuno in mehr Sprachen verfügbar wäre. Helfen Sie mit unter <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
    'wallets_header' => 'Monero: <span class="text3">Wallet Auswahl</span>',
    'monero_gui_wallet' => 'Eine von der Monero-Community entwickelte Open-Source-Wallet mit grafischer Benutzeroberfläche (GUI), die völlig kostenlos ist und sich sowohl für Anfänger als auch für fortgeschrittene Benutzer eignet.',
    'cake_wallet' => 'Verwahren, versenden und tauschen Sie Ihre Kryptowährungen sicher und einfach. Kaufen Sie privat Geschenkkarten und bezahlen Sie am Schalter mit Krypto, ein Kinderspiel.',
    'monerujo_wallet' => 'Android-Wallet für Monero. Mit Monerujo können Sie nahtlos zwischen verschiedenen Wallets hin und her wechseln. Einfach eine neue Wallet erstellen mit ein paar Fingertipps.',
    'feather_wallet' => 'Feather ist eine kostenlose, quelloffene Monero-Wallet für Linux, Tails, Windows und macOS. Einfach zu bedienen, klein, schnell und anfängerfreundlich.'    
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}

function translate_pl($string) {
  static $strings = array(
    'site_name' =>                              'Kuno',
    'page_title' =>                             'Kuno – Zbiórka pieniędzy z Monero',
    'page_title_error' =>                       'Błąd| Kuno – Zbiórka pieniędzy z Monero',
    'page_title_search' =>                      'Szukaj | Kuno – Zbiórka pieniędzy z Monero',
    'page_title_fediverse' =>                   'Fediverse | Kuno – Zbiórka pieniędzy z Monero',
    'page_title_reset_password' =>              'Zresetuj hasło | Kuno – Zbiórka pieniędzy z Monero',
    'page_title_edit_fundraiser' =>             'Edytuj zbiórkę | Kuno – Zbiórka pieniędzy z Monero',
    'page_title_new_fundraiser' =>              'Utwórz zbiórka | Kuno – Zbiórka pieniędzy z Monero',
    'pagination' =>                             'Strona {NUM} z {NUM_PAGES}',
    'pagination_fundraisers' =>                 'Wyświetlono {START}-{END} ze {TOTAL} zbiórek',
    'pagination_donations' =>                   'Wyświetlono {START}-{END} z {TOTAL} datków',
    'pagination_submit' =>                      'Pokaż',
    'nav_manage_fundraiser' =>                  'Zarządzaj zbiórką',
    'nav_search' =>                             'Szukaj zbiórek...',
    'nav_fundraiser_progress' =>                'Postęp zbiórki:',
    'nav_edit_fundraiser' =>                    'Edytuj zbiórkę:',
    'nav_logout' =>                             'Wyloguj się',
    'footer_description' =>                     'Zbiórka pieniędzy z Monero',
    'footer_contact' =>                         'Kontakt: support [at] anne.media',
    'footer_language' =>                        'Język:',
    'footer_light_mode' =>                      'Tryb jasny',
    'footer_dark_mode' =>                       'Tryb ciemny',
    'footer_manage_fundraiser' =>               'Zarządzaj swoją zbiórką:',
    'footer_new_fundraiser' =>                  'Utwórz zbiórkę',
    'footer_edit_fundraiser' =>                 'Edytuj zbiórkę',
    'footer_reset_password' =>                  'Zresetuj hasło',
    'footer_quick_links' =>                     'Szybkie linki:',
    'footer_search_fundraisers' =>              'Szukaj zbiórek',
    'footer_search_fediverse' =>                'Szukaj Fediverse',
    'footer_marketplace' =>                     'Handel',
    'footer_rss_feed' =>                        'RSS Feed',
    'footer_faq' =>                             '(FAQ) Najczęściej zadawane pytania',
    'email_new_donation_subject' =>             '[Kuno] Nowy {DONATION} XMR datek dla #{GUID}',
    'email_new_donation_body' =>                'Twoja zbiórka otrzymała nowy datek!
         <br><br>Zbiórka: {TITLE}
         <br>Datek: {DONATION} XMR
         <br>Data: {DATE}
         <br><br>Suma datków: {TOTAL} XMR
         <br>Wspierający: {SUPPORTERS}
         <br>Odwiedź swoją zbiórkę: https://kuno.anne.media/{TYPE}/{GUID}/
         <br><br>Dezaktywuj powiadomienia na e-mailu:
         <br>https://kuno.anne.media/edit-fundraiser/{GUID}/',
    'email_reset_password_subject' =>           '[Kuno] Zresetuj hasło',
    'email_reset_password_body' =>              'Odźwiedź link by zresetować hasło: {URL} lub wpisz kod: {CODE} (Ważny 24 godziny)',
    'homepage_title' =>                         'Prosta zbiórka <br> dla każdego',
    'homepage_subtitle' =>                      'Zbierz lub przekaż datek na szczytny cel za pomocą Monero',
    'homepage_point1' =>                        'Zacznij zbierać za darmo',
    'homepage_point2' =>                        'Otrzymuj Monero (które możesz wymienić na gotówkę)',
    'homepage_point3' =>                        'Żadnych opłat, na całym świecie, bez konta bankowego',
    'homepage_button_start_fundraiser' =>       'Utwórz zbiórkę',
    'homepage_button_browse_fundraisers' =>     'Przeglądaj zbiórki',
                                                // I add 3 most popular crowdfunding websites in Poland
    'homepage_bar' =>                           'Atrakcyjna alternatywa dla stron: zrzutka.pl, siepomaga.pl, pomagam.pl, GoFundMe, Kickstarter',
    'homepage_heading_browse_fundraisers' =>    'Przeglądaj {AMOUNT} zbiórek',
    'homepage_heading_total_raised' =>          'Zebrano ponad {AMOUNT} XMR!',
    'homepage_top_categories' =>                'Główne kategorie',
    'homepage_recent_donations' =>              'Najnowsze datki',
    'homepage_all_categories' =>                'Wszystkie kategorie',
    'homepage_launch_in_one_click' =>           'Odpal zbiórkę jednym kliknięciem',
    'homepage_get_started_free' =>              'Zacznij za darmo',
    'homepage_info_heading1' =>                 'Monero to internetowa gotówka',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                Monero - szybki i bezpieczny sposób przesyłania gotówki.
                </p>
                <p class="monero-info-p kuno">
                Bez konta bankowego, aplikacji czy dowodu. Pobierz portfel na swój telefon lub komputer i jednym kliknięciem przesyłaj pieniądze na całym świecie.
                </p>
                <p class="monero-info-p kuno">
                Dostępność i prostota obsługi, czyni Monero idealnym narzędziem płatniczym dla sklepów internetowych, światowych przekazów finansowych, napiwków, zbiórek i tym podobnych.
                </p>',
    'homepage_link_download_mobile' =>          'Pobierz na smartphone',
    'homepage_link_download_desktop' =>         'Pobierz na komputer',
    'homepage_info_heading2' =>                 'Niecenzurowalne datki',
    'homepage_info_description2' => '<p class="monero-info-p-bold kuno">
                Dzięki Monero, Twoje pieniądze należą tylko do Ciebie.
                </p>
                <p class="monero-info-p kuno">
                Monero to oprogramowanie typu peer-to-peer, jest niezależne od podmiotów trzecich. Niemożliwe jest: cenzurowanie transakcji, zamrażanie środków, usuwanie użytkowników.
                </p>
                <p class="monero-info-p kuno">
                Nieważne, czy zbierasz, czy wysyłasz datki na szczytne cele, zawsze masz pewność, że odbiorca otrzyma 100% Twojej darowizny.
                </p>',
    'homepage_link_official_website' =>         'Oficjalna strona',
    'homepage_link_overview' =>                 'Przegląd',
    'homepage_link_buy_monero' =>               'Kup Monero',
    'homepage_info_heading3' =>                 'Wydawaj gdziekolwiek zechcesz',
    'homepage_info_description3' => '<p class="monero-info-p-bold kuno">
                Wymień Monero na gotówkę, rób zakupy online lub płać rachunki.
                </p>
                <p class="monero-info-p kuno">
                Łatwa wymiana Monero na gotówkę z <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> lub <a href="https://coinatmradar.com">Crypto ATM</a> (Konto bankowe nie jest Ci potrzebne).
                </p>
                <p class="monero-info-p kuno">
                Rynki takie jak <a href="https://moneromarket.io">MoneroMarket</a> oraz katalogi jak <a href="https://monerica.com">Monerica</a> i <a href="https://acceptedhere.io">AcceptedHere</a> pomagają Ci kupić to, czego potrzebujesz przy użyciu Monero.
                </p>
                <p class="monero-info-p kuno">
                Dodatkowo, <a href="https://cakepay.com">CakePay</a> oraz <a href="https://coincards.com">CoinCards</a> oferują przedpłacone karty Visa oraz karty podarunkowe do tysięcy firm. A strony takie jak <a href="https://proxysto.re">ProxyStore</a>, <a href="https://sovereignstack.tools/rerouter/">Sovereign Stack</a> oraz <a href="https://shopinbit.com">ShopInBit</a> oferują wygodny sposób opłacania faktur przy użyciu Monero.                </p>
                <p class="monero-info-p kuno">
                Monero jest elastyczną i wszechstronną walutą - pozyskiwanie środków na opłacenie rachunków, rozpoczęcie projektów lub wsparcie działań charytatywnych.                </p>',
    'homepage_link_exchange_to_cash' =>           'Exchange to cash',
    'homepage_link_shop_online' =>                'Zakupy online',
    'homepage_link_marketplace' =>                'Targi',
    'homepage_use_case_heading1' =>               'Dla organizacji charytatywnych',
    'homepage_use_case_description1' => '<p class="use-case-p-bold kuno">
    Lokalne schronisko dla kotów potrzebuje wsparcia na karmę i rachunki weterynaryjne.                </p>
                <p class="use-case-p kuno">
                Założyli zbiórkę na Kuno, udostępnili link w mediach społecznościowych i już otrzymują datki.                </p>
                <p class="use-case-p kuno">
                Schronisko wykorzystuje zebrane Monero do zakupu kart podarunkowych Petsmart za pomocą CakePay i wypłaca gotówkę, aby opłacić rachunek za weterynarza za pomocą crypto-bankomatu.                </p>
                <p class="use-case-p kuno">
                Darczyńcy otrzymują aktualizacje ze zdjęciami kotów.                </p>',
    'homepage_use_case_heading2' => 'Dla osób prywatnych',
    'homepage_use_case_description2' => '<p class="use-case-p-bold kuno">
                Alice zbiera pieniądze na pokrycie rachunków medycznych.                </p>
                <p class="use-case-p kuno">
                Córka pomaga jej założyć zbiórkę na Kuno i udostępnia ją społeczności.                </p>
                <p class="use-case-p kuno">
                Udaje im się zebrać wystarczającą ilość Monero więc zamieniają je na gotówkę za pośrednictwem LocalMonero.                </p>
                <p class="use-case-p kuno">
                Alice wysyła listy z podziękowaniami do każdego darczyńcy.                </p>',
    'homepage_use_case_heading3' => 'Dla początkujących firm',
    'homepage_use_case_description3' => '<p class="use-case-p-bold kuno">
                Niezależny twórca chce stworzyć nową grę.
                </p>
                <p class="use-case-p kuno">
                Tworzy zbiórkę na Kuno i udostępnia ją społeczności graczy.                </p>
                <p class="use-case-p kuno">
                Osiąga cel i wykorzystuje fundusze, aby zatrudnić artystów z MoneroMarket i kupuje zasoby do gry za pomocą wirtualnej karty debetowej CakePay.                </p>
                <p class="use-case-p kuno">
                Każdy darczyńca otrzymuje bezpłatną kopię gry.
                </p>',
    'homepage_use_case_heading4' => 'Dla twórców treści internetowych',
    'homepage_use_case_description4' => '<p class="use-case-p-bold kuno">
                Zespół przesyła swoje oryginalne utwory na YouTube.
                </p>
                <p class="use-case-p kuno">
                Tworzą zbiórkę na Kuno, aby otrzymywać datki.
                </p>
                <p class="use-case-p kuno">
                Fani przekazują datki, sugerują utwory i komentują podczas transmisji na żywo.
                </p>
                <p class="use-case-p kuno">
                Takie przedsięwzięcie zapewnia lepszy sposób na zrównoważone zarabianie w porównaniu z reklamami.
                </p>',
    'homepage_use_case_heading5' => 'Dla Ciebie',
    'homepage_use_case_description5' => '<p class="use-case-p-bold kuno">
                Dzięki Kuno każdy może zebrać pieniądze na swój cel, projekt lub początkującą firme.
                </p>
                <p class="use-case-p kuno">
                Wszystko czego potrzebujesz to portfel Monero i cel.
                </p>',
    'fundraiser_heading_goal' =>                         'Cel',
    'fundraiser_heading_raised' =>                       'Zebrano',
    'fundraiser_heading_percentage_funded' =>            'ufundowano',
    'fundraiser_heading_donations' =>                    'Datki',
    'fundraiser_heading_supporters' =>                   'Darczyńców',
    'fundraiser_heading_comments' =>                     'Komentarze',
    'fundraiser_heading_support' =>                      'Wspieraj',
    'fundraiser_heading_share' =>                        'Udostępnij',
    'fundraiser_heading_about' =>                        'Opis',
    'fundraiser_heading_photos' =>                       'Zdjęcia',
    'fundraiser_heading_contact' =>                      'Kontakt',
    'fundraiser_heading_date' =>                         'Opublikowano:',
    'fundraiser_heading_supporters' =>                   'Darczyńcy',
    'fundraiser_heading_new_comment' =>                  'Napisz komentarz',
    'fundraiser_heading_new_fundraiser' =>               'Nowa zbiórka',
    'fundraiser_heading_edit_fundraiser' =>              'Edytuj zbiórkę',
    'fundraiser_heading_logout' =>                       'Wyloguj się',
    'fundraiser_support_text' =>                         'Wyślij dowolną ilość Monero na adres:',
    'fundraiser_share_text' =>                           'Kopiuj link i podziel się zbiórką na mediach społecznościowych lub z przyjaciółmi:',
    'fundraiser_open_in_wallet' =>                       'Otwórz w portfelu',
    'fundraiser_info_point1' =>                          'Przekazujesz darowiznę bezpośrednio do portfela odbiorcy',
    'fundraiser_info_point2' =>                          'Żadnych pośredników i opłat',
    'fundraiser_info_point3' =>                          'Datki są synchronizowane co 5 minut',
    'fundraiser_full_size_photo' =>                      'Otwórz zdjęcie w pełnym rozmiarze',
    'fundraiser_no_donations' =>                         'Brak darowizn',
    'fundraiser_supporters' =>                           '{AMOUNT} darczyńców',
    'fundraiser_button_support' =>                       'Wspieraj',
    'fundraiser_donate_with_monero' =>                   'Przekaż darowiznę za pomocą Monero:',
    'fundraiser_comment_form_placeholder_txid' =>        'ID transakcji',
    'fundraiser_comment_form_placeholder_tx_key' =>      'Klucz transakcji (Przykładowo: 7d7a9370a746d219e5f66aaaec902ead0d1c1783817a10276c9accdacca6f10d)',
    'fundraiser_comment_form_placeholder_email' =>       'E-mail (opcjonalnie, w przypadku nagród ze zbiórki pieniędzy)',
    'fundraiser_comment_form_placeholder_comment' =>     'Napisz komentarz',
    'fundraiser_comment_form_submit' =>                  'Zatwierdź',
    'search' =>                                          'Szukaj',
    'search_heading' =>                                  'Szukaj zbiórek',
    'search_text' =>                                     'Szukaj zbiórek...',
    'search_sort_by_new' =>                              'Sortuj według najnowszych',
    'search_sort_by_recently_donated' =>                 'Sortuj według ostatnich wpłat',
    'search_sort_by_percentage_funded' =>                'Sortuj według procentu osiągnięcia celu',
    'search_sort_by_goal' =>                             'Sortuj według kwoty docelowej',
    'search_all_categories' =>                           'Wszystkie kategorie',
    'search_no_fundraisers_found' =>                     'Nie znaleziono żadnych zbiórek',
    'search_fediverse_heading' =>                        'Szukaj Fediverse',
    'search_fediverse_text' =>                           'Szukaj zbiórek Fediverse...',
    'search_fediverse_no_fundraisers_found' =>           'Nie znaleziono żadnych zbiórek Fediverse',
    'search_fediverse_peers_list' =>                     'Lista stowarzyszonych instancji:',
    'login_invite_code_heading' =>                       'Nowa zbiórka',
    'login_invite_code_text' =>                          'Wprowadź kod zaproszenia, aby rozpocząć nową zbiórkę.',
    'login_invite_code_note' =>                          'Jeśli nie masz kodu zaproszenia, skontaktuj się z działem obsługi.',
    'login_invite_code_form' =>                          'Kod zaproszenia',
    'login_invite_code_form_placeholder' =>              'Kod zaproszenia',
    'login_invite_code_submit' =>                        'Kontynuuj',
    'login_fundraiser_form_fundraiser' =>                'Zbiórka',
    'login_fundraiser_heading' =>                        'Edytuj zbiórkę',
    'login_fundraiser_text' =>                           'Wprowadź kod zbiórki i hasło, aby edytować zbiórkę.',
    'login_fundraiser_note' =>                           'Kod zbiórki znajduję się w URL:',
    'login_fundraiser_forgot_password' =>                'Nie pamiętasz hasła?',
    'login_fundraiser_form_fundraiser' =>                'Zbiórka',
    'login_fundraiser_form_fundraiser_placeholder' =>    'Kod zbiórki (np. ae21)',
    'login_fundraiser_form_password' =>                  'Hasło',
    'login_fundraiser_form_password_placeholder' =>      'Hasło',
    'login_fundraiser_form_submit' =>                    'Edytuj zbiórkę',
    'edit_fundraiser_heading_fundraiser_details' =>      'Szczegóły zbiórki',
    'edit_fundraiser_fundraiser_details_text' =>         'Opisz zbiórkę i dodaj zdjęcia',
    'edit_fundraiser_form_optional' =>                   '(Opcjonalnie)',
    'edit_fundraiser_form_more_info' =>                  '(Więcej informacji)',
    'edit_fundraiser_form_title' =>                      'Tytuł',
    'edit_fundraiser_form_title_placeholder' =>          'Tytuł zbiórki',
    'edit_fundraiser_form_photo' =>                      'Zdjęcie',
    'edit_fundraiser_form_additional_photos' =>          'Dodatkowe zdjęcia',
    'edit_fundraiser_form_description' =>                'Opis',
    'edit_fundraiser_form_description_placeholder' =>    'Opisz swoją zbiórkę. Jeśli chcesz, dodaj nagrody w ramach zbiórki, kamienie milowe lub dane kontaktowe.',
    'edit_fundraiser_form_tags' =>                       'Tagi',
    'edit_fundraiser_form_tags_placeholder' =>           'Kategoria, tagi, etc.',
    'edit_fundraiser_form_contact' =>                    'Kontakt',
    'edit_fundraiser_form_contact_placeholder' =>        'E-mail, strona internetowa, Twitter, Matrix, etc.',
    'edit_fundraiser_form_visibility' =>                 'Załóż prywatną zbiórkę (nie wyświetli się w wynikach wyszukiwania, darczyńcy muszą mieć bezpośredni link)',
    'edit_fundraiser_heading_goal' =>                    'Cel',
    'edit_fundraiser_goal_text' =>                       'Ustaw kwotę i adres portfela Monero.', 
    'edit_fundraiser_get_wallet' =>                      'Nie masz portfela? Zrób sobie portfel tutaj.',
    'edit_fundraiser_form_goal' =>                       'Cel',
    'edit_fundraiser_form_goal_placeholder' =>           'Cel (XMR)',
    'edit_fundraiser_form_donation_page' =>              'Brak kwoty docelowej – Chcę utworzyć stronę na darowizny', 
    'edit_fundraiser_form_monero_address' =>             'Monero adres',
    'edit_fundraiser_form_monero_address_placeholder' => 'Przykładowo: 44AFFq5kSiGBoZ4NMDwYtN18obc8AemS33DBLWs3H7otXft3XjrpDtQGv7SqSsaBYBb98uNbr2VBBEt7f2wfn3RVGQBEP3A',
    'edit_fundraiser_form_view_key' =>                   'Prywatny klucz wglądu',
    'edit_fundraiser_form_view_key_placeholder' =>       'Przykładowo: f359631075708155cc3d92a32b75a7d02a5dcf27756707b47a2b31b21c389501',
    'edit_fundraiser_heading_password' =>                'Hasło',
    'edit_fundraiser_password_text' =>                   'Ustaw hasło, aby móc później edytować zbiórkę.', 
    'edit_fundraiser_widthdrawal_warning' =>             "Nie wysyłaj częściowego salda podczas trwania zbiórki! Monero wykorzystuje pełne saldo do płatności, oznacza to, że wysyłając Monero, oprogramowanie wysyła środki do wybranego przez Ciebie adresu, a RESZTĘ salda wysyła do siebie. Ta RESZTA zostałaby fałszywie obliczona jako darowizna, a postęp Twojej zbiórki będzie zawyżony o RESZTĘ. Jeśli musisz wykorzystać zebrane środki w trakcie trwania zbiórki, zawsze wypłacaj całe saldo, nie pozostawiając żadnej RESZTY.",
    'edit_fundraiser_form_email' =>                      'E-mail',
    'edit_fundraiser_form_email_placeholder' =>          'E-mail (opcjonalnie, jeśli zapomnisz hasło)',
    'edit_fundraiser_form_password' =>                   'Hasło',
    'edit_fundraiser_form_new_password_placeholder' =>   'Hasło',
    'edit_fundraiser_form_edit_password_placeholder' =>  'Hasło (pozostaw puste, jeśli bez zmian)',
    'edit_fundraiser_form_email_notifications' =>        'Powiadom mnie e-mailem, gdy zbiórka otrzyma nową darowiznę',
    'edit_fundraiser_form_submit_edit' =>                'Zapisz zmiany',
    'edit_fundraiser_form_submit_new' =>                 'Utwórz zbiórkę',
    'edit_fundraiser_heading_supporters' =>              'Wspierający zbiórkę',
    'edit_fundraiser_supporters_text' =>                 'Jeśli darczyńca podał swój adres e-mail, zobaczysz go tutaj (np. w przypadku nagród ze zbiórki).',
    'edit_fundraiser_no_supporters' =>                   'Brak przesłanych e-maili',
    'edit_fundraiser_supporters_email' =>                'E-mail',
    'edit_fundraiser_supporters_comment' =>              'Komentarz',
    'edit_fundraiser_supporters_amount' =>               'Kwota',
    'edit_fundraiser_supporters_txid' =>                 'ID Transakcji',
    'edit_fundraiser_supporters_tx_key' =>               'Klucz Transakcji',
    'edit_fundraiser_supporters_date' =>                 'Data',
    'edit_fundraiser_heading_manage_fundraiser' =>       'Zarządzaj zbiórką',
    'edit_fundraiser_fix_view_key' =>                    'Aby ponownie aktywować zbiórkę, dodaj prawidłowy klucz wglądu.',
    'edit_fundraiser_deactivate_fundraiser' =>           'Dezaktywuj zbiórkę',
    'edit_fundraiser_reactivate_fundraiser' =>           'Reaktywuj zbiórkę',
    'edit_fundraiser_delete_fundraiser' =>               'Usuń swoje dane',
    'reset_password_heading' =>                          'Nie pamiętam hasła',
    'reset_password_description' =>                      'Wprowadź kod zbiórki i e-maila, aby zresetować hasło.', 
    'reset_password_note' =>                             '(Jeśli nie dodano e-maila, skontaktuj się z działem obsługi.)', 
    'reset_password_form_fundraiser' =>                  'Zbiórka',
    'reset_password_form_fundraiser_placeholder' =>      'Kod zbiórki (np. ae21)',
    'reset_password_form_email' =>                       'E-mail',
    'reset_password_form_email_placeholder' =>           'E-mail',
    'reset_password_form_confirmation_code' =>           'Kod autoryzacji',
    'reset_password_form_confirmation_code_placeholder' =>'Kod autoryzacji',
    'reset_password_form_new_password' =>                 'Nowe hasło',
    'reset_password_form_new_password_placeholder' =>     'Nowe hasło',
    'reset_password_form_submit' =>                       'Resetuj hasło',
    'success' =>                                          'Sukces',
    'success_form_submitted' =>                           'Wysłano z powodzeniem',
    'success_new_fundraiser' =>                           'Twoja zbiórka jest aktywna: <a href="https://kuno.anne.media/fundraiser/{GUID}/">Zobacz swoją zbiórkę</a><br>Dodaj link do zakładek aby szybko edytować zbiórkę: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edytuj zbiórkę #{GUID}</a>',
    'success_new_donation_page' =>                        'Twoja strona na darowizny jest aktywna: <a href="https://kuno.anne.media/donate/{GUID}/">Zobacz swoją stronę</a><br>Dodaj link do zakładek aby szybko edytować stronę: <a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Edytuj stronę #{GUID}</a>',
    'success_fundraiser_updated' =>                       '<a href="https://kuno.anne.media/fundraiser/{GUID}/">Twoja zbiórka została zaktualizowana.</a>',
    'success_valid_fundraiser_password' =>                '<a href="https://kuno.anne.media/edit-fundraiser/{GUID}/">Kliknij tutaj by edytować swoją zbiórkę</a>',
    'success_donation_page_updated' =>                    '<a href="https://kuno.anne.media/donate/{GUID}/">Twoja strona darowizn została zaktualizowana.</a>',
    'success_fundraiser_deactivated' =>                   'Zbiórka została zdezaktywowana',
    'success_fundraiser_reactivated' =>                   'Zbiórka została wznowiona',
    'success_fundraiser_deleted' =>                       'Zbiórka została usunięta',
    'success_valid_invite_code' =>                        'Poprawny kod zaproszenia. Teraz możesz utworzyć zbiórkę.',
    'success_valid_confirmation_code' =>                  'Poprawny kod zaproszenia',
    'success_check_email_for_password_reset_code' =>      'Sprawdź swój adres e-mail, aby uzyskać kod do zresetowania hasła',
    'success_password_reset' =>                           'Hasło zostało zmienione, teraz możesz <a href="https://kuno.anne.media/edit-fundraiser/{FUNDRAISER}">edytować swoją zbiórkę</a>',
    'success_comment_sent' =>                             'Kometarz wysłany!',
    'success_image_uploaded' =>                           'Obraz przesłany',
    'error' =>                                            'Błąd',
    'error_please_refresh' =>                             'Odśwież i spróbuj ponownie.',
    'error_form_expired' =>                               'Formularz wygasł. Odśwież stronę',
    'error_form_ratelimited' =>                           'Osiągnięto limit formularzy, poczekaj {RATELIMIT} sekund', 
    'error_session_expired' =>                            'Sesja wygasła, zaloguj się ponownie',
    'error_page_not_found' =>                             'Nie znaleziono strony',
    'error_fundraiser_not_found' =>                       'Nie znaleziono zbiórki',
    'error_email_not_found' =>                            'E-mail nie został ustawiony, skontaktuj się z działem obsługi',
    'error_invalid_email' =>                              'Proszę wpisać aktualny adres e-mail',
    'error_invalid_email_for_notifications' =>            'Proszę wpisać aktualny adres e-mail by włączyć powiadomienia',
    'error_invalid_confirmation_code' =>                  'Kod autoryzacji jest niepoprawny lub wygasł.',
    'error_invalid_monero_address' =>                     'Nieprawidłowy adres Monero (wprowadź swój podstawowy adres, który zaczyna się od cyfry 4)',
    'error_invalid_view_key' =>                           'Nieprawidłowy klucz wglądu (wprowadź swój prywatny klucz wglądu)',
    'error_invalid_address' =>                            'Nieprawidłowy adres Monero (wprowadź swój podstawowy adres, który zaczyna się od cyfry 4)',
    'error_entered_public_view_key' =>                    'Nieprawidłowy klucz wglądu (wprowadź swój prywatny klucz wglądu, a nie publiczny klucz wglądu)',
    'error_entered_public_spend_key' =>                   'Nieprawidłowy klucz wglądu (wprowadź swój prywatny klucz wglądu, a nie publiczny klucz wydawania)',
    'error_entered_private_spend_key' =>                  'Nieprawidłowy klucz wglądu (wprowadź swój prywatny klucz wglądu, a nie prywatny klucz wydawania)',
    'error_invalid_private_view_key' =>                   'Nieprawidłowy klucz wglądu (wprowadź swój prywatny klucz wglądu)',
    'error_invalid_txid' =>                               'Nieprawidłowe ID transakcji',
    'error_invalid_tx_key' =>                             'Wprowadź poprawny klucz transakcji (znany również jako dowód transakcji)',
    'error_invalid_txid' =>                               'Wprowadź poprawny kod zaproszenia',
    'error_incorrect_email' =>                            'Nieprawidłowy adres e-mail',
    'error_incorrect_password' =>                         'Nieprawidłowe hasło',
    'error_monero_address_already_used' =>                'Istnieje już zbiórka/strona darowizn z tym adresem Monero',
    'error_missing_fundraiser_code_or_email' =>           'Wprowadź kod zbiórki lub adres e-mail',
    'error_missing_password_reset_code_or_password' =>    'Wprowadź hasło kod resetowania i nowe hasło',
    'error_missing_txid_or_tx_key' =>                     'Wprowadź ID transakcji i klucz transakcji (znany również jako dowód transakcji)',
    'error_missing_password' =>                           'Wprowadź swoje hasło',
    'error_missing_view_key' =>                           'Wprowadź poprawny klucz wglądu',
    'error_title_too_long' =>                             'Tytuł musi zawierać 1-80 znaków',
    'error_description_too_long' =>                       'Opis nie może być dłuższy niż 8000 znaków',
    'error_tags_too_long' =>                              'Tagi muszą być krótsze niż 250 znaków',
    'error_contact_details_too_long' =>                   'Dane kontaktowe nie mogą być dłuższe niż 250 znaków',
    'error_goal_must_be_positive' =>                      'Kwota zbiórki musi być liczbą dodatnią',
    'error_image_incorrect_file_type' =>                  'Obraz musi być w formacie PNG lub JPEG',
    'error_image_maximum_image_size' =>                   'Maksymalny rozmiar obrazu 2 MB',
    'error_image_invalid' =>                              'Nieprawidłowy obraz',
    'error_image_storage_full' =>                         'Pamięć obrazu pełna',
    'error_image_missing' =>                              'Prześlij obraz',
    'translate_help' =>                                   'Byłoby świetnie, gdyby Kuno było dostępne w większej liczbie języków. Pomóż nam w tłumaczeniach na <a href="https://github.com/annemedia/kuno-translation">https://github.com/annemedia/kuno-translation</a>',
    'wallets_header' =>                                   'Monero: <span class="text3">Wybór portfeli</span>',
    'monero_gui_wallet' =>                                'Portfel z otwartym kodem źródłowym i graficznym interfejsem użytkownika opracowany przez społeczność Monero, całkowicie bezpłatny, odpowiedni zarówno dla początkujących, jak i zaawansowanych użytkowników.',
    'cake_wallet' =>                                      'Przechowuj, wysyłaj i wymieniaj swoje kryptowaluty bezpiecznie i z łatwością. Kupuj karty podarunkowe kryptowalutami i płać nimi przy kasie, nic prostszego.',
    'monerujo_wallet' =>                                  'Portfel na Androida. Dzięki Monero możesz bez problemu przełączać się między kilkoma portfelami. Utworzenie nowego to kwestia kilku kliknięć.',
    'feather_wallet' =>                                   'Feather to bezpłatny portfel z otwartym kodem źródłowym dla systemów Linux, Tails, Windows i macOS. Łatwy w obsłudze, mały, szybki i przyjazny dla początkujących.'    
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}