<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">
                    <?php echo $title ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Simple -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Daftar <?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th style="width: 15%;">Registered</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center font-size-sm">1</td>
                        <td class="font-w600 font-size-sm">Laura Carr</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client1<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">2</td>
                        <td class="font-w600 font-size-sm">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client2<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">6 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">3</td>
                        <td class="font-w600 font-size-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client3<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">4</td>
                        <td class="font-w600 font-size-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client4<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">5</td>
                        <td class="font-w600 font-size-sm">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client5<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">5 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">6</td>
                        <td class="font-w600 font-size-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client6<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">7</td>
                        <td class="font-w600 font-size-sm">Ralph Murray</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client7<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">8</td>
                        <td class="font-w600 font-size-sm">Lisa Jenkins</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client8<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">9</td>
                        <td class="font-w600 font-size-sm">Wayne Garcia</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client9<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">6 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">10</td>
                        <td class="font-w600 font-size-sm">Ralph Murray</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client10<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">11</td>
                        <td class="font-w600 font-size-sm">Henry Harrison</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client11<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">12</td>
                        <td class="font-w600 font-size-sm">Carl Wells</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client12<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">8 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">13</td>
                        <td class="font-w600 font-size-sm">Ryan Flores</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client13<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">14</td>
                        <td class="font-w600 font-size-sm">Albert Ray</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client14<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">15</td>
                        <td class="font-w600 font-size-sm">Lori Grant</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client15<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">16</td>
                        <td class="font-w600 font-size-sm">Jose Wagner</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client16<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">17</td>
                        <td class="font-w600 font-size-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client17<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">18</td>
                        <td class="font-w600 font-size-sm">Brian Cruz</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client18<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">19</td>
                        <td class="font-w600 font-size-sm">Marie Duncan</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client19<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">5 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">20</td>
                        <td class="font-w600 font-size-sm">Melissa Rice</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client20<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">8 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">21</td>
                        <td class="font-w600 font-size-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client21<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">22</td>
                        <td class="font-w600 font-size-sm">Jesse Fisher</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client22<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">5 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">23</td>
                        <td class="font-w600 font-size-sm">Jeffrey Shaw</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client23<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">10 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">24</td>
                        <td class="font-w600 font-size-sm">Jose Mills</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client24<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">25</td>
                        <td class="font-w600 font-size-sm">Andrea Gardner</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client25<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">26</td>
                        <td class="font-w600 font-size-sm">Jose Mills</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client26<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">27</td>
                        <td class="font-w600 font-size-sm">Wayne Garcia</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client27<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">28</td>
                        <td class="font-w600 font-size-sm">Jose Parker</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client28<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">4 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">29</td>
                        <td class="font-w600 font-size-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client29<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-primary">Personal</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">5 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">30</td>
                        <td class="font-w600 font-size-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client30<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">31</td>
                        <td class="font-w600 font-size-sm">Amanda Powell</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client31<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">5 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">32</td>
                        <td class="font-w600 font-size-sm">Justin Hunt</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client32<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-success">VIP</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">33</td>
                        <td class="font-w600 font-size-sm">Brian Stevens</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client33<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">34</td>
                        <td class="font-w600 font-size-sm">Megan Fuller</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client34<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">35</td>
                        <td class="font-w600 font-size-sm">Jack Greene</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client35<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">7 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">36</td>
                        <td class="font-w600 font-size-sm">Wayne Garcia</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client36<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">3 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">37</td>
                        <td class="font-w600 font-size-sm">Carl Wells</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client37<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">9 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">38</td>
                        <td class="font-w600 font-size-sm">Henry Harrison</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client38<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-warning">Trial</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">2 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">39</td>
                        <td class="font-w600 font-size-sm">Carol White</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client39<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-danger">Disabled</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">2 days ago</em>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">40</td>
                        <td class="font-w600 font-size-sm">Jack Greene</td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            client40<em class="text-muted">@example.com</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge badge-info">Business</span>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm">7 days ago</em>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->