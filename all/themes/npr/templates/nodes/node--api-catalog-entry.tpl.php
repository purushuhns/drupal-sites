

    <!-- Start Content Block 3-4 -->
    <section id="content-3-4" class="content-block content-3-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="editContent page-headline" data-selector="Footer">
                        <h2 data-selector="h2" style="padding-top:0px;margin-top:0px;"><?php print($node->title);?></h2>
                    </div>
                    <div class="editContent page-headline-body" data-selector="Footer">
                        <p data-selector="p" style=""><?php print $body[0]['value']; ?></p>
                    </div>
                    <div class="editContent" data-selector="Footer">
                        <p data-selector="p" style="">
                            <?php
                            if (user_has_role(DRUPAL_AUTHENTICATED_RID)) {
                                $view_name = $content['field_api_model'][0]['#title'] . "_methods";
                                print views_embed_view($view_name);
                            }
                            else {
                                global $base_url;
                                print '<a class="btn btn-default" href="' . $base_url . '/user/login">Login to view APIs</a>';
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div id="accordion1" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-selector="h4"
                                    style="">
                                    <a class="panel-toggle"
                                       data-toggle="collapse"
                                       data-parent="#accordion1"
                                       href="#content1">
                                        <div class="editContent"
                                             data-selector="Footer">
                                            <span>API Details</span>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div id="content1"
                                 class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="editContent"
                                         data-selector="Footer">
                                        <p data-selector="p" style="">
                                        <table class="table">
                                            <tr>
                                                <td>API Type</td>
                                                <td><?php print(render($content['field_api_type'][0])) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Version</td>
                                                <td><?php print(render($content['field_api_version'][0])) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Lifecycle Status</td>
                                                <td><?php print(render($content['field_lifecycle_stage'][0])) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Support Forum</td>
                                                <td><?php print render($content['field_support_forum'][0]); ?></td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" data-selector="h4"
                                    style="">
                                    <a class="panel-toggle collapsed"
                                       data-toggle="collapse"
                                       data-parent="#accordion1"
                                       href="#content3">
                                        <div class="editContent"
                                             data-selector="Footer">
                                            <span>Contact Details</span>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div id="content3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="editContent"
                                         data-selector="Footer">
                                        <p data-selector="p" style="">
                                        <table class="table">
                                            <tr>
                                                <td>API Version</td>
                                                <td><?php print(render($content['field_api_type'][0])) ?></td>
                                            </tr>
                                            <tr>
                                                <td>API Status</td>
                                                <td><?php print(render($content['field_lifecycle_stage'][0])) ?></td>
                                            </tr>
                                            <tr>
                                                <td>API Team</td>
                                                <td><?php print(render($content['field_api_team'][0])) ?></td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.panel -->
                        <?php
                            if (user_has_role(DRUPAL_AUTHENTICATED_RID)) {
							  if(isset($content['field_code_samples'])) {
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"
                                            data-selector="h4"
                                            style="">
                                            <a class="panel-toggle collapsed"
                                               data-toggle="collapse"
                                               data-parent="#accordion1"
                                               href="#content4">
                                                <div class="editContent"
                                                     data-selector="Footer">
                                                    <span>Code Samples</span>
                                                </div>
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div id="content4"
                                         class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="editContent"
                                                 data-selector="Footer">
                                                <p data-selector="p" style="">
                                                <table class="table">
                                                    <?php
                                                    // Display links as rows in table.
                                                    foreach ($content['field_code_samples'] as $index => $sample) {
                                                        if (is_numeric($index)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php print(urldecode(render($sample))) ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </table>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.content -->
                                </div>
                                <?php
							  }
                            }
                        ?>
                        <?php
                        if (user_has_role(DRUPAL_AUTHENTICATED_RID)) {
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"
                                        data-selector="h4"
                                        style="">
                                        <a class="panel-toggle collapsed"
                                           data-toggle="collapse"
                                           data-parent="#accordion1"
                                           href="#content6">
                                            <div class="editContent"
                                                 data-selector="Footer">
                                                <span>API Documents</span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <!-- /.panel-heading -->
                                <div id="content6"
                                     class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="editContent"
                                             data-selector="Footer">
                                            <p data-selector="p" style="">
                                            <table class="table">
                                                <tr><td><a href="<?php $base_path;?>api-documents#_Toc384982187" target="_blank">Overview</a></td></tr>
                                                <tr><td><a href="<?php $base_path;?>api-documents#_Toc458500082" target="_blank">Quote</a></td></tr>
                                                <tr><td><a href="<?php $base_path;?>api-documents#_Toc458500089" target="_blank">Sell</a></td></tr>
                                                <tr><td><a href="<?php $base_path;?>api-documents#_Toc458500095" target="_blank">Cancel</a></td></tr>
                                            </table>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if (user_has_role(DRUPAL_AUTHENTICATED_RID)) {
						  if(isset($content['field_api_documents'])) {
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"
                                        data-selector="h4"
                                        style="">
                                        <a class="panel-toggle collapsed"
                                           data-toggle="collapse"
                                           data-parent="#accordion1"
                                           href="#content5">
                                            <div class="editContent"
                                                 data-selector="Footer">
                                                <span>Other Documents</span>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                                <!-- /.panel-heading -->
                                <div id="content5"
                                     class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="editContent"
                                             data-selector="Footer">
                                            <p data-selector="p" style="">
                                            <table class="table">
                                                <?php
                                                // Display links as rows in table.
                                                foreach ($content['field_api_documents'] as $index => $doc) {
                                                    if (is_numeric($index)) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php print(render($doc)) ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </table>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.content -->
                            </div>
                            <?php
						  }
                        }
                        ?>
                    </div>
                    <!-- /.accordion -->
                </div>
                <!-- /.column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!--// END Content Block 3-4 -->