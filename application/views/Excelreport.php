<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
 
<head>
<title><?php echo $h1;?></title>
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if gte mso 9]>
<xml>
 <x:ExcelWorkbook>
  <x:ExcelWorksheets>
   <x:ExcelWorksheet>
    <x:Name>** WORKSHEET NAME **</x:Name>
    <x:WorksheetOptions>
     <x:Selected/>
     <x:FreezePanes/>
     <x:FrozenNoSplit/>
     <x:SplitHorizontal>** FROZEN ROWS + 1 **</x:SplitHorizontal>
     <x:TopRowBottomPane>** FROZEN ROWS + 1 **</x:TopRowBottomPane>
     <x:SplitVertical>** FROZEN COLUMNS + 1 **</x:SplitVertical>
     <x:LeftColumnRightPane>** FROZEN COLUMNS + 1**</x:LeftColumnRightPane>
     <x:ActivePane>0</x:ActivePane>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>1</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>2</x:Number>
      </x:Pane>
      <x:Pane>
       <x:Number>0</x:Number>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
  <x:ProtectStructure>False</x:ProtectStructure>
  <x:ProtectWindows>False</x:ProtectWindows>
 </x:ExcelWorkbook>
</xml><![endif]-->
 
</head>

<body>
<h1><?php echo $h1;?></h1>
<h2><?php echo $h2;?></h2>
<table>
  <tbody>
  <?php foreach($data as $row) : ?>
    <tr>
        <?php foreach($row as $col) : ?>
        <td>
          <?php echo $col;?>
        </td>
        <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
      <?php foreach($footer as $col) : ?> 
        <th><?php echo $col;?></th>
      <?php endforeach; ?>
      </tr>
    </tfoot>
</table>
</body>
</html>