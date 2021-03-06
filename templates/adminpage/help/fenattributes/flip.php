<?php
/******************************************************************************
 *                                                                            *
 *    This file is part of RPB Chessboard, a WordPress plugin.                *
 *    Copyright (C) 2013-2021  Yoann Le Montagner <yo35 -at- melix.net>       *
 *                                                                            *
 *    This program is free software: you can redistribute it and/or modify    *
 *    it under the terms of the GNU General Public License as published by    *
 *    the Free Software Foundation, either version 3 of the License, or       *
 *    (at your option) any later version.                                     *
 *                                                                            *
 *    This program is distributed in the hope that it will be useful,         *
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *    GNU General Public License for more details.                            *
 *                                                                            *
 *    You should have received a copy of the GNU General Public License       *
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                            *
 ******************************************************************************/
?>

<h3 id="rpbchessboard-fenAttributeFlip"><?php esc_html_e( 'Board flipping', 'rpb-chessboard' ); ?></h3>

<div class="rpbchessboard-columns">
	<div>

		<p>
			<?php
				printf(
					esc_html__( 'The %1$s attribute controls whether the chessboard is rotated or not.', 'rpb-chessboard' ),
					'<span class="rpbchessboard-sourceCode">flip</span>'
				);
			?>
		</p>

		<table class="rpbchessboard-attributeTable">
			<tbody>
				<tr>
					<th><?php esc_html_e( 'Value', 'rpb-chessboard' ); ?></th>
					<th><?php esc_html_e( 'Default', 'rpb-chessboard' ); ?></th>
					<th><?php esc_html_e( 'Description', 'rpb-chessboard' ); ?></th>
				</tr>
				<tr>
					<td><a href="#" class="rpbchessboard-sourceCode rpbchessboard-fenAttributeFlip-value">false</a></td>
					<td><div class="rpbchessboard-tickIcon"></div></td>
					<td><?php esc_html_e( 'The board is seen from White\'s point of view.', 'rpb-chessboard' ); ?></td>
				</tr>
				<tr>
					<td><a href="#" class="rpbchessboard-sourceCode rpbchessboard-fenAttributeFlip-value">true</a></td>
					<td></td>
					<td><?php esc_html_e( 'The board is seen from Black\'s point of view.', 'rpb-chessboard' ); ?></td>
				</tr>
			</tbody>
		</table>

	</div>
	<div>

		<div class="rpbchessboard-sourceCode">
			<?php
				printf(
					'[%1$s <strong>flip=<span id="rpbchessboard-fenAttributeFlip-sourceCodeExample">false</span></strong>] ... [/%1$s]',
					esc_html( $model->getFENShortcode() )
				);
			?>
		</div>

		<div class="rpbchessboard-visuBlock">
			<div>
				<div id="rpbchessboard-fenAttributeFlip-anchor"></div>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						function refresh(value) {
							var props = $.extend(<?php echo wp_json_encode( $model->getDefaultChessboardSettings() ); ?>, {
								position: 'start',
								squareSize: 28
							});
							if (value) {
								props.flip = value === 'true';
							}
							RPBChessboard.renderFEN($('#rpbchessboard-fenAttributeFlip-anchor'), props, true);
						}
						refresh();
						$('.rpbchessboard-fenAttributeFlip-value').click(function(e) {
							e.preventDefault();
							var value = $(this).text();
							refresh(value);
							$('#rpbchessboard-fenAttributeFlip-sourceCodeExample').text(value);
						});
					});
				</script>
			</div>
		</div>

	</div>
</div>
