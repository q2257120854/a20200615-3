<div class="input-group"><div class="input-group-addon"><span class="fa fa-list-ol"></span> 防红类型</div>
<select id="api" name="api" class="form-control">
<option value="<?php echo $conf['jk']?>dwz.php">极速跳转</option>
<option value="<?php echo $conf['jk']?>zl.php">隐性直链</option>
</select>
</div>
<br/>
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-paste"></span> 短链类型</span>
<select id="dwzapi" name="dwzapi" class="form-control">
<option value="&type=tcn">t.cn</option>
<option value="&type=urlcn">url.cn</option>
<option value="&type=dwzcn">dwz.cn</option>
<option value="&type=suoim">suo.im</option>
<option value="&type=mrwso">mrw.so</option>
</select>
</div>
<br/>
<div class="input-group">
<span class="input-group-addon"><span class="fa fa-chain"></span> 你的网址</span>
<input type="url" name="longurl" id="longurl" class="form-control" placeholder="请输入域名或网址"> 
</div>  
<br>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
<div class="btn-group" role="group">
<button type="radio" name="type"  onclick="sub()" class="btn btn-success" style="background: linear-gradient(to right,#00E3E3,#02C874)">在线生成</button>
</div>
<div class="btn-group" role="group">
<button type="radio" name="type" id="cx" class="btn btn-primary" style="background: linear-gradient(to right,#87CEFA,#10495ED)">立即查询</button>
</div></div>
</center> <br>
</form>