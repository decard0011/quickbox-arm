<?php
  include ('..inc/config.php');
  include ('..inc/panel.header.php');
  include ('..inc/panel.menu.php');
?>

          <!--SERVICE CONTROL CENTER-->
          <div class="panel panel-inverse">
            <div class="panel-heading">
              <h4 class="panel-title"><?php echo T('SERVICE_CONTROL_CENTER'); ?></h4>
            </div>
            <div class="panel-body" style="padding: 0">
              <div class="table-responsive">
                <table class="table table-hover nomargin" style="font-size:14px">
                  <thead>
                    <tr>
                      <th class="text-center"><?php echo T('SERVICE_STATUS'); ?></th>
                      <th class="text-center"><?php echo T('RESTART_SERVICES'); ?></th>
                      <th class="text-center"><?php echo T('ENABLE_DISABLE_SERVICES'); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (file_exists("/install/.rtorrent.lock")) { ?>
                    <tr>
                      <td><span id="appstat_rtorrent"></span> RTorrent <span class="tooltips" data-toggle="tooltip" title="scgi_port: <?php echo "/var/run/$username/.rtorrent.sock"; ?>" data-placement="right"><i class="tooltips fa fa-usb"></i><span></td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=rtorrent'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyr"; ?></td>
                    </tr>
                  <?php } ?>

                  <?php if (file_exists("/install/.autodlirssi.lock")) { ?>
                    <tr>
                      <td><span id="appstat_irssi"></span> iRSSi-AutoDL </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=irssi'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyi"; ?></td>
                    </tr>
                    <?php } ?>

                  <?php if (file_exists("/install/.deluge.lock")) { ?>
                    <tr>
                      <td><span id="appstat_deluged"></span> DelugeD </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=deluged'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyd"; ?></td>
                    </tr>
                    <tr>
                      <td><span id="appstat_delugeweb"></span> Deluge Web </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=delugeweb'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodydw"; ?></td>
                    </tr>
                    <?php } ?>

                  <?php if (file_exists("/install/.transmission.lock")) { ?>
                    <tr>
                      <td><span id="appstat_transmission"></span> Transmission </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=transmission'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodytr"; ?></td>
                    </tr>
                    <?php } ?>
					
                  <?php if (file_exists("/install/.qbittorrent.lock")) { ?>
                    <tr>
                      <td><span id="appstat_qbittorrent"></span> qBittorrent </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=qbittorrent'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyqb"; ?></td>
                    </tr>
                    <?php } ?>
					
                <?php if ($username == "$master") { ?>

                    <tr>
                      <td><span id="appstat_webconsole"></span> Web Console </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=shellinabox'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$wcbodyb"; ?></td>
                    </tr>

                    <?php if (file_exists("/install/.btsync.lock")) { ?>
                    <tr>
                      <td><span id="appstat_btsync"></span> BTSync </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=btsync'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyb"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.denyhosts.lock")) { ?>
                    <tr>
                      <td><span id="appstat_denyhosts"></span> Denyhosts </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=denyhosts'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodydh"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.fail2ban.lock")) { ?>
                    <tr>
                      <td><span id="appstat_fail2ban"></span> Fail2ban </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=fail2ban'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyf2b"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.filebrowser.lock")) { ?>
                    <tr>
                      <td><span id="appstat_filebrowser"></span> File Browser </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=filebrowser'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyfb"; ?></td>
                    </tr>
                    <?php } ?>

                    
                    <?php if (file_exists("/install/.$username.flexget.lock")) { ?>
                    <tr>
                      <td><span id="appstat_flexget"></span> FlexGet </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=flexget'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyfg"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.flood.lock")) { ?>
                    <tr>
                      <td><span id="appstat_flood"></span> Flood </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=flood'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyfl"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.netdata.lock")) { ?>
                    <tr>
                      <td><span id="appstat_netdata"></span> Netdata </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=netdata'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodynd"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.novnc.lock")) { ?>
                    <tr>
                      <td><span id="appstat_novnc"></span> noVNC </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=novnc'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyvnc"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.plex.lock")) { ?>
                    <tr>
                      <td><span id="appstat_plex"></span> Plex </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=plex'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyp"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.syncthing.lock")) { ?>
                    <tr>
                      <td><span id="appstat_syncthing"></span> Syncthing </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=syncthing'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$cbodyst"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if (file_exists("/install/.sample.lock")) { ?>
                    <tr>
                      <td><?php echo "$sampleval"; ?> SAMPLE </td>
                      <td class="text-center"><a href="javascript:;" onclick="location.href='?id=88&servicestart=sample'" class="btn btn-xs btn-default"><i class="fa fa-refresh text-info"></i> <?php echo T('REFRESH'); ?></a></td>
                      <td class="text-center"><?php echo "$samplebody"; ?></td>
                    </tr>
                    <?php } ?>

                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div>
          </div><!-- panel -->