<div class="container">
    <aside>
        <nav class="sidenav">
            <li><a href="<?= base_url('notee/index') ?>">Home</a></li>
            <li><a href="<?= base_url('notee/about') ?>">About</a></li>
            <li><a href="<?= base_url('notee/nootes') ?>">Note</a></li>
            <li><a href="<?= base_url('notee/contact')?>">Contact</a></li>
            <li><a href="<?= base_url('kalkulator/index')?>">Kalkulator</a></li>
        </nav>
    </aside>

    
    <main class="main-content">
        <?php $this->load->view($page); ?> 
    </main>
</div>
