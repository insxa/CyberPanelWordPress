<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm WPCPHeader">
    <img src="https://cyberpanel.net/wp-content/uploads/2018/07/logo-e1532873145641.png"> <h4
            class="my-0 mr-md-auto font-weight-normal"> CyberPanel</h4>
    <nav class="my-2 my-md-0 mr-md-3">
        <div id="WPCPSpinner" class="spinner-border text-info" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <a class="p-2 text-dark" href="<?php echo admin_url( "admin.php?page=cyberpanel" ); ?>">Add Servers</a>
        <!--<a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>-->
    </nav>
    <a class="btn btn-outline-primary" href="<?php echo admin_url( "admin.php?page=cyberpanel-manage" ); ?>">Manage Servers</a>
</div>

<div aria-live="polite" aria-atomic="true" style="position: relative;">
    <div data-autohide="false" class="toast WPCPToast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
            <strong class="mr-auto">Jobs..</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div id="jobStatusResult" class="toast-body">
        </div>
    </div>
</div>