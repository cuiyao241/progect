@extends('layout.admin')

@section('title','�û������ҳ��')

@section('content')

<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>����û�</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form action="/admin/user/insert" method='post' enctype='multipart/form-data' class="mws-form">

            @if (count($errors) > 0)
               <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style='font-size:17px;list-style:none'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">��Ա��: </label>
        				<div class="mws-form-item">
        					<input type="text" name='User_name'>
        				</div>
        			</div>   

        			<div class="mws-form-row">
                        <label class="mws-form-label">��Ա�Ա�: </label>
                        <div class="mws-form-item clearfix">
                            <ul class="mws-form-list inline">
                                <li><input type="radio" name='Sex'> <label>��</label></li>
                                <li><input type="radio" name='Sex'> <label>Ů</label></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">��Ա����: </label>
                        <div class="mws-form-item">
                            <input type="password" name='password'>
                        </div>
                    </div> 
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">ȷ������:</label>
                        <div class="mws-form-item">
                            <input type="password" class="small" name='repassword'>
                        </div>
                    </div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">��Ա��ʵ����: </label>
        				<div class="mws-form-item">

        					<input type="text" name='TrueName'>
        				</div>
        			</div> 

        			<div class="mws-form-row">
        				<label class="mws-form-label">����: </label>
        				<div class="mws-form-item">
        					<input type="text" name='Emails'>
        				</div>
        			</div>   

        			<div class="mws-form-row">
        				<label class="mws-form-label">�ֻ���: </label>
        				<div class="mws-form-item">
        					<input type="text" name='Phonecode'>
        				</div>
        			</div>   

					<div class="mws-form-row">
                        <label class="mws-form-label">���ڳ���</label>
                        <div class="mws-form-item">
                            <select>
                                <option>����</option>
                                <option>�Ϻ�</option>
                                <option>����</option>
                                <option>����</option>
                            </select>
                        </div>
                    </div>		
        			
        		</div>

				<div class="mws-form-row">
        				<label class="mws-form-label">�ʱ����: </label>
        				<div class="mws-form-item">

        					<input type="text" name='PostCode'>
        				</div>
        			</div> 

				<div class="mws-form-row">
        				<label class="mws-form-label">�˻����: </label>
        				<div class="mws-form-item">

        					<input type="text" name='AdvancePayment'>
        				</div>
        			</div> 

        			<div class="mws-form-row">
        				<label class="mws-form-label">�ϴε�¼ʱ��: </label>
        				<div class="mws-form-item">

        					<input type="text" name='LoadDate'>
        				</div>
        			</div> 

                    <div class="mws-form-row">
                        <label class="mws-form-label">�ļ��ϴ�:</label>
                        <div class="mws-form-item">
                            <div style="position: relative;" class="fileinput-holder"><input type="file" readonly="readonly" class="small"  name='profile' placeholder="No file selected..."><span style="display:block; overflow: hidden; position: absolute; top: 0; right: 0; cursor: pointer;" type="button" class="fileinput-btn btn">Browse...</span></div>
                        </div>
                    </div>

        		<div class="mws-button-row">
        			<input type="submit" class="btn btn-success" value="���">
                    {{ csrf_field()}}
        			<input type="reset" class="btn btn-danger" value="����">
        		</div>
            </form>
        </div>    	
    </div>
@endsection

