<div id="navigation" class="sidebar  col-md-3 col-lg-2 p-0 "
    style="height: 100vh;z-index: 1000;position: fixed;display: flex;justify-content: center;align-items: flex-start;border-right: 1px solid #19191912;">

    <div class="offcanvas-md offcanvas-end mt-3" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Lazyblog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto mt-5">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?php if ($id == 0)
                        echo "active"; ?>  " aria-current="page" href="<?= base_url('dashboard') ?>">
                        <img src="<?= base_url('dashboardui/icons/home.svg') ?>" />
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?php if ($id == 1)
                        echo "active"; ?>" href="<?= base_url('dashboard/post') ?>">
                        <img src="<?= base_url('dashboardui/icons/post.svg') ?>" />
                        Posts
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?php if ($id == 2)
                        echo "active"; ?>" href="<?= base_url('dashboard/create') ?>">
                        <img src="<?= base_url('dashboardui/icons/edit.svg') ?>" />
                        Create a new post
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?php if ($id == 3)
                        echo "active"; ?>" href="<?= base_url('dashboard/leaderboard') ?>">
                        <img src="<?= base_url('dashboardui/icons/rank.svg') ?>" />
                        Leaderboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 <?php if ($id == 4)
                        echo "active"; ?>" href="<?= base_url('dashboard/editAuthor') ?>">
                        <img src="<?= base_url('dashboardui/icons/author.svg') ?>" />
                        Author's settings
                    </a>
                </li>
            </ul>

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2"
                        href="<?= base_url('author/') . session()->get('user_id') ?>">
                        <img src="<?= base_url('dashboardui/icons/view.svg') ?>" />
                        View My Page
                    </a>
                </li>


            </ul>



            <ul class="nav flex-column mb-5">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url('logout') ?>">
                        <img src="<?= base_url('dashboardui/icons/logout.svg') ?>" />
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>