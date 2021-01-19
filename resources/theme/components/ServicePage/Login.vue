<template>
    <div class="app app-login p-0">
        <div class="row g-0 app-auth-wrapper">
            <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                <div class="d-flex flex-column align-content-end">
                    <div class="app-auth-body mx-auto">
                        <div class="app-auth-branding mb-4">
                            <a class="app-logo" href="index.html">
                                <img class="logo-icon mr-2" :src="app.asset('images/bfg-logo.png')" alt="logo">
                            </a>
                        </div>
                        <h2 class="auth-heading text-center mb-5">Log in to Bfg Admin</h2>
                        <div class="auth-form-container text-left">
                            <slot></slot>
                        </div><!--//auth-form-container-->

                    </div><!--//auth-body-->

                    <slot name="footer"></slot>
                </div><!--//flex-column-->
            </div>
            <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                <div class="auth-background-holder"></div>
                <div class="auth-background-mask"></div>
                <div class="auth-background-overlay p-3 p-lg-5">
                    <div class="d-flex flex-column align-content-end h-100">
                        <div class="h-100"></div>
                        <div class="overlay-content p-3 p-lg-4 rounded">
                            <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
                            <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
                        </div>
                    </div>
                </div><!--//auth-background-overlay-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "aui::servicePage.login",
        props: {},
        data () {
            return {

            };
        },
        mounted () {},
        computed: {},
        watch: {},
        methods: {}
    }
</script>f