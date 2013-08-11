
<h3><?php _e('Reminder', 'rpbchessboard'); ?></h3>


<h4><?php _e('FEN diagram alone', 'rpbchessboard'); ?></h4>

<p>
	<?php echo sprintf(
		__(
			'Chess diagrams can be inserted in pages and posts thanks to the %1$s[fen][/fen]%2$s shortcode. '.
			'See an example below '.
			'(left: code written by the post or page author; right: what is publicly visible).',
		'rpbchessboard'),
		'<span class="rpbchessboard-admin-code-inline">',
		'</span>'
	); ?>
</p>

<div class="rpbchessboard-admin-columns">

	<div class="rpbchessboard-admin-column-left">
		<div class="rpbchessboard-admin-code-block">
			<?php _e('White to move and mate in two:', 'rpbchessboard'); ?>
			<br/><br/>
			[fen]r2qkbnr/ppp2ppp/2np4/4N3/2B1P3/2N5/PPPP1PPP/R1BbK2R w KQkq - 0 6[/fen]
			<br/><br/>
			<?php _e(
				'This position is known as Légal Mate. '.
				'It is named after the French player François Antoine de Kermeur Sire de Legale (1702-1795).'
			, 'rpbchessboard'); ?>
		</div>
		<p>
			<?php echo sprintf(
				__(
					'The string between the %1$s[fen][/fen]%2$s tags describe the position. '.
					'The used notation follows the %3$sForsyth-Edwards notation (FEN)%4$s. '.
					'A comprehensive description of the FEN format is available on %3$sWikipedia%4$s.',
				'rpbchessboard'),
				'<span class="rpbchessboard-admin-code-inline">',
				'</span>',
				sprintf('<a href="%1$s" target="_blank">',
					__('http://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation', 'rpbchessboard')
				),
				'</a>'
			); ?>
		</p>
	</div>

	<div class="rpbchessboard-admin-column-right">
		<div class="rpbchessboard-admin-visu-block">
			<p><?php _e('White to move and mate in two:', 'rpbchessboard'); ?></p>
			<pre class="jsChessLib-fen-source" id="rpbchessboard-admin-example1">r2qkbnr/ppp2ppp/2np4/4N3/2B1P3/2N5/PPPP1PPP/R1BbK2R w KQkq - 0 6</pre>
			<script type="text/javascript">
				jsChessRenderer.processFENByID("rpbchessboard-admin-example1", 28, true);
			</script>
			<p>
				<?php _e(
					'This position is known as Légal Mate. '.
					'It is named after the French player François Antoine de Kermeur Sire de Legale (1702-1795).'
				, 'rpbchessboard'); ?>
			</p>
		</div>
	</div>

</div>





<h4><?php _e('Simple PGN game', 'rpbchessboard'); ?></h4>

<div class="rpbchessboard-admin-columns">

	<div class="rpbchessboard-admin-column-left">
		<div class="rpbchessboard-admin-code-block">
			[pgn]
			<br/><br/>
			[Event "London, England"]<br/>
			[Site "London, England"]<br/>
			[Date "1912.10.29"]<br/>
			[Round "?"]<br/>
			[White "Lasker, Edward"]<br/>
			[Black "Thomas, George Alan"]<br/>
			[Result "1-0"]<br/>
			<br/>
			1. d4 e6 2. Nf3 f5 3. Nc3 Nf6 4. Bg5 Be7 5. Bxf6 Bxf6 6. e4
			fxe4 7. Nxe4 b6 8. Ne5 O-O 9. Bd3 Bb7 10. Qh5 Qe7 11. Qxh7+
			Kxh7 12. Nxf6+ Kh6 13. Neg4+ Kg5 14. h4+ Kf4 15. g3+ Kf3
			16. Be2+ Kg2 17. Rh2+ Kg1 18. Kd2# 1-0
			<br/><br/>
			[/pgn]
		</div>
		<p>
			<?php echo sprintf(
				__(
					'The code between the %1$s[pgn][/pgn]%2$s tags describe the game. '.
					'The used notation follows the %3$sPGN format%4$s. '.
					'It can be copy-pasted from a .pgn file generated by any chess database software, '.
					'including %5$sChessbase%6$s, %7$sScid%8$s, etc...',
				'rpbchessboard'),
				'<span class="rpbchessboard-admin-code-inline">',
				'</span>',
				sprintf('<a href="%1$s" target="_blank">',
					__('http://en.wikipedia.org/wiki/Forsyth%E2%80%93Edwards_Notation', 'rpbchessboard')
				),
				'</a>',
				'<a href="http://www.chessbase.com/" target="_blank">',
				'</a>',
				'<a href="http://scid.sourceforge.net/" target="_blank">',
				'</a>'
			); ?>
		</p>
	</div>

	<div class="rpbchessboard-admin-column-right">
		<div class="rpbchessboard-admin-visu-block">
			<pre class="jsChessLib-pgn-source" id="rpbchessboard-admin-example2-in">
				[Event "London, England"]
				[Site "London, England"]
				[Date "1912.10.29"]
				[Round "?"]
				[White "Lasker, Edward"]
				[Black "Thomas, George Alan"]
				[Result "1-0"]

				1. d4 e6 2. Nf3 f5 3. Nc3 Nf6 4. Bg5 Be7 5. Bxf6 Bxf6 6. e4
				fxe4 7. Nxe4 b6 8. Ne5 O-O 9. Bd3 Bb7 10. Qh5 Qe7 11. Qxh7+
				Kxh7 12. Nxf6+ Kh6 13. Neg4+ Kg5 14. h4+ Kf4 15. g3+ Kf3
				16. Be2+ Kg2 17. Rh2+ Kg1 18. Kd2# 1-0
			</pre>
			<div class="jsChessLib-invisible" id="rpbchessboard-admin-example2-out">
				<div class="rpbchessboard-game-head">
					<div class="jsChessLib-field-fullNameWhite">
						<span class="rpbchessboard-white-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameWhite"></span>
					</div>
					<div class="jsChessLib-field-fullNameBlack">
						<span class="rpbchessboard-black-square">&nbsp;</span>
						<span class="jsChessLib-anchor-fullNameBlack"></span>
					</div>
					<div class="jsChessLib-field-Event">
						<span class="jsChessLib-anchor-Event"></span>
						<span class="jsChessLib-field-Round">(<span class="jsChessLib-anchor-Round"></span>)</span>
						<span class="jsChessLib-field-Date">- <span class="jsChessLib-anchor-Date"></span></span>
					</div>
				</div>
				<div class="rpbchessboard-game-body jsChessLib-field-moves">
					<span class="jsChessLib-anchor-moves"></span>
					<div class="jsChessLib-field-Result">
						<span class="jsChessLib-anchor-Result"></span>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				jsChessRenderer.processPGNByID("rpbchessboard-admin-example2");
			</script>
		</div>
	</div>

</div>





<h4><?php _e('PGN game with comments, variations and diagrams', 'rpbchessboard'); ?></h4>

TODO