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
  Monero is software and doesn’t rely on third parties or corporations. Transactions can’t be censored, funds can’t be frozen and users can’t be deplatformed.
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
    'wallets_header' => 'Monero: <span class="text3">Wallet Choices</span>',
    'monero_gui_wallet' => 'An open-source graphical user interface (GUI) wallet developed by the Monero community, completely free to use, suitable for both beginners and advanced users.',
    'cake_wallet' => 'Securely store, send and exchange your crypto with ease. Privately buy gift cards and pay at the counter with crypto, piece of cake.',
    'monerujo_wallet' => 'Android Wallet for Monero. With Monerujo, you can seamlessly move back and forth between several wallets. Making a new one is as simple as a few taps.',
    'feather_wallet' => 'Feather is a free, open-source Monero wallet for Linux, Tails, Windows and macOS. Easy-to-use, small, fast and beginner friendly.',
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
    'homepage_info_heading1' => 'Monero è la valuta dell'internet',
    'homepage_info_description1' => '<p class="monero-info-p-bold kuno">
                 Monero è un modo veloce e sicuro per inviare e ricevere soldi online.
                </p>
                <p class="monero-info-p kuno">
                 Nessun conto bancario, applicazione o documento d'identità è richiesto. Scarica facilmente un wallet per il tuo telefono o computer per inviare e ricevere soldi in tutto il mondo con un click.
                </p>
                <p class="monero-info-p kuno">
                La semplicità e l'accessibilità di Monero lo rendono un metodo di pagamento ideale per negozi online, lavoro da remoto, regali, donazioni, raccolte fondi e altro.
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
                E' facile scambiare Monero per contanti con <a href="https://localmonero.co">LocalMonero</a>, <a href="https://bisq.network">Bisq</a> o <a href="https://coinatmradar.com">Crypto ATM</a> (nessun conto bancario richiesto).
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
                  Raggiunge l'obiettivo e usa i fondi per assumere degli artisti che accettano Monero su MoneroMarket, e acquista i tools per creare il suo gioco con una carta di debito virtuale di CakePay.
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
    'login_fundraiser_note' => 'Il codice è nell'URL:',
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
    'edit_fundraiser_goal_text' => 'Imposta il tuo obiettivo e l'indirizzo Monero.',
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
    'edit_fundraiser_form_email_notifications' => 'Mandami un'email quando la mia raccolta fondi riceve una donazione',
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
    'error_monero_address_already_used' => 'C'è giá una raccolta fondi/pagina per le donazioni con questo indirizzo Monero',
    'error_missing_fundraiser_code_or_email' => 'Inserisci il codice della tua raccolta fondi e l'indirizzo email',
    'error_missing_password_reset_code_or_password' => 'Inserisci il codice per reimpostare la tua password e la nuova password',
    'error_missing_txid_or_tx_key' => 'Inserisci sia il TXID che la TX key (conosciuta anche come TX proof)',
    'error_missing_password' => 'Inserisci la tua password',
    'error_missing_view_key' => 'Inserisci una private view key valida',
    'error_title_too_long' => 'Il titolo deve essere di 1-80 caratteri',
    'error_description_too_long' => 'La descrizione deve essere più corta di 8000 caratteri',
    'error_tags_too_long' => 'I Tags devono essere più corti di 250 caratteri',
    'error_contact_details_too_long' => 'I dettagli di contatto devono essere più corti di 250 caratteri',
    'error_goal_must_be_positive' => 'L'obiettivo della raccolta fondi deve essere un numero positivo',
    'error_image_incorrect_file_type' => 'Le immagini devono avere un formato PNG o JPEG',
    'error_image_maximum_image_size' => 'Massima dimensione per immagine: 2 MB',
    'error_image_invalid' => 'Immagine non valida',
    'error_image_storage_full' => 'Archivio pieno',
    'error_image_missing' => 'Carica un'immagine',
    'wallets_header' => 'Monero: <span class="text3">Wallet Consigliati</span>',
    'monero_gui_wallet' => 'Un wallet a interfaccia grafica (GUI) open-source sviluppato dalla community di Monero, completamente gratis, adatto sia a chi è alle prime armi che agli utenti esperti.',
    'cake_wallet' => 'Custodisci, invia e scambia le tue crypto facilmente e in modo sicuro. Acquista gitf-cards privatamente e paga alla cassa con le tue crypto.',
    'monerujo_wallet' => 'Wallet Android per Monero. Con Monerujo, puoi utilizzare simultaneamente diversi wallets. Crearne uno nuovo richiede pochi semplici passi.',
    'feather_wallet' => 'Feather è un wallet Monero gratis e open-source per Linux, Tails, Windows e macOS. Facile da usare, leggero, veloce e adatto anche a chi è agli inizi.',
  );
  $translation = ($strings[$string]) ? $strings[$string] : $string;
  return $translation;
}
