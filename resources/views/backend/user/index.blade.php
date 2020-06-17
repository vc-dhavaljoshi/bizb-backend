<x-backend.layouts.backend>
    <!-- Hero -->
    <x-backend.elements.page-header title="Users" />
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
        <x-backend.elements.card is-div is-rounded is-bordered with-header>
            <x-slot name="title">User Management</x-slot>
            <x-slot name="buttonTitle">Add User</x-slot>
            <x-slot name="link">{{ route('backend.users.create') }}</x-slot>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">#</th>
                                        <th>Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                        <th style="width: 15%;">Registered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Wayne Garcia</td>
                                        <td class="d-none d-sm-table-cell">
                                            client1<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Personal</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">Jack Estrada</td>
                                        <td class="d-none d-sm-table-cell">
                                            client2<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">Alice Moore</td>
                                        <td class="d-none d-sm-table-cell">
                                            client3<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="font-w600">Scott Young</td>
                                        <td class="d-none d-sm-table-cell">
                                            client4<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="font-w600">Albert Ray</td>
                                        <td class="d-none d-sm-table-cell">
                                            client5<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">5 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="font-w600">Jack Greene</td>
                                        <td class="d-none d-sm-table-cell">
                                            client6<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">9 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="font-w600">Wayne Garcia</td>
                                        <td class="d-none d-sm-table-cell">
                                            client7<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="font-w600">Ryan Flores</td>
                                        <td class="d-none d-sm-table-cell">
                                            client8<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">3 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="font-w600">Carl Wells</td>
                                        <td class="d-none d-sm-table-cell">
                                            client9<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="font-w600">Carl Wells</td>
                                        <td class="d-none d-sm-table-cell">
                                            client10<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="font-w600">Lisa Jenkins</td>
                                        <td class="d-none d-sm-table-cell">
                                            client11<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">2 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="font-w600">Henry Harrison</td>
                                        <td class="d-none d-sm-table-cell">
                                            client12<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">13</td>
                                        <td class="font-w600">Brian Cruz</td>
                                        <td class="d-none d-sm-table-cell">
                                            client13<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">4 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">14</td>
                                        <td class="font-w600">Ralph Murray</td>
                                        <td class="d-none d-sm-table-cell">
                                            client14<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">9 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">15</td>
                                        <td class="font-w600">Amber Harvey</td>
                                        <td class="d-none d-sm-table-cell">
                                            client15<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-primary">Personal</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">6 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">16</td>
                                        <td class="font-w600">Betty Kelley</td>
                                        <td class="d-none d-sm-table-cell">
                                            client16<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">7 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">17</td>
                                        <td class="font-w600">Andrea Gardner</td>
                                        <td class="d-none d-sm-table-cell">
                                            client17<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info">Business</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">4 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">18</td>
                                        <td class="font-w600">Jose Wagner</td>
                                        <td class="d-none d-sm-table-cell">
                                            client18<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-warning">Trial</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">3 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">19</td>
                                        <td class="font-w600">Carl Wells</td>
                                        <td class="d-none d-sm-table-cell">
                                            client19<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">VIP</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">9 days ago</em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">20</td>
                                        <td class="font-w600">Jack Estrada</td>
                                        <td class="d-none d-sm-table-cell">
                                            client20<em class="text-muted">@example.com</em>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td>
                                            <em class="text-muted">10 days ago</em>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

        </x-backend.elements.card>
        <!-- END Info -->
    </div>
    <!-- END Page Content -->
</x-backend.layouts.backend>
