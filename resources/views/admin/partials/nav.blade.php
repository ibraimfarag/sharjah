<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#homepage" aria-controls="homepage">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse in" id="homepage">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/home/landing') }}">Homepage Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/home') }}">Homepage Contents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/home/featured') }}">Homepage Boxes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/home/footer') }}">Footer Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/home/menu') }}">Menu</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/web-pages') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/web-pages/') }}">Add a Page</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#events" aria-expanded="false" aria-controls="events">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Calendar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="events">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/calendar') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/calendar') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contributors" aria-expanded="false" aria-controls="contributors">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Contributors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contributors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/contributors') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/contributors') }}">Create </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/contributors/order') }}">Change order</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#partners" aria-expanded="false" aria-controls="partners">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Partners</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="partners">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/partners') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/partners/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#supporters" aria-expanded="false" aria-controls="supporters">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Supporters</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="supporters">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/supporters') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/supporters/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#venues" aria-expanded="false" aria-controls="venues">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Venues and times</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="venues">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/venues-and-times') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/venues-and-times/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#opportunities" aria-expanded="false" aria-controls="opportunities">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Opportunities</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="opportunities">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/opportunities') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/opportunities/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false" aria-controls="projects">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="projects">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/projects') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/projects/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#releases" aria-expanded="false" aria-controls="releases">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Releases</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="releases">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/releases') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/releases/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#coverage" aria-expanded="false" aria-controls="coverage">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Coverage</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="coverage">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/coverage') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/posts/create/coverage/') }}">Create </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#presskits" aria-expanded="false" aria-controls="presskits">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Press Kits</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="presskits">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/presskits') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/presskits/') }}">Create</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/forms') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/forms/') }}">Create</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#publications" aria-expanded="false" aria-controls="publications">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Publications</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="publications">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/publications') }}">View All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/publications/') }}">Create</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#podcasts" aria-expanded="false" aria-controls="podcasts">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Architecture+</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="podcasts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/podcasts') }}">View Podcasts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/podcasts/') }}">Create Podcast</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#spaces" aria-expanded="false" aria-controls="podcasts">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Al Manakh Spaces</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="spaces">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/spaces') }}">View Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/spaces/') }}">Create Event</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#materialize" aria-expanded="false" aria-controls="materialize">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Re-materialize</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="materialize">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/materials/series-contents') }}">Series Contents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/materials') }}">View Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/materials/') }}">Add Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/materials/videos') }}">Series 1 Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/materials/videos') }}">Add S1 Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/materials/open-calls') }}">Series 2 Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/materials/videos2') }}">Add S2 Video</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tours" aria-expanded="false" aria-controls="materialize">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">SAT Tours</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tours">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/tours') }}">View Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/create/tours/') }}">Add Tour</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#research" aria-expanded="false" aria-controls="materialize">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Research</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse show in" id="research">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/buildings') }}">&nbsp;- View Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/buildings/create') }}">&nbsp;- Create Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/types') }}">&nbsp;- View Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/types/create') }}">&nbsp;- Create Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/repositories/') }}">&nbsp;- View Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/repositories/create') }}">&nbsp;- Create Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/repositories/types') }}">&nbsp;- View Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/repositories/types/create') }}">&nbsp;- Create Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/contents') }}">Other Content</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/research/feedback') }}">Feedbacks</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subscribers" aria-expanded="false" aria-controls="subscribers">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Subscribers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subscribers">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('admin/subscribers') }}">View All</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>