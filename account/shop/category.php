<?php
include '../../auth.php';
// Nội dung của trang admin
?>

<?php include "../includes/head.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
<?php include "../includes/nav.php"; ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="m-0 title"> Quản l&#253; danh mục </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <button type="button" class="btn btn-info btn-xs btnModalAddCatagory" data-toggle="modal" data-target="#formAddCatagory"><i class="fa fa-plus"></i> Thêm danh mục gốc</button>
                <button type="button" class="btn btn-warning btn-xs btnSyncAllCatagory"><i class="fa fa-refresh"></i> Đồng bộ từ danh mục kho tổng</button>
                <hr />
                <div style="overflow-x: auto">
                    <table class="dxtlControl" id="treeListReferrals" style="width:100%;border-collapse:separate;">
                        <tr>
                            <td id="treeListReferrals_U" style="vertical-align:Top;">
                                <table id="treeListReferrals_D" class="dxtlDataTable" oncontextmenu="return ASPx.TLMenu(&#39;treeListReferrals&#39;, event)" style="width:100%;border-collapse:separate;">
                                    <thead>
                                        <tr id="treeListReferrals_HDR">
                                            <th class="dxtlHeader dxtl__BB dxtl__IM">&nbsp;</th>
                                            <th id="treeListReferrals_DX-DnD-H-0" class="dxtlHeader dxtl__BB dxtl" style="cursor:pointer;">Tên danh mục</th>
                                            <th id="treeListReferrals_DX-DnD-H-1" class="dxtlHeader dxtl__BB dxtl" style="cursor:pointer;">Ảnh đại diện</th>
                                            <th id="treeListReferrals_DX-DnD-H-2" class="dxtlHeader dxtl__BB dxtl" style="cursor:pointer;">Biểu tượng danh mục</th>
                                            <th id="treeListReferrals_DX-DnD-H-3" class="dxtlHeader dxtl" style="cursor:pointer;">Vị trí</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="treeListReferrals_HER" style="display:none;">
                                            <td colspan="5">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table><img id="treeListReferrals_DAD" class="dxTreeList_DragAndDropArrowDown" src="/DXR.axd?r=1_36-Einzs" alt="|" style="visibility:hidden;position:absolute;z-index:30000;top:-100px;" /><img id="treeListReferrals_DAU" class="dxTreeList_DragAndDropArrowUp" src="/DXR.axd?r=1_36-Einzs" alt="|" style="visibility:hidden;position:absolute;z-index:30000;top:-100px;" /><img id="treeListReferrals_DH" class="dxTreeList_DragAndDropHide" src="/DXR.axd?r=1_36-Einzs" alt="Hide" style="visibility:hidden;position:absolute;z-index:30000;top:-100px;" />
                    <table id="treeListReferrals_LP" class="dxtlLoadingPanel" style="left:0px;top:0px;z-index:30000;display:none;">
                        <tr>
                            <td class="dx" style="padding-right:0px;"><img class="dxlp-loadingImage dxlp-imgPosLeft" src="/DXR.axd?r=1_36-Einzs" alt style="vertical-align:middle;" /></td>
                            <td class="dx" style="padding-left:0px;"><span id="treeListReferrals_TL">Loading&hellip;</span></td>
                        </tr>
                    </table>
                    <div id="treeListReferrals_LD" class="dxtlLoadingDiv dx-ft" style="left:0px;top:0px;z-index:29999;display:none;position:absolute;">
                    </div>
                    <script id="dxss_1107171491" type="text/javascript">
                        <!--
                        ASPx.createControl(MVCxClientTreeList, 'treeListReferrals', '', {
                            'callBack': function(arg) {
                                ;
                            },
                            'disableSwipeGestures': true,
                            'stateObject': {
                                'editorValues': '',
                                'callbackState': 'c2G2eRowX/XHk4AGKTvC9Re7s8rZ0OKronvusmBprc2hy79ilLi5upQyfNhJ3MTcBL9b7JXU8SNU4h3eCgV4ozIdvWrgTubO2hgEHs07Utx69YhUxFGjA3jFsf8XFeTIBIK1ah2r2yYrJVLzEOq44VBMyOn3+g/OpnOw4ZBXGVTN4004IOiOpANsLdtameV3nviU6fajzhxwdt4sozm5rBLR3VOMIcC3lM+/lYYpWQmPd0634PbhohNCx+A16K+UOrwkKXR+SuD9/WMP69o7EZ/pwvFGHlD/BxvAPPXh3YkRlL516xUcCCtqetEb7QKHfKnpRruPq3RFszNUiNdvPL5zbJmPx9wo/quZaCYTf9saJ3U7AoIguVijPsPXJ+wZkaT46HTfkabak25pNWBxg3+GxykssBW65H+ubZx+DniaKtU9BrwaJwxxTN1+vToJ'
                            },
                            'maxVisibleLevel': 0,
                            'visibleColumnCount': 4,
                            'rowCount': 0,
                            'expandCollapseAction': 2,
                            'confirmDeleteMsg': 'Confirm Delete?',
                            'showRoot': true,
                            'columns': [new ASPxClientTreeListColumn(0, '', 'Name', true, true, 0), new ASPxClientTreeListColumn(1, '', 'Image', true, true, 0), new ASPxClientTreeListColumn(2, '', 'Icon', true, true, 0), new ASPxClientTreeListColumn(3, '', 'CategoryAddress', true, true, 0)],
                            'callbackUrl': '/Shop/PartialViewCategory',
                            'keyName': 'Id',
                            'parentKeyName': 'ParentId'
                        });

                        //
                        -->
                    </script>
                    <style>
                        .action {
                            float: right;
                        }

                        .action i {
                            padding: 3px;
                            border-radius: 3px;
                            width: 18px;
                            text-align: center;
                            cursor: pointer;
                        }

                        .dxtlNode_Aqua {
                            white-space: normal !important;
                        }
                    </style>
                </div>
            </div>
        </div>
        <form class="modal fade" id="formAddCatagory" role="dialog" enctype="multipart/form-data" method="post">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm danh mục</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tên danh mục: (*)</label>
                            <input type="text" class="form-control" name="txtName">
                        </div>
                        <div class="form-group">
                            <label>Link danh mục: (*)</label>
                            <input type="text" class="form-control" name="txtSlug">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input type="number" class="form-control" name="txtDisplayOrder" placeholder="Tự động sắp sếp thứ tự tăng dần" min="0">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh danh mục: (200px x 200px)</label>
                            <input type="file" class="form-control" id="file" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Biểu tượng danh mục: (50px x 50px)</label>
                            <input type="file" class="form-control" id="file" name="icon" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="txtIdParent">
                        <input type="hidden" name="txtId">
                        <button type="submit" class="btn btn-success">Thêm danh mục</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </form>
        <style>
            .listAdCatagory .action {
                padding-left: 5px !important;
            }
        </style>
        <script>
            $(document).on("click", ".btnSyncAllCatagory", function() {
                var cf = confirm('Xác nhận đồng bộ');
                if (cf) {
                    var button = $(this);
                    var text = button.html();
                    button.prop('disabled', true).html('Đang đồng bộ ...');
                    $.ajax({
                        url: "/shop/SyncAllCategory",
                        type: 'POST',
                        success: function(result) {
                            if (result.check) {
                                toast('success', result.ms);
                                reload();
                            } else {
                                toast('error', result.ms);
                            }
                            button.prop('disabled', false).html(text);
                        },
                        error: function(error) {
                            toast('error', result.ms);
                        }
                    });
                }
            });

            $('#formAddCatagory [name="txtName"]').change(function() {
                $.ajax({
                    url: '/shop/Get_Slug',
                    data: {
                        name: $(this).val()
                    },
                    success: function(data) {
                        $('#formAddCatagory [name="txtSlug"]').val(data)
                    }
                });
            });
            $('#formAddCatagory').submit(function(e) {
                e.preventDefault();
                var button = $(this).find('[type="submit"]');
                var text = button.text();
                button.prop('disabled', true).text('Đang xử lý');
                $.ajax({
                    url: '/shop/FormAddCatagory',
                    type: 'POST',
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.check) {
                            toast('success', data.ms);
                            reload();
                        } else {
                            toast('error', data.ms);
                            button.prop('disabled', false).text(text);
                        }
                    },
                    error: function(err) {
                        toast('error', err.statusText);
                        button.prop('disabled', false).text(text);
                    }
                });
            });
            $(document).on("click", ".btnDeleteCategory", function() {
                var cf = confirm('Xác nhận xóa');
                if (cf) {
                    var idparent = $(this).parent().attr("id");
                    $.ajax({
                        url: "/shop/DeleteCategory",
                        type: 'POST',
                        data: {
                            id: idparent
                        },
                        success: function(result) {
                            if (result.check) {
                                Command: toastr["success"](result.ms);
                                reload();
                            }
                            else {
                                toast('error', result.ms);
                            }
                        },
                        error: function(error) {
                            Command: toastr["error"](error.statusText);
                        }
                    });

                }
            });
            $(document).on('click', '.addSubCategory', function() {
                $('#formAddCatagory')[0].reset();
                $('#formAddCatagory [name="txtId"]').val('');
                var idParent = $(this).parent().attr('id');
                $('#formAddCatagory [name="txtIdParent"]').val(idParent);
                $('#formAddCatagory').modal('show');
            });
            $(document).on('click', '.btnUpdateCategory', function() {
                var idParent = $(this).parent().attr('id');
                $('#formAddCatagory')[0].reset();
                $('#formAddCatagory [name="txtIdParent"]').val('');
                $.ajax({
                    url: '/shop/DetailCategory',
                    data: {
                        id: idParent
                    },
                    type: 'POST',
                    success: function(data) {
                        $('#formAddCatagory [name="txtId"]').val(data.Id);
                        $('#formAddCatagory [name="txtName"]').val(data.Name);
                        $('#formAddCatagory [name="txtSlug"]').val(data.Slug);
                        $('#formAddCatagory [name="txtDisplayOrder"]').val(data.DisplayOrder);
                        $('#formAddCatagory [name="txtType"]').val(data.Type);
                        $('#formAddCatagory [name="txtIcon"]').val(data.IconFont);
                        $('#formAddCatagory').modal("show");
                    },
                    error: function(err) {
                        toast('error', err.statusText);
                    }
                });
            });
        </script>
    </div>
    <?php include "../includes/footer.php"; ?>
</body>

</html>