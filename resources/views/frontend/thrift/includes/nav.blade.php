<nav id="topbar">
                    <ul class="navbar-nav theme-brand flex-row  text-center">
                        <li class="nav-item theme-logo">
                            <a href="index.html">
                                <img src="{{ asset('office/cork/assets/img/90x90.jpg') }}" class="navbar-logo" alt="logo">
                            </a>
                        </li>
                        <li class="nav-item theme-text">
                            <a href="index.html" class="nav-link"> NAPTIN-THRIFT </a>
                        </li>
                    </ul>

                    <ul class="list-unstyled menu-categories" id="topAccordion">

                        <li class="menu single-menu active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span>Dashboard</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                                <li class="active">
                                    <a href="index.html"> Analytics </a>
                                </li>
                                <li>
                                    <a href="index2.html"> Sales </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu single-menu">
                            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                    <span>Members</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                                <li>
                                    <a href="apps_chat.html"> Chat </a>
                                </li>
                                <li>
                                    <a href="apps_mailbox.html"> Mailbox </a>
                                </li>
                                <li>
                                    <a href="apps_todoList.html"> Todo List </a>
                                </li>
                                <li>
                                    <a href="apps_notes.html">Notes</a>
                                </li>
                                <li>
                                    <a href="apps_scrumboard.html">Task Board</a>
                                </li>
                                <li>
                                    <a href="apps_contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="apps_invoice.html">Invoice List</a>
                                </li>
                                <li>
                                    <a href="apps_calendar.html"> Calendar</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="menu single-menu">
                            <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    <span>Savings</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                                <li>
                                    <a href="component_tabs.html"> Tabs </a>
                                </li>
                                <li>
                                    <a href="component_accordion.html"> Accordions  </a>
                                </li>
                                <li>
                                    <a href="component_modal.html"> Modals </a>
                                </li>                            
                                <li>
                                    <a href="component_cards.html"> Cards </a>
                                </li>
                                <li>
                                    <a href="component_bootstrap_carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="component_blockui.html"> Block UI </a>
                                </li>
                                <li>
                                    <a href="component_countdown.html"> Countdown </a>
                                </li>
                                <li>
                                    <a href="component_counter.html"> Counter </a>
                                </li>
                                <li>
                                    <a href="component_sweetalert.html"> Sweet Alerts </a>
                                </li>
                                <li>
                                    <a href="component_timeline.html"> Timeline </a>
                                </li>
                                <li>
                                    <a href="component_snackbar.html"> Notifications </a>
                                </li>
                                <li>
                                    <a href="component_session_timeout.html"> Session Timeout </a>
                                </li>
                                <li>
                                    <a href="component_media_object.html"> Media Object </a>
                                </li>
                                <li>
                                    <a href="component_list_group.html"> List Group </a>
                                </li>
                                <li>
                                    <a href="component_pricing_table.html"> Pricing Tables </a>
                                </li>
                                <li>
                                    <a href="component_lightbox.html"> Lightbox </a>
                                </li>
                            </ul>
                        </li>


                        <li class="menu single-menu">
                            <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    <span>Loans</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                                <li>
                                    <a href="ui_alerts.html"> Alerts </a>
                                </li>
                                <li>
                                    <a href="ui_avatar.html"> Avatar </a>
                                </li>
                                <li>
                                    <a href="ui_badges.html"> Badges </a>
                                </li>
                                <li>
                                    <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                                </li>                            
                                <li>
                                    <a href="ui_buttons.html"> Buttons </a>
                                </li>
                                <li>
                                    <a href="ui_buttons_group.html"> Button Groups </a>
                                </li>
                                <li>
                                    <a href="ui_color_library.html"> Color Library </a>
                                </li>
                                <li>
                                    <a href="ui_dropdown.html"> Dropdown </a>
                                </li>
                                <li>
                                    <a href="ui_infobox.html"> Infobox </a>
                                </li>
                                <li>
                                    <a href="ui_jumbotron.html"> Jumbotron </a>
                                </li>
                                <li>
                                    <a href="ui_loader.html"> Loader </a>
                                </li>
                                <li>
                                    <a href="ui_pagination.html"> Pagination </a>
                                </li>
                                <li>
                                    <a href="ui_popovers.html"> Popovers </a>
                                </li>
                                <li>
                                    <a href="ui_progress_bar.html"> Progress Bar </a>
                                </li>
                                <li>
                                    <a href="ui_search.html"> Search </a>
                                </li>
                                <li>
                                    <a href="ui_tooltips.html"> Tooltips </a>
                                </li>
                                <li>
                                    <a href="ui_treeview.html"> Treeview </a>
                                </li>
                                <li>
                                    <a href="ui_typography.html"> Typography </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu single-menu">
                            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                    <span>Purchases</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                                <li>
                                    <a href="table_basic.html"> Basic </a>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                        <li>
                                            <a href="table_dt_basic.html"> Basic </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_basic-dark.html"> Dark </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                        </li>
                                        <li>
                                            <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                        </li>
                                        <li>
                                            <a href="table_dt_custom.html"> Custom </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_range_search.html"> Range Search </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_html5.html"> HTML5 Export </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu single-menu">
                            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                    <span>Report</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                                <li>
                                    <a href="form_bootstrap_basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="form_input_group_basic.html"> Input Group </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html"> Layouts </a>
                                </li>
                                <li>
                                    <a href="form_validation.html"> Validation </a>
                                </li>
                                <li>
                                    <a href="form_input_mask.html"> Input Mask </a>
                                </li>
                                <li>
                                    <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                                </li>
                                <li>
                                    <a href="form_select2.html"> Select2 </a>
                                </li>
                                <li>
                                    <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                                </li>
                                <li>
                                    <a href="form_maxlength.html"> Maxlength </a>
                                </li>
                                <li>
                                    <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                                </li>
                                <li>
                                    <a href="form_switches.html"> Switches </a>
                                </li>
                                <li>
                                    <a href="form_wizard.html"> Wizards </a>
                                </li>
                                <li>
                                    <a href="form_fileupload.html"> File Upload </a>
                                </li>
                                <li>
                                    <a href="form_quill.html"> Quill Editor </a>
                                </li>
                                <li>
                                    <a href="form_markdown.html"> Markdown Editor </a>
                                </li>
                                <li>
                                    <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                                </li>
                                <li>
                                    <a href="form_clipboard.html"> Clipboard </a>
                                </li>
                                <li>
                                    <a href="form_typeahead.html"> Typeahead </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>