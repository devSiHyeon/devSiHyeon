<? include "./Header.php"; ?>

<div class="container" >
    <h2 class="text-center mt-5">출고관리</h2>
    <table class="table mt-5 text-center">
        <tr style="background:#d5f5e2;">
            <td>NO</td>
            <td>상품코드</td>
            <td>판매수량</td>
            <td>판매가</td>
            <td>출고날짜</td>
            <td>수정</td>
        </tr>
        <?
            $No_out = 1;
            $sql_out = "
                        SELECT *
                        FROM c_product_out
                        ORDER BY product_code_idx ASC
                        ";
            $result_out = mysqli_query ($db, $sql_out);
            while ($row = mysqli_fetch_array($result_out)){

                ?>
        <tr>
            <td><?=$No_out++?></td>       
            <td><?=$row['product_code_idx']?></td>       
            <td><?=$row['out_quantity']?></td>       
            <td><?=$row['sale_price']?></td>       
            <td><?=$row['updated_at']?></td>        
            <td><button class="btn_update">출고</button></td>        
        </tr>
        <?    } ?>
    </table>
</div>



<!-- Modal Window -->
<div class="modal inmodal fade" id="modal_1" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">설비 등록</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xs-12">

                        <div class="form-horizontal">

                            <div class="form-group">
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 설비유형</label>
                                <div class="col-xs-10">
                                    <select form="form_modal" id="modal_category" name="modal_category" class="input-sm form-control input-s-sm inline" required>
                                        <option value="">선택</option>
						                <?=getEquipmentCategoryList()?>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 설비코드</label>
                                <div class="col-xs-4"><input form="form_modal" type="text" id="modal_code" name="modal_code" class="form-control input-sm" required></div>
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 설비명</label>
                                <div class="col-xs-4"><input form="form_modal" type="text" id="modal_name" name="modal_name" class="form-control input-sm" required></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 제조사</label>
                                <div class="col-xs-4"><input form="form_modal" type="text" id="modal_company" name="modal_company" class="form-control input-sm" required></div>
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> PLC코드</label>
                                <div class="col-xs-4"><input form="form_modal" type="text" id="modal_plc" name="modal_plc" class="form-control input-sm" required></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 기준UPH</label>
                                <div class="col-xs-4"><input form="form_modal" type="text" id="modal_uph" name="modal_uph" class="form-control input-sm" required></div>
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 가동여부</label>
                                <div class="col-xs-4">
                                    <select form="form_modal" id="modal_status" name="modal_status" class="input-sm form-control input-s-sm inline" required>
                                        <option value="">선택</option>
                                        <option value="Y">Y</option>
                                        <option value="N">N</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label"><span class="text-danger">*</span> 설비사진</label>
                                <div class="col-xs-10">

                                    <? for ($i = 0; $i < 2; $i++) {  // 첨부파일 요소 ?>

                                        <div class="modal_image_place" style="display: none;">
    					                	<img style="max-width: 500px;">
                                            <button class="btn btn-danger btn-sm modal_btn_image_delete">이미지 삭제</button>
    					            	</div>

    					                <div class="fileinput fileinput-new input-group m-t-xs" data-provides="fileinput">
    					                    <div class="form-control" data-trigger="fileinput">
    					                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    					                    <span class="fileinput-filename"></span>
    					                    </div>
    					                    <span class="input-group-addon btn btn-default btn-file">
    					                        <span class="fileinput-new"><!-- Select file -->이미지 선택</span>
    					                        <span class="fileinput-exists"><!-- Change -->변경</span>
    					                        <input form="form_modal" type="file" name="modal_file[]" data-input-name="modal_file[]">
    					                    </span>
    					                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><!-- Remove -->비우기</a>
    					                </div>

                                        <div class="hr-line-dashed"></div>

                                    <? } ?>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-xs-2 control-label">비고</label>
                                <div class="col-xs-10"><textarea form="form_modal" id="modal_memo" name="modal_memo" class="form-control" rows="5"></textarea></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button form="form_modal" type="button" class="btn btn-white" data-dismiss="modal">닫기</button>
                <button form="form_modal" type="submit" class="btn btn-primary">저장하기</button>
            </div>

        </div>
    </div>
</div>

<form id="form_modal" name="form_modal">
    <input type="hidden" id="modal_idx" name="modal_idx">
</form>
<? include "./Footer.php"; ?>