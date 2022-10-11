<!DOCTYPE html>
<html lang="en">
    @include('dashboard-admin.layouts.header')

    <body>
        <!-- Side-Nav -->
        @include('dashboard-admin.layouts.navbar')
        <div class="p-1 my-container active-cont">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom"
            >
                <h1 class="h2 p-3">{{$title}}</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button
                            type="button"
                            class="btn btn-sm btn-outline-secondary"
                            >
                            Export
                        </button>
                    </div>
                </div>
            </div>
        @yield('container')
        </div>

        @include('dashboard-admin.layouts.footer')
    </body>
</html>
